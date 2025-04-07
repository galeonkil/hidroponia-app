<?php

namespace App\Console\Commands;

use App\Models\SensorData;
use Illuminate\Console\Command;
use PhpMqtt\Client\MqttClient;
use PhpMqtt\Client\ConnectionSettings;

class MqttSubscribeCommand extends Command
{

    protected $signature = 'mqtt:subscribe';

    protected $description = 'Subscribe to MQTT topics from AWS IoT Core';

    public function handle()
    {
        $this->info('Iniciando suscriptor MQTT...');

        // Configuración de conexión
        $server = env('AWS_IOT_ENDPOINT', 'afr3yrcixfq4c-ats.iot.sa-east-1.amazonaws.com');
        $port = 8883;
        $clientId = 'laravel-' . gethostname();
        
        $settings = (new ConnectionSettings)
            ->setUseTls(true)
            ->setTlsVerifyPeer(true)
            ->setTlsCertificateAuthorityFile(storage_path('certs/AmazonRootCA1.pem'))
            ->setTlsClientCertificateFile(storage_path('certs/device.crt'))
            ->setTlsClientCertificateKeyFile(storage_path('certs/private.key'))
            ->setKeepAliveInterval(60);

        $mqtt = new MqttClient($server, $port, $clientId);

        try {
            $mqtt->connect($settings, true);
            $this->info('Conectado a AWS IoT Core');

            // Suscripción a tópicos
            $mqtt->subscribe('fabrica', function (string $topic, string $message) {
                $data = json_decode($message, true);
                
                // Procesamiento del mensaje
                SensorData::create(
                    [   'device' => $data['device'],
                        'temp_air' => $data['temp_air'],
                        'humidity' => $data['humidity'],
                        'light' => $data['light'],
                        'tds' => $data['tds'],
                        'ph' => $data['ph'],
                        'temp_water' => $data['temp_water'],
                        'timestamp' => now()
                    ]
                );
                
                $this->info("Datos actualizados: " . json_encode($data));
            }, 0);

            $mqtt->loop(true);

        } catch (\Exception $e) {
            $this->error("Error: " . $e->getMessage());
        }
    
    }
}

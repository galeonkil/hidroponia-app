<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-aside-dashboard></x-aside-dashboard>
    <x-main-dashboard></x-main-dashboard>
    <x-footer-dashboard></x-footer-dashboard>

</x-app-layout>

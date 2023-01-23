<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Configuration Annee Scolaire') }}
        </h2>
    </x-slot>

    <div class="py-2 px-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @livewire('settings')
        </div>
    </div>
</x-app-layout>
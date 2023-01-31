<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-sky-900 leading-tight">
            {{ __('Freights') }}
        </h2>
    </x-slot>
    <section class="py-2">     
        @livewire('freights-index')
    </section>
</x-app-layout>
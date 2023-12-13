<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Receitas') }}
        </h2>
    </x-slot>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form action="{{ route('revenues.store') }}" method="post">
            @csrf
            <x-input-label for="revenueTittle" :value="__('Título/Fonte de Renda')"/>
            <x-text-input id="revenueTittle" name="revenueTittle" type="text" class="mt-1 block w-full" required autofocus autocomplete="Receita"/>
            <x-primary-button class="mt-4">{{ __('Salvar') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>

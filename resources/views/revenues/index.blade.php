<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Receitas') }}
        </h2>
    </x-slot>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form action="{{ route('revenues.store') }}" method="post">
            @csrf
            <x-input-label for="revenue-title" :value="__('Título/Fonte de Renda')"/>
            <x-text-input id="revenue-title" name="revenue_title" type="text" class="mt-1 block w-full" required autofocus autocomplete="Receita"/>

            <x-input-label for="revenue-amount" :value="__('Valor da Renda')"/>
            <x-text-input id="revenue-amount" name="revenue_amount" type="number" class="mt-1 block w-full" required autofocus/>

            <x-input-label for="revenue-payday" :value="__('Dia do Recebimento')"/>
            <x-text-input id="revenue-payday" name="revenue_payday" type="date" class="mt-1 block w-full" required autofocus/>

            <x-primary-button class="mt-4">{{ __('Salvar') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>

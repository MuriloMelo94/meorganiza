<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form action="{{ route('revenues.store') }}" method="post">
            @csrf
            <x-input-label for="revenueTittle" :value="__('Título/Fonte de Renda')"/>
            <x-text-input id="revenueTittle" name="revenueTittle" type="text" class="mt-1 block w-full" required autofocus autocomplete="Receita"/>
        </form>
    </div>
</x-app-layout>

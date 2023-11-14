<x-app-layout>

    <x-slot name="header">
            <span>{{ __('Criar um ativo') }}</span>
            <p class="text-base font-thin">Gere renda e aumente seu patrimônio.</p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid place-items-center gap-40 items-center justify-center grid-cols-1 mx-auto shadow-xl lg:grid-cols-2 rounded-xl  bg-gray-50 p-6 text-gray-900">
                    
                    <div class="hidden lg:block sm:max-w-md  overflow-hidden">
                        <img class="object-fill h-full bg-cover rounded-l-lg" src="./images/imgAtivo.svg" alt="Dois homens apertando as mãos em sinal de négocio fechado">
                    </div>
                    
                    <div class="w-full justify-center sm:max-w-md px-8 py-4 shadow-md overflow-hidden sm:rounded-lg rounded-lg" style="background: linear-gradient(266deg, rgba(34,149,150,1) 0%, rgba(131,218,160,1) 86%);">
                        <!-- Form -->
                        <div class="mt-6 space-y-1">

                            <form method="POST" action="{{ route('ativos')}}">
                                @csrf
                                @method('POST')
                                
                                <!-- Nome do ativo -->
                                <div class="mb-2">
                                    <x-input-label for="nomeAtivo" :value="__('Nome do ativo')" />
                                    <x-text-input id="nomeAtivo" class="block mt-1 w-full" type="text" name="nomeAtivo" :value="old('nomeAtivo')" required autofocus autocomplete="nomeAtivo" />
                                    <x-input-error :messages="$errors->get('nomeAtivo')" class="mt-2" />
                                </div>

                                <!-- Código do ativo -->
                                <div class="mb-2">
                                    <x-input-label for="codigo" :value="__('Código')" />
                                    <x-text-input id="tipoAtivo" class="block mt-1 w-full" type="text" name="codigo" :value="old('codigo')" required autofocus autocomplete="codigo" />
                                    <x-input-error :messages="$errors->get('codigo')" class="mt-2" /> 
                                </div>

                                <!-- Descrição -->
                                <div class="mb-2">
                                    <x-input-label for="descricaoAtivo" :value="__('Descrição')" />
                                    <x-text-input id="descricaoAtivo" class="block mt-1 w-full" type="text" name="descricaoAtivo" :value="old('descricaoAtivo')" autofocus autocomplete="descricaoAtivo" />
                                    <x-input-error :messages="$errors->get('descricaoAtivo')" class="mt-2" />
                                </div>

                                <!-- Valor do Ativo -->
                                
                                    <div class="mb-2">
                                        <x-input-label for="valorAtivo" :value="__('Valor')" />
                                        <x-text-input type="number" id="valorAtivo" class="block mt-1 w-full" step="0.01" name="valorAtivo" :value="old('valorAtivo')" required autofocus autocomplete="valorAtivo" value="{{ number_format(old('valorAtivo'), 2, ',', '.') }}" min="0" />
                                        <x-input-error :messages="$errors->get('valorAtivo')" class="mt-2" />
                                    </div>
                    
                                <!-- Botão -->
                                <div class="flex items-center justify-center py-10">
                                    <x-secondary-button>
                                        {{ __('Criar ativo') }}
                                    </x-secondary-button>
                                </div>
                            </form>
                        </div>
                    </div>
             </div>
        </div>
    </div>
</x-app-layout>

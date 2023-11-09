<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Fazer uma transação') }}
                <p class="text-base font-thin">Conduza seu futuro financeiro.</p>
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid place-items-center gap-40 items-center justify-center grid-cols-1 mx-auto shadow-xl lg:grid-cols-2 rounded-xl  bg-gray-50 p-6 text-gray-900">


                    <div class="hidden lg:block sm:max-w-md overflow-hidden sm:rounded-lg">
                        <img class="object-fill h-full bg-cover rounded-l-lg" src="./images/imgTransacao.svg" alt="">
                    </div>


                        <div class="w-full sm:max-w-md px-8 py-4 shadow-md overflow-hidden sm:rounded-lg rounded-lg" style="background: linear-gradient(266deg, rgba(34,149,150,1) 0%, rgba(131,218,160,1) 86%);">
                            <!-- Form -->
                            <div class="mt-6 space-y-1">

                                <form method="POST" action="{{ route('transacaos')}}">
                                    @csrf
                             
                                    <!-- Tipo de transação -->
                                    <div class="mb-2">
                                        <x-input-label for="tipoTransacao" :value="__('Tipo de Transação')" />
                                        <x-text-input id="tipoTransacao" class="block mt-1 w-full" type="text" name="tipoTransacao" :value="old('tipoTransacao')" required autofocus autocomplete="tipoTransacao" />
                                        <x-input-error :messages="$errors->get('tipoTransacao')" class="mt-2" />
                                    </div>

                                    <!-- Preço por unidade -->
                                    <div class="mb-2">
                                        <x-input-label for="valorAtivo" :value="__('Preço (Unidade)')" />
                                        <x-text-input id="valorAtivo" class="block mt-1 w-full" type="text" name="valorAtivo" :value="old('valorAtivo')" required autofocus autocomplete="valorAtivo" />
                                        <x-input-error :messages="$errors->get('valorAtivo')" class="mt-2" />
                                    </div>

                                     <!-- Botão -->
                                     <div class="flex items-center justify-center py-10">
                                        <x-secondary-button>
                                            {{ __('Fazer transação') }}
                                        </x-secondary-button>
                                    </div>
                                    

                                </form>
                            </div>
                        </div>
                </div>
        </div>
    </div>
</x-app-layout>

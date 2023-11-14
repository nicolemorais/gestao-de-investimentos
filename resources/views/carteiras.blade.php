<section>
    <div class="p-4 sm:p-8">
        <div class="max-w-xl">
            
            <div class="flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 stroke-zinc-900">
                        <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
                    </svg> 
                </x-secondary-button>
            </div>
            
            <header class="font-semibold text-2xl text-gray-800 leading-tight">
                <h2 class="text-lg font-medium text-gray-900 mb-4 py-4">
                    {{ __('Criar uma nova carteira') }}
                </h2>
            </header>
           
            <form method="POST" action="{{ route('carteiras')}}">
                @csrf
                @method('POST')

                {{-- Nome da carteira --}}
                <div class="mb-2">
                    <x-input-label for="nomeCarteira" :value="__('Nome da carteira')" />
                    <x-text-input id="nomeCarteira" class="block mt-1 w-full" type="text" name="nomeCarteira" :value="old('nomeCarteira')" required autofocus autocomplete="nomeCarteira" />
                    <x-input-error :messages="$errors->get('nomeCarteira')" class="mt-2" />
                </div>
        
                {{-- Botão --}}
                <div class="flex items-center justify-center py-10">
                    <x-secondary-button>
                        {{ __('Criar') }}
                    </x-secondary-button>
                </div>
            </form>
        </div>
    </div>
</section>

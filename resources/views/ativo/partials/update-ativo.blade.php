<section>
    <x-slot name="header">
        <h2>
            {{ __('Atualizar ativo') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('ativo.update', $ativo->id) }}" class="mt-6 space-y-6 overflow-hidden">
        @csrf
        @method('PUT')

        <!-- Nome do ativo -->
        <div class="mb-2">
            <x-input-label for="nomeAtivo" :value="__('Nome do ativo')" />
            <x-text-input id="nomeAtivo" class="block mt-1 w-full" type="text" name="nomeAtivo" value="{{ $ativo->nomeAtivo }}" required autofocus autocomplete="nomeAtivo" />
            <x-input-error :messages="$errors->get('nomeAtivo')" class="mt-2" />
        </div>

        <!-- Código do ativo -->
        <div class="mb-2">
            <x-input-label for="codigo" :value="__('Código')" />
            <x-text-input id="tipoAtivo" class="block mt-1 w-full" type="text" name="codigo" value="{{ $ativo->codigo }}" required autofocus autocomplete="codigo" />
            <x-input-error :messages="$errors->get('codigo')" class="mt-2" /> 
        </div>

        <!-- Descrição -->
        <div class="mb-2">
            <x-input-label for="descricaoAtivo" :value="__('Descrição')" />
            <x-text-input id="descricaoAtivo" class="block mt-1 w-full" type="text" name="descricaoAtivo" value="{{ $ativo->descricaoAtivo }}" autofocus autocomplete="descricaoAtivo" />
            <x-input-error :messages="$errors->get('descricaoAtivo')" class="mt-2" />
        </div>

        <!-- Valor do Ativo -->
        <div class="mb-2">
            <x-input-label for="valorAtivo" :value="__('Valor')" />
            <x-text-input id="valorAtivo" class="block mt-1 w-full" type="text" name="valorAtivo" value="{{ $ativo->valorAtivo }}" required autofocus autocomplete="valorAtivo" />
            <x-input-error :messages="$errors->get('valorAtivo')" class="mt-2" />
        </div>

        <!-- Botão -->
        <div class="flex items-center justify-center py-10">
            <x-secondary-button>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M15.312 11.424a5.5 5.5 0 01-9.201 2.466l-.312-.311h2.433a.75.75 0 000-1.5H3.989a.75.75 0 00-.75.75v4.242a.75.75 0 001.5 0v-2.43l.31.31a7 7 0 0011.712-3.138.75.75 0 00-1.449-.39zm1.23-3.723a.75.75 0 00.219-.53V2.929a.75.75 0 00-1.5 0V5.36l-.31-.31A7 7 0 003.239 8.188a.75.75 0 101.448.389A5.5 5.5 0 0113.89 6.11l.311.31h-2.432a.75.75 0 000 1.5h4.243a.75.75 0 00.53-.219z" clip-rule="evenodd" />
                </svg>                  
            </x-secondary-button>
        </div>
    </form>
</section>
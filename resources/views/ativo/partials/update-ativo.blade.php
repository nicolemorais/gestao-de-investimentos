<section>
    <header class="font-semibold text-2xl text-gray-800 leading-tight mb-6">
        <span class="text-lg font-medium text-gray-900 mb-4 py-4">
            {{ __('Atualizar informações do ativo') }}
        </span>

    </header>

    <form method="POST" action="{{ route('ativo.update', $ativo->id) }}" class="mt-6 space-y-6 overflow-hidden">
        @csrf
        @method('PUT')

        {{-- Nome do ativo --}}
        <div class="mb-2">
            <x-input-label for="nome_ativo" :value="__('Nome do ativo')" />
            <x-text-input id="nome_ativo" class="block mt-1 w-full" type="text" name="nome_ativo" value="{{ $ativo->nome_ativo }}" autocomplete="nome_ativo" />
            <x-input-error :messages="$errors->get('nome_ativo')" class="mt-2" />
        </div>

        {{-- Código do ativo --}}
        <div class="mb-2">
            <x-input-label for="codigo" :value="__('Código')" />
            <x-text-input id="codigo" class="block mt-1 w-full" type="text" name="codigo" value="{{ $ativo->codigo }}" autocomplete="codigo" />
            <x-input-error :messages="$errors->get('codigo')" class="mt-2" />
        </div>

        {{-- Descrição --}}
        <div class="mb-2">
            <x-input-label for="descricao" :value="__('Descrição')" />
            <x-text-input id="descricao" class="block mt-1 w-full" type="text" name="descricao" value="{{ $ativo->descricao }}" autocomplete="descricao" />
            <x-input-error :messages="$errors->get('descricao')" class="mt-2" />
        </div>

        {{-- Valor do Ativo --}}
        <div class="mb-2">
            <x-input-label for="valor" :value="__('Valor')" />
            <x-text-input id="valor" class="block mt-1 w-full" type="text" name="valor" value="{{ $ativo->valor }}" autocomplete="valor" />
            <x-input-error :messages="$errors->get('valor')" class="mt-2" />
        </div>

        {{-- Tipo de renda --}}
        <div class="mb-2">
            <x-input-label for="id_carteira" :value="__('Selecione um tipo de renda')" />
            <select id="id_carteira" name="id_carteira" type="select" class="block mt-1 w-full border-gray-300 focus:none focus:ring-1 focus:ring-gray-300 focus:border-gray-200 focus:ring-offset rounded-md shadow-sm">
                @foreach ($carteiras as $carteira)
                    <option value="{{ $carteira->id }}">{{ $carteira->nome_carteira }}</option>
                @endforeach
            </select>
        </div>

        {{-- Botão --}}
        <div class="flex items-center justify-center py-10">
            <x-secondary-button>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M15.312 11.424a5.5 5.5 0 01-9.201 2.466l-.312-.311h2.433a.75.75 0 000-1.5H3.989a.75.75 0 00-.75.75v4.242a.75.75 0 001.5 0v-2.43l.31.31a7 7 0 0011.712-3.138.75.75 0 00-1.449-.39zm1.23-3.723a.75.75 0 00.219-.53V2.929a.75.75 0 00-1.5 0V5.36l-.31-.31A7 7 0 003.239 8.188a.75.75 0 101.448.389A5.5 5.5 0 0113.89 6.11l.311.31h-2.432a.75.75 0 000 1.5h4.243a.75.75 0 00.53-.219z" clip-rule="evenodd" />
                </svg>
            </x-secondary-button>
        </div>
    </form>
</section>

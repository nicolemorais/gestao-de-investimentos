<section class="p-10" class="bg-slay-200">
    <div class="flex justify-end">
        <x-secondary-button x-on:click="$dispatch('close')">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 stroke-zinc-900">
                <path fill-rule="evenodd"
                    d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                    clip-rule="evenodd" />
            </svg>
        </x-secondary-button>
    </div>

    <header class="font-semibold text-2xl text-gray-800 leading-tight mb-6">
        <span class="text-lg font-medium text-gray-900 mb-4 py-4">
            {{ __('Adicione um novo ativo') }}
            <p class="text-base font-thin">Gere renda e aumente seu patrimônio.</p>
        </span>

    </header>


    <form method="POST" action="{{ route('ativo.create') }}">
        @csrf
        @method('POST')

        {{-- Nome do ativo --}}
        <div class="mb-2">
            <x-input-label for="nome_ativo" :value="__('Nome do ativo')" />
            <x-text-input id="nome_ativo" class="block mt-1 w-full" type="text" name="nome_ativo" :value="old('nome_ativo')"
                required autofocus autocomplete="nome_ativo" />
            <x-input-error :messages="$errors->get('nome_ativo')" class="mt-2" />
        </div>

        {{-- Código do ativo --}}
        <div class="mb-2">
            <x-input-label for="codigo" :value="__('Código')" />
            <x-text-input id="codigo" class="block mt-1 w-full" type="text" name="codigo" :value="old('codigo')"
                required autofocus autocomplete="codigo" />
            <x-input-error :messages="$errors->get('codigo')" class="mt-2" />
        </div>

        {{-- Descrição --}}
        <div class="mb-2">
            <x-input-label for="descricao" :value="__('Descrição')" />
            <x-text-input id="descricao" class="block mt-1 w-full" type="text" name="descricao " :value="old('descricao')"
                autofocus autocomplete="descricao" />
        </div>

        {{-- Valor do Ativo --}}
        <div class="mb-2">
            <x-input-label for="valor" :value="__('Valor')" />
            <x-text-input type="number" id="valor" class="block mt-1 w-full" step="0.01" name="valor"
                :value="old('valor')" required autofocus autocomplete="valor"
                value="{{ number_format(old('valorAtivo'), 2, ',', '.') }}" min="0" />
            <x-input-error :messages="$errors->get('valor')" class="mt-2" />
        </div>


        {{-- Tipo de renda --}}
        <div class="mb-2">
            <x-input-label for="id_carteira" :value="__('Selecione um tipo de renda')" />
            <select id="id_carteira" name="id_carteira" type="select" class="block mt-1 w-full border-gray-300 focus:none focus:ring-1 focus:ring-gray-300 focus:border-gray-200 focus:ring-offset rounded-md shadow-sm" required autofocus>
                @foreach ($carteiras as $carteira)
                    <option value="{{ $carteira->id }}">{{ $carteira->nome_carteira }}</option>
                @endforeach
            </select>
        </div>


        {{-- Botão --}}
        <div class="flex items-center justify-center py-10">
            <x-secondary-button>
                {{ __('Adicionar') }}
            </x-secondary-button>
        </div>
    </form>
</section>

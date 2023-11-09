<section>
    <header>
        <div class="mb-4 mt-4 flex justify-between gap-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Gerenciar carteira</h2>
            <div class="block">
                {{-- Número da carteira --}}
                <div class=" gap-2 font-semibold text-md text-gray-800 leading-tight inline-flex items-center px-4 py-2 border bg-white-950 border-slate-700 rounded-full h-7  uppercase tracking-widest shadow-sm  disabled:opacity-25 transition ease-in-out duration-150">
                    {{ ($ativo->id) }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M15.75 1.5a6.75 6.75 0 00-6.651 7.906c.067.39-.032.717-.221.906l-6.5 6.499a3 3 0 00-.878 2.121v2.818c0 .414.336.75.75.75H6a.75.75 0 00.75-.75v-1.5h1.5A.75.75 0 009 19.5V18h1.5a.75.75 0 00.53-.22l2.658-2.658c.19-.189.517-.288.906-.22A6.75 6.75 0 1015.75 1.5zm0 3a.75.75 0 000 1.5A2.25 2.25 0 0118 8.25a.75.75 0 001.5 0 3.75 3.75 0 00-3.75-3.75z" clip-rule="evenodd" />
                    </svg>                      
                </div>                                  
            </div>
        </div>
    </header>

    <form method="POST" action="{{ route('ativo.update', $ativo->id) }}" class="mt-6 space-y-6">
        @csrf
        @method('PUT')

        <!-- Nome do ativo -->
        <div class="mb-2">
            <x-text-input id="nomeAtivo" class="block mt-1 w-full" type="text" name="nomeAtivo" value="{{ $ativo->nomeAtivo }}" required autofocus autocomplete="nomeAtivo" />
            <x-input-error :messages="$errors->get('nomeAtivo')" class="mt-2" />
        </div>

        <!-- Código do ativo -->
        <div class="mb-2">
            <x-text-input id="tipoAtivo" class="block mt-1 w-full" type="text" name="codigo" value="{{ $ativo->codigo }}" required autofocus autocomplete="codigo" />
            <x-input-error :messages="$errors->get('codigo')" class="mt-2" /> 
        </div>

        <!-- Descrição -->
        <div class="mb-2">
            <x-text-input id="descricaoAtivo" class="block mt-1 w-full" type="text" name="descricaoAtivo" value="{{ $ativo->descricaoAtivo }}" autofocus autocomplete="descricaoAtivo" />
            <x-input-error :messages="$errors->get('descricaoAtivo')" class="mt-2" />
        </div>

        <!-- Valor do Ativo -->
        <div class="mb-2">
            <x-text-input id="valorAtivo" class="block mt-1 w-full" type="text" name="valorAtivo" value="{{ $ativo->valorAtivo }}" required autofocus autocomplete="valorAtivo" />
            <x-input-error :messages="$errors->get('valorAtivo')" class="mt-2" />
        </div>

        <!-- Botão -->
        <div class="flex items-center justify-center py-10">
            <x-secondary-button>
                {{ __('Atualizar') }}
            </x-secondary-button>
        </div>

    </form>
</section>
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

            <header>
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Tem certeza que deseja excluir?') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Depois que essa carteira for excluída, todos os seus ativos serão excluídos juntos.') }}
                </p>
            </header>

            <form action="{{ route('carteira.destroy', $carteira->id) }}" method="POST">
                @csrf
                @method('DELETE')

                {{-- Botão --}}
                  <div class="flex items-center justify-start py-2 mt-3">
                        <x-danger-button>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd" />
                            </svg>
                        </x-danger-button>
                    </div>
            </form>
        </div>
    </div>
</section>

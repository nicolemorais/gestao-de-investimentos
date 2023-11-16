@if ($carteiras->count() === 0)

    <div class="py-3">
        <span class="text-gray-700">Crie sua primeira carteira e comece a gerenciar seus ativos.</span>
    </div>
@else
    @foreach ($carteiras as $carteira)
        <section>
            <div class="bg-white shadow-md rounded-md mb-4 p-4">

                {{-- Nome --}}
                <div class="flex justify-between items-center">

                    <span class="font-bold">{{ $carteira->nomeCarteira }} </span>

                    <x-link-button class="sm:px-4 translate-x-1 border-neutral-100 hover:bg-neutral-200 active:bg-stone-200 bg-white" x-data=""
                        x-on:click.prevent="$dispatch('open-modal', '{{ $carteira->id }}')">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-red-800">
                            <path fill-rule="evenodd"
                                d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </x-link-button>

                    <x-modal name="{{ $carteira->id }}" focusable>
                        @include('carteira.partials.delete-carteira')
                    </x-modal>
                </div>

                <div class="py-3">
                    <div class="text-base-content text-opacity-60 text-md">

                    </div>
                </div>

                <!--{{-- Complemento: código, valor --}}
            <div class="flex justify-between text-sm text-base-content text-opacity-60 truncate">

                {{-- Código --}}
                <div class="flex flex-grow">
                    <span class="mr-3 flex items-center font-bold">
                        <span>{{-- $ativo->codigo --}}</span>
                    </span>
                </div>

                {{-- Valor --}}
                <div>
                    <span class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 01-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004zM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 01-.921.42z" />
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v.816a3.836 3.836 0 00-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 01-.921-.421l-.879-.66a.75.75 0 00-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 001.5 0v-.81a4.124 4.124 0 001.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 00-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 00.933-1.175l-.415-.33a3.836 3.836 0 00-1.719-.755V6z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-base">{{-- number_format($ativo->valorAtivo, 2, ',','.') --}}</span>
                    </span>
                </div>
            </div>-->

            </div>
    @endforeach

    {{-- Páginação de carteiras --}}
    {{ $carteiras->links() }}

@endif
</section>

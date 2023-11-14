@if ($carteiras->count() === 0)
    
    <div class="p-3">
        <span class="text-gray-700">Crie sua primeira carteira e comece a gerenciar seus ativos.</span>
    </div>
@else

    @foreach ($carteiras as $carteira)
<section>
    <div class="bg-white shadow-md rounded-md mb-4 p-4">

            {{-- Nome --}}
            <div class="flex justify-between items-center">

                <span class="font-bold">{{ $carteira->nomeCarteira }}</span>
            
                    <x-link-button class="sm:px-4"
                        x-data=""
                        x-on:click.prevent="$dispatch('open-modal', '{{ $carteira->id }}')">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                            <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                        </svg>
                    </x-link-button>

                    <x-modal name="{{ $carteira->id }}" focusable>
                        <div class="flex p-4 justify-end">
                            <button x-on:click="$dispatch('close')" class=" gap-2 font-semibold text-md text-gray-800 leading-tight inline-flex items-center px-4 py-2  bg-white-950  h-7 ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
                                </svg>                                              
                            </button>                                  
                        </div>
                
                        @include('carteiras')
                    </x-modal>--}}
            </div>
        
            {{-- Descrição --}}
            <div class="py-3">
                <p class="text-base-content text-opacity-60 text-md">
                    {{$ativo->descricaoAtivo}}
                </p>
            </div>
        
            {{-- Complemento: código, valor --}}
            <div class="flex justify-between text-sm text-base-content text-opacity-60 truncate">

                {{-- Código --}}
                <div class="flex flex-grow">
                    <span class="mr-3 flex items-center font-bold">
                        <span>{{--$ativo->codigo--}}</span>
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
            </div>

    </div>
    @endforeach

    {{--Páginação de ativos--}}
    {{ $carteiras->links() }}

@endif
</section>
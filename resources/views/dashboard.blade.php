<x-app-layout>

    <x-slot name="header">
        <div>
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Ativos em posse') }}
                <p class="text-base font-thin">Acompanhe e gerencie seus ativos.</p>
            </h2>
        </div>
    </x-slot>
    
        @if ($mensagem = Session::get('success'))
            <p
            x-data="{ show: true }"
            x-show="show"
            x-transition
            x-init="setTimeout(() => show = false, 2000)"
            class="max-w-6xl mx-auto p-4 mt-2 text-base bg-green-200 sm:px-6 lg:px-8 rounded-md"
            > {{ $mensagem}}</p>
            
        @endif
   
       
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid gap-x-40 max-sm:gap-y-10 max-lg:gap-y-10 items-start justify-center grid-cols-1 shadow-xl lg:grid-cols-2 rounded-xl  bg-gray-50 p-6 text-gray-900">
                    <div class="flex justify-between flex-col py-4 px-4 w-full rounded-md">
                            <div class="mb-4 mt-4 flex justify-between gap-8">
                                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Carteiras</h2>
                                <div class="block">
                                    {{--    Quantidade de carteiras --}}
                                     <div class=" gap-2 font-semibold text-md text-gray-800 leading-tight inline-flex items-center px-4 py-2 border bg-white-950 border-slate-700 rounded-full h-7  uppercase tracking-widest shadow-sm  disabled:opacity-25 transition ease-in-out duration-150">
                                        {{ ($ativos->count()) }}
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                            <path d="M2.273 5.625A4.483 4.483 0 015.25 4.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0018.75 3H5.25a3 3 0 00-2.977 2.625zM2.273 8.625A4.483 4.483 0 015.25 7.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0018.75 6H5.25a3 3 0 00-2.977 2.625zM5.25 9a3 3 0 00-3 3v6a3 3 0 003 3h13.5a3 3 0 003-3v-6a3 3 0 00-3-3H15a.75.75 0 00-.75.75 2.25 2.25 0 01-4.5 0A.75.75 0 009 9H5.25z" />
                                        </svg>      
                                     </div>                                  
                                </div>
                            </div>
                            @include('components.carteiras')
                    </div>

                    <div class="flex justify-center flex-col py-4 px-4 w-full">
                        
                        @if (count($ativos) > 0)
                            <div class="mb-4 mt-4 items-end">
                                <h2 class=" font-semibold text-xl text-gray-800 leading-tight">Total de ativos</h2>
                            </div>
                        @endif

                        {{-- Gráfico --}}
                        @include('components.chart')
                            
                    </div>
                </div>
        </div>
    </div>
</x-app-layout>


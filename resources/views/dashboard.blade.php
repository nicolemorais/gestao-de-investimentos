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
        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
            class="max-w-6xl mx-auto p-4 mt-2 text-base bg-green-200 sm:px-6 lg:px-8 rounded-md"> {{ $mensagem }}</p>
    @endif


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="grid gap-x-40 max-sm:gap-y-10 max-lg:gap-y-10 items-start justify-center grid-cols-1 shadow-xl lg:grid-cols-2 rounded-xl  bg-gray-50 p-6 text-gray-900">
                <div class="flex justify-between flex-col py-4 px-4 w-full rounded-md bg-slate-200">
                    <div class="mb-2 mt-4 flex justify-between items-center">
                        {{-- Quantidade de carteiras / Botão --}}
                        <div class="flex justify-right gap-2">
                            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Carteiras</h2>

                            <span
                                class="font-semibold text-md text-gray-800 leading-tight inline-flex items-center gap-x-1 px-2 border bg-white-950 border-slate-500 rounded-full  shadow-sm  disabled:opacity-25 transition ease-in-out duration-150">
                                {{ $carteiras->count() }}
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-4 h-4">
                                    <path
                                        d="M1 4.25a3.733 3.733 0 012.25-.75h13.5c.844 0 1.623.279 2.25.75A2.25 2.25 0 0016.75 2H3.25A2.25 2.25 0 001 4.25zM1 7.25a3.733 3.733 0 012.25-.75h13.5c.844 0 1.623.279 2.25.75A2.25 2.25 0 0016.75 5H3.25A2.25 2.25 0 001 7.25zM7 8a1 1 0 011 1 2 2 0 104 0 1 1 0 011-1h3.75A2.25 2.25 0 0119 10.25v5.5A2.25 2.25 0 0116.75 18H3.25A2.25 2.25 0 011 15.75v-5.5A2.25 2.25 0 013.25 8H7z" />
                                </svg>
                            </span>
                        </div>

                        <x-link-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'carteiras')"
                            class="gap-1">
                            {{ __('Adicionar') }}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-5 h-5">
                                <path
                                    d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                            </svg>
                        </x-link-button>


                        <x-modal name="carteiras" focusable>

                            @include('carteiras')

                        </x-modal>
                    </div>

                    @include('components.carteiras-list')

                </div>

                <div class="flex justify-center flex-col py-4 px-4 w-full">

                    @if (count($carteiras) > 0)
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

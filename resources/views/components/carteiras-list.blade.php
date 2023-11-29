@if ($carteira->ativos->isEmpty())
    <!-- Projects Card -->
    <div class="flex flex-col rounded-2xl border bg-white hover:border-slate-300 active:border-slate-200">
        <div class="flex w-full grow items-center justify-between p-5 lg:p-6">
            <dl>
                <dt class="text-2xl font-bold">{{ $carteira->ativos->count() }}</dt>
                <dd class="text-slate-600">Ativos</dd>
            </dl>
            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-yellow-100 text-orange-400 active:bg-orange-500">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 01-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004zM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 01-.921.42z" />
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v.816a3.836 3.836 0 00-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 01-.921-.421l-.879-.66a.75.75 0 00-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 001.5 0v-.81a4.124 4.124 0 001.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 00-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 00.933-1.175l-.415-.33a3.836 3.836 0 00-1.719-.755V6z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
        <a href="https://www.google.com/finance/?hl=pt" target="_blank" rel="noopener">
            <div class="w-full flex gap-1 border-t border-slate-100 px-5 py-3 text-xs font-medium text-slate-500 lg:px-6">
                <p>Comece procurando por ativos</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z" clip-rule="evenodd" />
                </svg>
            </div>
        </a>
    </div>
    <!-- END Projects Card -->
@else
    <!-- Projects Card -->
    <div class="flex flex-col rounded-2xl border bg-white hover:border-slate-300 active:border-slate-200">
        <div class="flex w-full grow items-center justify-between p-5 lg:p-6">
            <dl>
                <dt class="text-2xl font-bold">{{ $carteira->ativos->count() }}</dt>

                @if ($carteira->ativos->count() === 1)
                    <dd class="text-slate-600">Ativo</dd>
                    @else
                    <dd class="text-slate-600">Ativos</dd>
                @endif

            </dl>
            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-yellow-100 text-orange-400">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 01-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004zM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 01-.921.42z" />
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v.816a3.836 3.836 0 00-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 01-.921-.421l-.879-.66a.75.75 0 00-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 001.5 0v-.81a4.124 4.124 0 001.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 00-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 00.933-1.175l-.415-.33a3.836 3.836 0 00-1.719-.755V6z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>

        <div class="w-full border-t border-slate-100 px-5 py-3 text-xs font-medium text-slate-500 lg:px-6">

            <x-link-button x-data=""
                x-on:click.prevent="$dispatch('open-modal', '{{ $carteira->id }}')" class="gap-1 font-medium bg-orange-400 hover:bg-orange-300 active:bg-orange-500">
                {{ __('Ver lista de ativos') }}
            </x-link-button>


            <x-modal name="{{ $carteira->id}}" focusable>
                @include('ativos')
            </x-modal>

        </div>
    </div>
    <!-- END Projects Card -->
@endif

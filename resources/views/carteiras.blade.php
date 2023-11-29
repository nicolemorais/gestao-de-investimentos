@foreach ($carteiras as $carteira)
    <section>
        <div class="bg-white shadow-md rounded-md mb-8 p-4">

            {{-- Nome --}}
            <div class="flex justify-between items-center">
                <span class="font-bold uppercase">{{ $carteira->nome_carteira }} </span>
            </div>

            {{-- Ativos --}}
            <div class="py-3">
                <div class="text-base-content text-opacity-60 text-md">
                     @include('components.carteiras-list')
                </div>
            </div>
        </div>
    </section>
@endforeach

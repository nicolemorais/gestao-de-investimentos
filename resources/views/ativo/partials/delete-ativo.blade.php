<header>
    <h2 class="text-lg font-medium text-gray-900">
        {{ __('Excluir ativo') }}
    </h2>

    <p class="mt-1 text-sm text-gray-600">
        {{ __('Tem certeza que deseja excluir o ativo da carteira?') }}
    </p>
</header>

<form action="{{ route('ativo.destroy', $ativo->id) }}" method="POST">
    @csrf
    @method('DELETE')
    {{-- Botão --}}
      <!-- Botão -->
      <div class="flex items-center justify-start py-2 mt-3">
            <x-secondary-button>
                {{ __('Deletar') }}
            </x-secondary-button>
        </div>
</form>

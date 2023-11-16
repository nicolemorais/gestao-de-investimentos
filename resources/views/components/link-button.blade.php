<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-green-700 border rounded-full font-light h-7 text-xs text-slate-50 uppercase tracking-widest shadow-sm hover:bg-green-500 active:bg-green-600  transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>





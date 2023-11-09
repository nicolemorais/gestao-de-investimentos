<button {{ $attributes->merge(['type' => 'text', 'class' => 'inline-flex items-center px-4 py-2 border bg-blue-950 border-blue-900 rounded-full font-light h-7 text-xs text-slate-50 uppercase tracking-widest shadow-sm hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-900 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>


<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-primary text-white rounded-md font-semibold text-xs  uppercase tracking-widest hover:opacity-90 active:opacity-90 focus:opacity-90 focus:outline-none focus:ring-offset-2']) }}>
    {{ $slot }}
</button>

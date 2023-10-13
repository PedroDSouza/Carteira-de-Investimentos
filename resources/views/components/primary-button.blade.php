<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-sky-950  border border-transparent rounded-md font-semibold text-ms text-white uppercase tracking-widest hover:bg-sky-900 focus:bg-gray-400 active:bg-sky-900  focus:outline-none focus:ring-2 focus:ring-teal-200 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>




<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center w-full sm:w-auto px-4 py-2 bg-pinktt hover:bg-pinktt-dark shadow-tt text-white text-xs sm:text-sm md:text-base lg:text-lg font-medium rounded-2xl transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300']) }}>
    {{ $slot }}
</button>

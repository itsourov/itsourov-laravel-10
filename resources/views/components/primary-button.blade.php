<button
    {{ $attributes->merge(['type' => 'submit', 'class' => ' items-center text-white bg-gradient-to-r from-primary-500 via-primary-600 to-primary-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-primary-300 dark:focus:ring-primary-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

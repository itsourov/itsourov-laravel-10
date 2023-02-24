<x-admin-layout>
    <div class=" p-2 mt-5 flex justify-between">

        <div>
            <h2 class="mr-auto text-lg font-medium"> {{ __('Add New Post') }}</h2>
        </div>
        <div>
            {{ __('Add New Post') }}
        </div>
    </div>
    <div class=" p-2 ">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 ">
            <div class="  md:col-span-2 ">
                <x-card class="p-2 space-y-5">

                    <x-text-input placeholder="title" />


                    <textarea class="tinymceEditor"></textarea>
                </x-card>
            </div>
            <x-card class="p-2 space-y-5">
                <div class="mt-5">
                    <x-input-label>Date</x-input-label>

                    <div class="relative max-w-sm">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input datepicker type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date">
                    </div>

                </div>

            </x-card>
        </div>
    </div>
</x-admin-layout>

<x-admin-layout>
    <form action="{{ route('admin.posts.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class=" p-2 mt-5 flex justify-between">

            <div>
                <h2 class="mr-auto text-lg font-medium text-gray-900 dark:text-gray-50"> {{ __('Add New Post') }}</h2>
            </div>
            <div>
                <x-primary-button>Submit</x-primary-button>
            </div>
        </div>
        <div class=" p-2 ">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 ">
                <div class="  md:col-span-2 ">
                    <x-card class="p-2 space-y-5">

                        <div>
                            <x-input-label for="post_title" :value="__('Post title')" />
                            <x-text-input id="post_title" placeholder="Title here" name="title" type="text"
                                :value="old('title')" />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />

                        </div>
                        <div>
                            <x-input-label for="post_slug" :value="__('Post Slug')" />
                            <x-text-input id="post_slug" placeholder="Permalink here" name="slug" type="text"
                                :value="old('slug')" />
                            <x-input-error class="mt-2" :messages="$errors->get('slug')" />

                        </div>
                        <div>
                            <x-input-label>Content</x-input-label>
                            <textarea class="tinymceEditor" name="content">{{ old('content') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('content')" />
                        </div>



                    </x-card>
                </div>
                <x-card class="p-2 space-y-5">
                    <div class="mt-5">
                        <x-input-label>Date</x-input-label>

                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <x-ri-calendar-2-fill class="text-gray-500 dark:text-gray-400" />
                            </div>
                            <input datepicker type="text" name="publish-date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select date">
                        </div>

                    </div>
                    <div>
                        <x-input-label>Categories</x-input-label>
                        <ul
                            class=" text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">

                            @foreach ($categories as $category)
                                <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input id="cat_{{ $category->id }}" type="checkbox" value="{{ $category->id }}"
                                            name="categories[]"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="cat_{{ $category->id }}"
                                            class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $category->title }}</label>
                                    </div>
                                </li>
                            @endforeach


                        </ul>

                    </div>

                </x-card>
            </div>
        </div>
    </form>
</x-admin-layout>

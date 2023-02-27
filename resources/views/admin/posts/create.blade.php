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
                <div class="space-y-5">
                    <x-accordation title="Categories">

                        <ul
                            class=" text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">

                            @foreach ($categories as $category)
                                <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input id="cat_{{ $category->id }}" type="checkbox" value="{{ $category->id }}"
                                            name="categories[]"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="cat_{{ $category->id }}"
                                            class="w-full py-3 ml-2 text-sm font-medium text-gray-600 dark:text-gray-300">{{ $category->title }}</label>
                                    </div>
                                </li>
                            @endforeach


                        </ul>

                    </x-accordation>


                    <x-accordation title="Featured Image">
                        <input type="text" id="abcd">
                        <span id="preview">asd
                </div>
                <button id="aaa" type="button" data-input="abcd" data-preview="preview">open</button>

                </x-accordation>


            </div>

        </div>
        </div>
    </form>

    <script>
        var lfm = function(id, type, options) {
            let button = document.getElementById(id);

            button.addEventListener('click', function() {
                var route_prefix = (options && options.prefix) ? options.prefix : '/mediafiles';
                var target_input = document.getElementById(button.getAttribute('data-input'));
                var target_preview = document.getElementById(button.getAttribute('data-preview'));

                window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager',
                    'width=1000,height=600');
                window.SetUrl = function(items) {
                    var file_path = items.map(function(item) {
                        return item.url;
                    }).join(',');

                    // set the value of the desired input to image url
                    target_input.value = file_path;
                    target_input.dispatchEvent(new Event('change'));

                    // clear previous preview
                    target_preview.innerHtml = '';
                    console.log(target_preview);

                    // set or change the preview image src
                    items.forEach(function(item) {
                        let img = document.createElement('img')
                        img.setAttribute('style', 'height: 5rem')
                        img.setAttribute('src', item.thumb_url)
                        target_preview.appendChild(img);
                    });

                    // trigger change event
                    target_preview.dispatchEvent(new Event('change'));
                };
            });
        };
        lfm('aaa', 'image', {
            type: 'image',
        });
    </script>


</x-admin-layout>

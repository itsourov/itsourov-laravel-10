<div>

    <div class="p-3" x-data="{ tab: 0 }">
        <div class=" border-b border-gray-300 dark:border-gray-600 " data-tabs-toggle="#mediafilesTab" role="tablist">
            <button wire:click="toggle(0)"
                class="p-2 bg-gray-100 dark:bg-gray-800 rounded {{ $tabIndex == 0 ? 'dark:bg-gray-500 bg-gray-300' : '' }}">Upload
                files</button>
            <button wire:click="toggle(1)"
                class="p-2 bg-gray-100 dark:bg-gray-800 rounded {{ $tabIndex == 1 ? 'dark:bg-gray-500 bg-gray-300' : '' }}">Media
                library</button>
        </div>


        <div>

            @if ($tabIndex == 0)


                <div>

                    <div class="dropzone-form-wrapper">
                        <form action="https://bytesed.com/laravel/ozagi/admin-home/media-upload" method="post"
                            id="placeholderfForm" class="dropzone" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="zvVElMebeRS06h72JZe95TvkQtGAxT1TNvCK9b3f">
                        </form>
                    </div>

                </div>
            @elseif($tabIndex == 1)
                <div class="p-4">


                    <div class="grid grid-cols-2  sm:grid-cols-4 lg:grid-cols-5 gap-4 ">

                        @foreach ($mediaFiles as $mediaFile)
                            <x-card class=" rounded-none flex items-center  border-2 image-item"
                                data-url="{{ asset('storage/mediaFile/' . $mediaFile->id . '/' . $mediaFile->file_name) }}">
                                <img class="w-full "
                                    src="{{ asset('storage/mediaFile/' . $mediaFile->id . '/' . $mediaFile->file_name) }}"
                                    alt="">
                            </x-card>
                        @endforeach

                    </div>
                </div>
                <script type="module">
                    $(".image-item").click(function() {
                        if ($(this).hasClass('border-primary-500 dark:border-primary-500')) {
                            parent.postMessage({
                                mceAction: 'insert',
                                content: $(this).data("url")
                            });

                            parent.postMessage({
                                mceAction: 'close'
                            });
                        }
                        $(".image-item").removeClass("border-primary-500 dark:border-primary-500");
                        $(this).addClass('border-primary-500 dark:border-primary-500');

                        if (window.opener) { // standalone button or other situations
                            window.opener.SetUrl([{
                                url: $(this).data("url"),
                                thumb_url: $(this).data("url"),
                            }]);
                            window.close();
                        }

                    });
                </script>
            @endif
        </div>
    </div>






</div>

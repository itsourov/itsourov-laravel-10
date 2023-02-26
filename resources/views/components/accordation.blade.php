  @props(['title'])
  <x-card>
      <div class="accordation">
          <div class="flex items-center  justify-between p-2 select-none cursor-pointer">


              <p class="p-1">
                  {{ $title }}
              </p>

              <x-ri-add-line class="add" />



          </div>
      </div>
      <div class="card-body p-3 border-t dark:border-gray-600">
          {{ $slot }}
      </div>


  </x-card>

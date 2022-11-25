
  <style>
    .btn {
      @apply font-bold py-2 px-4 rounded;
    }
    .btn-blue {
      @apply bg-blue-500 text-white;
    }
    .btn-blue:hover {
      @apply bg-blue-700;
    }
  </style>
<div class="container items-center h-screen m-auto mx-auto my-10">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div>
        <button class="px-4 py-1 my-2 font-bold text-white bg-blue-500 rounded shadow-md hover:bg-blue-700" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Button
        </button>


        <div class="flex justify-between align-middle">
            {{-- <div class="flex-1 "> --}}
                <div class="max-w-sm overflow-hidden rounded shadow-lg">
                    <img class="w-full" src="https://placeimg.com/640/480/any" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                      <div class="mb-2 text-xl font-bold">Basic Package</div>
                      <p class="text-base text-gray-700">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                      </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                      <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#photography</span>
                      <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#travel</span>
                      <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#winter</span>
                    </div>
                  </div>
            {{-- </div> --}}
            {{-- <div class="flex-1 "> --}}
                <div class="max-w-sm overflow-hidden rounded shadow-lg">
                    <img class="w-full" src="https://placeimg.com/640/480/any" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                      <div class="mb-2 text-xl font-bold">Middle Package</div>
                      <p class="text-base text-gray-700">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                      </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                      <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#photography</span>
                      <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#travel</span>
                      <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#winter</span>
                    </div>
                  </div>
            {{-- </div>
            <div class="flex-1"> --}}
                <div class="max-w-sm overflow-hidden rounded shadow-lg">
                    <img class="w-full" src="https://placeimg.com/640/480/any" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                      <div class="mb-2 text-xl font-bold">Advance Package</div>
                      <p class="text-base text-gray-700">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                      </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                      <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#photography</span>
                      <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#travel</span>
                      <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#winter</span>
                    </div>
                  </div>
            {{-- </div> --}}
        </div>
    </div>
</div>

{{-- <script>
    function modal() {
        document.getElementById('exampleModal').attr('aria-hidden', 'false');
    }
</script> --}}

<div class="fixed top-0 left-0 hidden w-full h-full overflow-x-hidden overflow-y-auto outline-none modal fade"
  id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
  <div class="relative w-auto pointer-events-none modal-dialog">
    <div
      class="relative flex flex-col w-full text-current bg-white border-none rounded-md shadow-lg outline-none pointer-events-auto modal-content bg-clip-padding">
      <div
        class="flex items-center justify-between flex-shrink-0 p-4 border-b border-gray-200 modal-header rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">Modal title</h5>
        <button type="button"
          class="box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 btn-close focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="relative p-4 modal-body">
        Modal body text goes here.
      </div>
      <div
        class="flex flex-wrap items-center justify-end flex-shrink-0 p-4 border-t border-gray-200 modal-footer rounded-b-md">
        <button type="button" class="px-6
          py-2.5
          bg-purple-600
          text-white
          font-medium
          text-xs
          leading-tight
          uppercase
          rounded
          shadow-md
          hover:bg-purple-700 hover:shadow-lg
          focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
          active:bg-purple-800 active:shadow-lg
          transition
          duration-150
          ease-in-out" data-bs-dismiss="modal">Close</button>
        <button type="button" class="px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out
      ml-1">Save changes</button>
      </div>
    </div>
  </div>
</div>


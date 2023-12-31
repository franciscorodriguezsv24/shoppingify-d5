<x-app-layout>
    <div class="finder flex flex-row justify-between ">
        <p class="w-72"><a class="text-orange-500 ">Shoppingify</a> allows you take your shopping list where you go</p>
        <div class="relative w-1/4">
            <svg class="absolute bottom-2 left-2 right-2 top-2" xmlns="http://www.w3.org/2000/svg" height="25" viewBox="0 -960 960 960" width="25"><path d="M796-121 533-384q-30 26-69.959 40.5T378-329q-108.162 0-183.081-75Q120-479 120-585t75-181q75-75 181.5-75t181 75Q632-691 632-584.85 632-542 618-502q-14 40-42 75l264 262-44 44ZM377-389q81.25 0 138.125-57.5T572-585q0-81-56.875-138.5T377-781q-82.083 0-139.542 57.5Q180-666 180-585t57.458 138.5Q294.917-389 377-389Z"/></svg>
            <input wire:model="search" type="text" id="search-navbar" class="block w-full p-2 ps-5 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 d d placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
        </div>
    </div>
    {{-- End-searchbar --}}
    
    {{-- first-category --}}
    @foreach($categories as $category)
    <div class="first-category">
        <h4>{{$category->name}}</h4>
        <br>
        <div class="grid grid-cols-4 grid-flow-row gap-4">
            @foreach($category->items as $item)
            <a href="#" class="flex flex-row gap-5 bg-white w-auto rounded-lg p-2 justify-between drop-shadow-md">
                <p>{{$item->name}}</p>
                <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
            </a>
            @endforeach
        </div>
    </div>
    @endforeach
</x-app-layouts>

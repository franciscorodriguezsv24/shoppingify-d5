<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    
{{-- <button data-drawer-target="cta-button-sidebar" data-drawer-toggle="cta-button-sidebar" aria-controls="cta-button-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button> --}}

{{-- Left-sideBar --}}

<div class="flex">
   {{-- Aside left --}}
   @include('layouts.navigation')
{{-- end left side --}}
<main class="container flex-initial w-3/4 h-screen bg-gray-100 overflow-auto"> 
     <div class="container p-9 flex flex-col gap-10 ">
        {{-- Search-bar --}}
      {{$slot}}
    </div>
</main>
{{-- End first-category --}}

{{-- right side --}}
<aside id="cta-button-sidebar" class="w-1/4 flex-initial h-screen transition-transform-translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-4/5 px-3 py-4 overflow-y-auto bg-orange-100 flex flex-col gap-4">
            {{-- shopping box --}}
     
          <livewire:items/>
            {{-- shopping box end --}}
           
            {{-- shopping list --}}
            <div class="list">
                <div class="flex flex-row justify-between items-center">
                    <p class="text-2xl">Shopping list</p>
                    <svg class="pencil" xmlns="http://www.w3.org/2000/svg" height="35" viewBox="0 -960 960 960" width="35"><style>.pencil{fill: black}</style> <path d="M180-180h44l443-443-44-44-443 443v44Zm614-486L666-794l42-42q17-17 42-17t42 17l44 44q17 17 17 42t-17 42l-42 42Zm-42 42L248-120H120v-128l504-504 128 128Zm-107-21-22-22 44 44-22-22Z"/></svg>
                </div>
            </div>
            {{-- End shopping list --}}

            <div class="list">
                <p class="text-gray-400">
                    Fruit and vegetables
                </p>
                <div class="object flex flex-row justify-between items-center">
                    <p>
                        Avocado
                    </p>
                    <button class="border-2 border-orange-600 text-orange-600 rounded-full px-4 py-1 hover:border-white hover:text-white"> 3 pcs </button>
                </div>
            </div>
        </div>
<div class="h-1/5 overflow-y-auto bg-white flex justify-center items-center w-4/4">
        <div class="relative w-4/4">
            <input type="text" id="search-navbar" class="block w-full p-4 pr-20 text-sm text-gray-900 rounded-lg border-2 border-orange-400 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
            <button class="bg-orange-400 absolute bottom-0 right-0 top-0 rounded-lg w-20 text-white">save</button>
        </div>
    </div>
</aside>
</div>
    {{-- end right side --}}
    @livewireScripts
</body>
</html>
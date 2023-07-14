<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @vite('resources/css/app.css')
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
    <aside id="cta-button-sidebar" class=" flex-initial w-20 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800" >
        <ul class="space-y-2 h-full font-medium flex flex-col justify-between">
            <li class="p-2">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M220-180h150v-250h220v250h150v-390L480-765 220-570v390Zm-60 60v-480l320-240 320 240v480H530v-250H430v250H160Zm320-353Z"/></svg>
                </a>
            </li>

            <li class="flex flex-col gap-6">
                <a href="#" class="flex items-center p-2">
                    <svg class="items" xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M120-240v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"/></svg>
                </a>

                <a href="#" class="flex items-center p-2">
                    <svg class="refresh" xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M480-80q-75 0-140.5-28T225-185q-49-49-77-114.5T120-440h60q0 125 87.5 212.5T480-140q125 0 212.5-87.5T780-440q0-125-85-212.5T485-740h-23l73 73-41 42-147-147 147-147 41 41-78 78h23q75 0 140.5 28T735-695q49 49 77 114.5T840-440q0 75-28 140.5T735-185q-49 49-114.5 77T480-80Z"/></svg>
                </a>

                <a href="#" class="flex items-center p-2">
                    <svg class="stats" xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M160-160v-440h140v440H160Zm250 0v-640h140v640H410Zm250 0v-280h140v280H660Z"/></svg>
                </a>
            </li>
            <li>
                <a href="#" class=" flex items-center rounded-full p-3 w-12 h-12 bg-orange-400 ">
                    <svg class="cart" xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><style>.cart{fill: white}</style><path d="M286.788-81Q257-81 236-102.212q-21-21.213-21-51Q215-183 236.212-204q21.213-21 51-21Q317-225 338-203.788q21 21.213 21 51Q359-123 337.788-102q-21.213 21-51 21Zm400 0Q657-81 636-102.212q-21-21.213-21-51Q615-183 636.212-204q21.213-21 51-21Q717-225 738-203.788q21 21.213 21 51Q759-123 737.788-102q-21.213 21-51 21ZM235-741l110 228h288l125-228H235Zm-30-60h589.074q22.964 0 34.945 21Q841-759 829-738L694-495q-11 19-28.559 30.5Q647.881-453 627-453H324l-56 104h491v60H277q-42 0-60.5-28t.5-63l64-118-152-322H51v-60h117l37 79Zm140 288h288-288Z"/></svg>
                </a>
            </li>
        </ul>
    </div>
</aside>
{{-- end left side --}}
<section class="container flex-initial w-3/4 h-screen bg-gray-100 overflow-auto">
    <div class="container p-9 flex flex-col gap-10 ">
        {{--Search-bar--}}
        <div class="finder flex flex-row justify-between ">
            <p class="w-72"><a class="text-orange-500 ">Shoppingify</a> allows you take your shopping list where you go</p>
            <div class="relative w-1/4">
                <svg class="absolute bottom-2 left-2 right-2 top-2" xmlns="http://www.w3.org/2000/svg" height="25" viewBox="0 -960 960 960" width="25"><path d="M796-121 533-384q-30 26-69.959 40.5T378-329q-108.162 0-183.081-75Q120-479 120-585t75-181q75-75 181.5-75t181 75Q632-691 632-584.85 632-542 618-502q-14 40-42 75l264 262-44 44ZM377-389q81.25 0 138.125-57.5T572-585q0-81-56.875-138.5T377-781q-82.083 0-139.542 57.5Q180-666 180-585t57.458 138.5Q294.917-389 377-389Z"/></svg>
                <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
            </div>
        </div>
        {{-- End-searchbar --}}

        {{-- first-category --}}
        <div class="first-category">
            <h4>Fruit and vegetables</h4>
            <br>
            <div class="grid grid-cols-4 grid-flow-row gap-4">
                <a href="#" class="flex flex-row gap-5 bg-white w-auto rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </a>
                <div class="flex flex-row gap-5 bg-white w-auto rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div><div class="flex flex-row gap-5 bg-white w-auto  rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div><div class="flex flex-row gap-5 bg-white w-auto  rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div><div class="flex flex-row gap-5 bg-white w-auto  rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div><div class="flex flex-row gap-5 bg-white w-auto rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div><div class="flex flex-row gap-5 bg-white w-auto  rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div><div class="flex flex-row gap-5 bg-white w-auto  rounded-lg p-2 justify-between">
                    <p>kiwi</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div>
                <div class="flex flex-row gap-5 bg-white w-auto  rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div>
            </div>
        </div>
        {{-- end first cateogory --}}

        {{-- second category --}}
        <div class="first-category">
            <h4>Meat and Fish</h4>
            <br>
            <div class="grid grid-cols-4 grid-flow-row gap-4">
                <a href="#" class="flex flex-row gap-5 bg-white w-auto rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </a>
                <div class="flex flex-row gap-5 bg-white w-auto rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div><div class="flex flex-row gap-5 bg-white w-auto  rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div><div class="flex flex-row gap-5 bg-white w-auto  rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div><div class="flex flex-row gap-5 bg-white w-auto  rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div><div class="flex flex-row gap-5 bg-white w-auto rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div><div class="flex flex-row gap-5 bg-white w-auto  rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div><div class="flex flex-row gap-5 bg-white w-auto  rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div>
                <div class="flex flex-row gap-5 bg-white w-auto  rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div>
            </div>
        </div>
        {{-- end second category --}}
        <div class="first-category">
            <h4>Beverages</h4>
            <br>
            <div class="grid grid-cols-4 grid-flow-row gap-4">
                <a href="#" class="flex flex-row gap-5 bg-white w-auto rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </a>
                <div class="flex flex-row gap-5 bg-white w-auto rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div><div class="flex flex-row gap-5 bg-white w-auto  rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div><div class="flex flex-row gap-5 bg-white w-auto  rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div><div class="flex flex-row gap-5 bg-white w-auto  rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div><div class="flex flex-row gap-5 bg-white w-auto rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div><div class="flex flex-row gap-5 bg-white w-auto  rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div><div class="flex flex-row gap-5 bg-white w-auto  rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div>
                <div class="flex flex-row gap-5 bg-white w-auto  rounded-lg p-2 justify-between">
                    <p>Avocado</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End first-category --}}



{{-- right side --}}
<aside id="cta-button-sidebar" class="w-1/4 flex-initial h-screen transition-transform-translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-4/5 px-3 py-4 overflow-y-auto bg-orange-100" >
        <div>
            
        </div>
    </div>
    <div class="h-1/5 px-3 py-4 overflow-y-auto bg-green-400" >

    </div>
</aside>

    {{-- end right side --}}
</body>
</html>
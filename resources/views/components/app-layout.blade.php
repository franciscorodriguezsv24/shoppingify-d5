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
    <div class="h-4/5 px-3 py-4 overflow-y-auto bg-orange-100" >
        <div class="shoping-list flex flex-col gap-8">
            {{-- shopping box --}}
            <div class="bg-rose-800 rounded-lg flex flex-row p-2">
                <div class="w-2/4">
                    <svg class="overflow-visible" width="70" height="110" viewBox="0 0 81 135" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.5096 5.27646L16.643 9.25995C16.1203 9.40002 15.6746 9.74201 15.404 10.2107C15.1334 10.6794 15.0601 11.2364 15.2001 11.7591L16.9486 18.2845C17.0887 18.8072 17.4307 19.2529 17.8993 19.5235C18.368 19.7941 18.925 19.8674 19.4477 19.7274L21.9114 19.0673L24.5312 28.8445L34.4706 26.1813L31.8507 16.404L34.3144 15.7439C34.8371 15.6038 35.2828 15.2618 35.5534 14.7931C35.824 14.3245 35.8973 13.7675 35.7572 13.2447L34.0088 6.71934C33.8687 6.1966 33.5267 5.7509 33.058 5.48031C32.5893 5.20971 32.0324 5.13639 31.5096 5.27646Z" fill="#F9A109"/>
                        <path d="M62.4022 61.0071C49.7276 50.124 40.8227 35.5085 36.9632 19.2546C36.8717 18.8802 36.6535 18.549 36.3456 18.3172C36.0377 18.0854 35.659 17.9674 35.2739 17.9831L34.5184 15.1635L18.8173 19.3706L19.5623 22.151L19.346 22.209C19.1246 22.2686 18.9179 22.3732 18.7388 22.5163C18.5596 22.6594 18.4119 22.8379 18.3049 23.0406C18.1978 23.2433 18.1337 23.466 18.1165 23.6946C18.0994 23.9232 18.1295 24.1529 18.2051 24.3693C24.0622 41.2808 24.0287 57.863 18.1043 74.1161C17.7631 75.0504 17.7341 76.0701 18.0217 77.0221L33.9685 129.669C34.3271 130.842 35.1251 131.832 36.196 132.431C37.2668 133.03 38.5276 133.193 39.7154 132.885L75.2289 123.369C76.4251 123.038 77.4447 122.253 78.0706 121.181C78.6965 120.11 78.8792 118.836 78.5798 117.631L65.4253 65.8918C64.9378 63.994 63.8832 62.29 62.4022 61.0071V61.0071Z" fill="#3F3D56"/>
                        <path opacity="0.2" d="M28.9801 8.23311C29.2823 9.36092 29.1241 10.5626 28.5403 11.5737C27.9565 12.5849 26.995 13.3227 25.8672 13.6249C24.7394 13.9271 23.5377 13.7689 22.5265 13.1851C21.5154 12.6013 20.7775 11.6398 20.4753 10.512" fill="black"/>
                        <path d="M61.5071 80.1538L57.2066 81.3061C56.0822 78.752 54.0809 76.6846 51.5646 75.478C49.0482 74.2713 46.1832 74.005 43.4876 74.7273C40.792 75.4496 38.4439 77.1127 36.8681 79.4159C35.2922 81.719 34.5927 84.5101 34.896 87.2843L30.5953 88.4366C30.1377 88.5592 29.712 88.7793 29.3475 89.0818C28.9829 89.3843 28.6881 89.7621 28.4832 90.1892C28.2784 90.6164 28.1683 91.0827 28.1605 91.5564C28.1527 92.03 28.2474 92.4997 28.4382 92.9333L41.2451 122.045L68.0679 114.857L65.6335 83.0765C65.5966 82.5952 65.4541 82.1278 65.2161 81.7078C64.9781 81.2878 64.6505 80.9253 64.2565 80.6463C63.8626 80.3672 63.412 80.1785 62.9367 80.0934C62.4615 80.0082 61.9734 80.0289 61.5071 80.1538Z" fill="#F9A109"/>
                        </svg>
                </div>
                <div class="words flex flex-col gap-2">
                    <p class="text-white">Didn't find what you need?</p>
                    <button class="btn bg-white w-3/4 text-black rounded-lg px-4 py-1"> add item </button>
                </div>
            </div>
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
            <div class="list">
                <p class="text-gray-400">
                    Fruit and vegetables
                </p>
                <div class="flex flex-col gap-4">
                    <div class="object flex flex-row justify-between items-center">
                        <p>
                            Avocado
                        </p>
                        <button class="border-2 border-orange-600 text-orange-600 rounded-full px-4 py-1 hover:border-white hover:text-white"> 3 pcs </button>
                    </div>
                    <div class="object flex flex-row justify-between items-center">
                        <p>
                            Avocado
                        </p>
                        <button class="border-2 border-orange-600 text-orange-600 rounded-full px-4 py-1 hover:border-white hover:text-white"> 3 pcs </button>
                    </div>
                    <div class="object flex flex-row justify-between items-center">
                        <p>
                            Avocado
                        </p>
                        <button class="border-2 border-orange-600 text-orange-600 rounded-full px-4 py-1 hover:border-white hover:text-white"> 3 pcs </button>
                    </div>
                    <div class="object flex flex-row justify-between items-center">
                        <p>
                            Avocado
                        </p>
                        <button class="border-2 border-orange-600 text-orange-600 rounded-full px-4 py-1 hover:border-white hover:text-white"> 3 pcs </button>
                    </div>
                    <div class="object flex flex-row justify-between items-center">
                        <p>
                            Avocado
                        </p>
                        <button class="border-2 border-orange-600 text-orange-600 rounded-full px-4 py-1 hover:border-white hover:text-white"> 3 pcs </button>
                    </div>
    
                </div>
                
            </div>
        </div>
    </div>
    <div class="h-1/5 overflow-y-auto bg-white flex justify-center items-center w-4/4">
        <div class="relative w-4/4">
            <input type="text" id="search-navbar" class="block w-full p-4 pr-20 text-sm text-gray-900 rounded-lg border-2 border-orange-400 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
            <button class="bg-orange-400 absolute bottom-0 right-0 top-0 rounded-lg w-20 text-white">save</button>

            
        </div>
    </div>
</aside>
</div>
    {{-- end right side --}}
</body>
</html>
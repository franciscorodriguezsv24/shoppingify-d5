<aside id="cta-button-sidebar" class=" flex-initial w-20 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800" >
        <ul class="space-y-2 h-full font-medium flex flex-col justify-between">
            <li class="p-2">
                <a href= "{{ route('items.index') }}">
                    <div class="w-10 h-10">
                        <img class="object-cover w-full h-full" src="{{ asset('img/logo.svg') }}" alt="logo">
                    </div>
                </a>
            </li>

            <li class="flex flex-col gap-6">
                <a href= "{{ route('items.index') }}" class="flex items-center p-2">
                    <svg class="items" xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M120-240v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"/></svg>
                </a>

                <a href="{{route('history.index')}}" class="flex items-center p-2">
                    <svg class="refresh" xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M480-80q-75 0-140.5-28T225-185q-49-49-77-114.5T120-440h60q0 125 87.5 212.5T480-140q125 0 212.5-87.5T780-440q0-125-85-212.5T485-740h-23l73 73-41 42-147-147 147-147 41 41-78 78h23q75 0 140.5 28T735-695q49 49 77 114.5T840-440q0 75-28 140.5T735-185q-49 49-114.5 77T480-80Z"/></svg>
                </a>

                <a href="{{route('stats.index')}}" class="flex items-center p-2">
                    <svg class="stats" xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M160-160v-440h140v440H160Zm250 0v-640h140v640H410Zm250 0v-280h140v280H660Z"/></svg>
                </a>
            </li>
            <li>
                <a href="#" class=" flex items-center rounded-full p-3 w-12 h-12 bg-orange-400 ">
                    <x-carrito-logo/>
                </a>
            </li>
        </ul>
    </div>
</aside>
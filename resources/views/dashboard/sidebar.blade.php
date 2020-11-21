<!-- Desktop sidebar -->
<div x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
            :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }"></div>
<aside class="fixed lg:static lg:flex mt-16 lg:mt-0 inset-y-0 z-20 flex-shrink-0 w-64 overflow-y-auto bg-white dark:bg-gray-800"
    x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20"
    :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }"
        {{'@'}}click.away="isOpen = false"
        x-show.transition="true"
        >
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
            {{ config('app.name', 'Laravel') }}
        </a>
        <ul class="mt-6">
            @if(!empty($nav['sidebar']))
                @foreach($nav['sidebar'] as $item)
                    @if(!empty($item['submenu']))

                        <li class="relative px-6 py-3" x-data="{ show: false }">
                            <button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" {{'@'}}click="show = !show" :aria-expanded="show ? 'true' : 'false'" :class="{ 'active': show }">
                                <span class="inline-flex items-center">
                                    {!! $item['icon'] !!}
                                    <span class="ml-4">{{ $item['text'] }}</span>
                                </span>
                                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <template x-if="show">
                                <ul x-transition:enter="transition-all ease-in-out duration-300"
                                    x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                                    x-transition:leave="transition-all ease-in-out duration-300"
                                    x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                                    class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                                    aria-label="submenu">

                                    @foreach($item['submenu'] as $subItem)
                                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                            <a class="w-full" href="{{ route($subItem['route']) }}">{{ $subItem['text'] }}</a> 
                                        </li>
                                    @endforeach

                                </ul>
                            </template>
                        </li>

                    @else

                        <li class="relative px-6 py-3">
                            @if(request()->routeIs($item['route']))
                                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                            @endif
                            <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="{{ route($item['route']) }}">
                                {!! $item['icon'] !!}
                                <span class="ml-4">{{ $item['text'] }}</span>
                            </a>
                        </li>

                    @endif
                @endforeach
            @endif
        </ul>
        <div class="px-6 my-6">
            <button
                class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Create account <span class="ml-2" aria-hidden="true">+</span> </button>
        </div>
    </div>
</aside>

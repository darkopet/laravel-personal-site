<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

    <h2 class="inline-flex mt-2">By Lary Laracore <img src="/images/lary-head.svg" alt="Head of Lary the mascot">
    </h2>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
        <!--  Category -->
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
            <x-dropdown>
                <x-slot name="trigger">
                    <button class="py-2 pl-3 pr-9 tect-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex" 
                            style="display: inline-flex;" 
                            width="22">

                            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
                            
                            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />
                            
                    </button>
                </x-slot>

                <x-dropdown-item href="/thougths/?{{ http_build_query(request()->except('category', 'page')) }}" 
                                :active="request()->routeIs('home')">
                    All
                </x-dropdown-item>
    
                @foreach ($categories as $category)
                    <x-dropdown-item 
                        href="/thoughts?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}" 
                        :active='request()->is("categories/{$category->slug}")'>
                            {{ ucwords($category->name) }}
                    </x-dropdown-item>
                @endforeach
            </x-dropdown>
        </div>
        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/thoughts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <input type="text" 
                       name="search" 
                       placeholder="Find something" 
                       class="bg-transparent placeholder-black font-semibold text-sm"
                       value="{{ request('search') }}"
                >
            </form>
        </div>
    </div>
</header>
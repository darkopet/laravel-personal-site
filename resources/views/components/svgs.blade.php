<!-- Undefined variable $categories @ category-dropdown.blade.php -->
    @foreach ($categories as $category)
        <x-dropdown-item 
            href="/thoughts?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}" 
            :active='request()->is("categories/{$category->slug}")'>
                {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach

<!-- hearth -->
<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
        <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
        </path>
</svg>

<!-- shopping cart -->
<svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
        <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
        </path>
</svg>

<!-- space up top -->
<svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
        <g clip-path="url(#clip0)" fill="#EF3B2D">
        </g>
</svg>

<!-- book -->
<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
        <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
        </path>
</svg>

<!-- SVG Box -->
<div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                <g clip-path="url(#clip0)" fill="#EF3B2D">
                </g>
        </svg>
</div>

<!-- drop-down arrow -->
<svg {{ $attributes(['class' => 'transform -rotate-90']) }} width="22" height="22" viewBox="0 0 22 22">
        <g fill="none" fill-rule="evenodd">
                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                </path>
                <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                </path>
        </g>
</svg>

<!-- div left blank space -->
<svg fill="none" 
     stroke="currentColor"   
     stroke-linecap="round"   
     stroke-linejoin="round"   
     stroke-width="2" viewBox="0 0 24 24"  
     class="w-8 h-8 text-gray-500">
</svg>

<link rel="stylesheet" href="app.css" type="text/css">
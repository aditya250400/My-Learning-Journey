@props(['category'])
<a href="{{ route('category.show', $category->slug) }}"
    class="min-w-full p-2 flex flex-row items-center gap-4 rounded-lg bg-white border border-l-4 border-l-sky-700 lg:hover:scale-105 duration-100 lg:transition-transform  hover:bg-sky-800  hover:border-l-sky-400 transition-colors group shadow-md">
    <img src="{{ $category->image }}" alt="{{ $category->name }}" class="object-cover w-10 rounded-lg">
    <div>
        <h1 class="text-base text-gray-700 group-hover:text-gray-50 line-clamp-1">{{ $category->name }}</h1>
        <p class="text-xs text-gray-500 group-hover:text-gray-300">
            {{ $category->products_count }} Produk
        </p>
    </div>
</a>

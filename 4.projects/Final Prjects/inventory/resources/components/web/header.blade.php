@props(['title' => '', 'subtitle' => '', 'url' => ''])
<div class="flex flex-col md:flex-row md:justify-between mb-5 gap-4">
    <div class="flex flex-col">
        <h1 class="text-gray-700 font-semibold text-lg">{{ $title }}</h1>
        <p class="text-gray-500 text-xs">
            {{ $subtitle }}
        </p>
    </div>
    <div class="w-full md:w-60">
        <form action="{{ $url }}" method="get">
            <input
                class="border text-sm rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-sky-700 text-gray-700 w-full"
                placeholder="Cari Data..." value="{{ request()->search }}" name="search" />
        </form>
    </div>
</div>

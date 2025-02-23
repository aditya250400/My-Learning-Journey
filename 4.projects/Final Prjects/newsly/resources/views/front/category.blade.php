@extends('layouts.master')
@section('title', '| ' . $category->name . ' Category')
@section('content')
    <section id="Category-result" class="max-w-[1130px] mx-auto flex items-center flex-col gap-[30px] mt-[70px]">
        <h1 class="text-4xl leading-[45px] font-bold text-center">
            Explore Our <br />
            {{ $category->name }} News
        </h1>
        <div id="search-cards" class="grid grid-cols-3 gap-[30px]">
            @forelse ($category->news as $news)
                <a href="{{ route('front.details', $news->slug) }}" class="card">
                    <div
                        class="flex flex-col gap-4 p-[26px_20px] transition-all duration-300 ring-1 ring-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18] rounded-[20px] overflow-hidden bg-white">
                        <div class="thumbnail-container h-[200px] relative rounded-[20px] overflow-hidden">
                            <div
                                class="badge absolute left-5 top-5 bottom-auto right-auto flex p-[8px_18px] bg-white rounded-[50px]">
                                <p class="text-xs leading-[18px] font-bold">{{ strtoupper($category->name) }}</p>
                            </div>
                            <img src="{{ $news->thumbnail }}" alt="thumbnail photo" class="w-full h-full object-cover" />
                        </div>
                        <div class="flex flex-col gap-[6px]">
                            <h3 class="text-lg leading-[27px] font-bold">{{ substr($news->name, 0, 70) }}
                                {{ strlen($news->name) > 70 ? '...' : '' }}</h3>
                            <p class="text-sm leading-[21px] text-[#A3A6AE]">{{ $news->created_at->format('d M, Y') }}</p>
                        </div>
                    </div>
                </a>
            @empty
                <h1 className="text-lg text-center">No Articles Found Yet</h1>
            @endforelse
        </div>
    </section>
    <section id="Advertisement" class="max-w-[1130px] mx-auto flex justify-center mt-[70px]">
        <div class="flex flex-col gap-3 shrink-0 w-fit">
            @forelse ($bannerads as $ads)
                <a href="{{ $ads->link }}">
                    <div class="w-[900px] h-[120px] flex shrink-0 border border-[#EEF0F7] rounded-2xl overflow-hidden">
                        <img src="{{ $ads->thumbnail }}" class="object-cover w-full h-full" alt="ads" />
                    </div>
                </a>
                <p class="font-medium text-sm leading-[21px] text-[#A3A6AE] flex gap-1">
                    Our Advertisement <a href="#" class="w-[18px] h-[18px]"><img
                            src="assets/images/icons/message-question.svg" alt="icon" /></a>
                </p>
            @empty
                <h1 className="text-lg text-center">No Ads Found Yet</h1>
            @endforelse
        </div>
    </section>
@endsection

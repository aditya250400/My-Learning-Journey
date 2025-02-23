@extends('layouts.master')
@section('title', '| ' . $article_news->name)
@section('content')
    <header class="flex flex-col items-center gap-[50px] mt-[70px]">
        <div id="Headline" class="max-w-[1130px] mx-auto flex flex-col gap-4 items-center">
            <p class="w-fit text-[#A3A6AE]">{{ $article_news->created_at->format('d M, Y') }} •
                {{ $article_news->category->name }}</p>
            <h1 id="Title" class="font-bold text-[46px] leading-[60px] text-center two-lines">{{ $article_news->name }}
            </h1>
            <div class="flex items-center justify-center gap-[70px]">
                <a id="Author" href="author.html" class="w-fit h-fit">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full overflow-hidden">
                            <img src="{{ $article_news->author->avatar }}" class="object-cover w-full h-full"
                                alt="avatar">
                        </div>
                        <div class="flex flex-col">
                            <p class="font-semibold text-sm leading-[21px]">{{ $article_news->author->name }}</p>
                            <p class="text-xs leading-[18px] text-[#A3A6AE]">{{ $article_news->author->occupation }}</p>
                        </div>
                    </div>
                </a>
                <div id="Rating" class="flex items-center gap-1">
                    <div class="flex items-center">
                        <div class="w-4 h-4 flex shrink-0">
                            <img src="{{ asset('assets/images/icons/Star 1.svg') }}" alt="star">
                        </div>
                        <div class="w-4 h-4 flex shrink-0">
                            <img src="{{ asset('assets/images/icons/Star 1.svg') }}" alt="star">
                        </div>
                        <div class="w-4 h-4 flex shrink-0">
                            <img src="{{ asset('assets/images/icons/Star 1.svg') }}" alt="star">
                        </div>
                        <div class="w-4 h-4 flex shrink-0">
                            <img src="{{ asset('assets/images/icons/Star 1.svg') }}" alt="star">
                        </div>
                        <div class="w-4 h-4 flex shrink-0">
                            <img src="{{ asset('assets/images/icons/Star 1.svg') }}" alt="star">
                        </div>
                    </div>
                    <p class="font-semibold text-xs leading-[18px]">(12,490)</p>
                </div>
            </div>
        </div>
        <div class="w-full h-[500px] flex shrink-0 overflow-hidden">
            <img src="{{ $article_news->thumbnail }}" class="object-cover w-full h-full" alt="cover thumbnail">
        </div>
    </header>
    <section id="Article-container" class="max-w-[1130px] mx-auto flex gap-20 mt-[50px]">
        <article id="Content-wrapper">
            <p>{{ $article_news->content }}</p>

        </article>
        <div class="side-bar flex flex-col w-[300px] shrink-0 gap-10">
            <div class="ads flex flex-col gap-3 w-full">
                @forelse ($bannerads_square as $ads_square)
                    <a href="{{ $ads_square->link }}">
                        <img src="{{ $ads_square->thumbnail }}" class="object-contain w-full h-full" alt="ads" />
                    </a>
                    <p class="font-medium text-sm leading-[21px] text-[#A3A6AE] flex gap-1">
                        Our Advertisement <a href="#" class="w-[18px] h-[18px]"><img
                                src="{{ asset('assets/images/icons/message-question.svg') }}" alt="icon" /></a>
                    </p>
                @empty
                    <h1 className="text-lg text-center">No Ads Found Yet</h1>
                @endforelse
            </div>
            <div id="More-from-author" class="flex flex-col gap-4">
                <p class="font-bold">More From Author</p>
                @forelse ($article_news->author->news as $item)
                    <a href="{{ route('front.details', $item->slug) }}" class="card-from-author">
                        <div
                            class="rounded-[20px] ring-1 ring-[#EEF0F7] p-[14px] flex gap-4 hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                            <div class="w-[70px] h-[70px] flex shrink-0 overflow-hidden rounded-2xl">
                                <img src="{{ $item->thumbnail }}" class="object-cover w-full h-full" alt="thumbnail">
                            </div>
                            <div class="flex flex-col gap-[6px]">
                                <p class="line-clamp-2 font-bold">{{ substr($item->name, 0, 50) }}
                                    {{ strlen($item->name) > 50 ? '...' : '' }}</p>
                                <p class="text-xs leading-[18px] text-[#A3A6AE]">{{ $item->created_at->format('d M, Y') }}
                                    • {{ $item->category->name }}</p>
                            </div>
                        </div>
                    </a>

                @empty
                    <h1 className="text-lg text-center">No Articles Found Yet</h1>
                @endforelse
            </div>
            <div class="ads flex flex-col gap-3 w-full">
                @forelse ($bannerads_square as $ads_square)
                    <a href="{{ $ads_square->link }}">
                        <img src="{{ $ads_square->thumbnail }}" class="object-contain w-full h-full" alt="ads" />
                    </a>
                    <p class="font-medium text-sm leading-[21px] text-[#A3A6AE] flex gap-1">
                        Our Advertisement <a href="#" class="w-[18px] h-[18px]"><img
                                src="{{ asset('assets/images/icons/message-question.svg') }}" alt="icon" /></a>
                    </p>
                @empty
                    <h1 className="text-lg text-center">No Ads Found Yet</h1>
                @endforelse
            </div>
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
                            src="{{ asset('assets/images/icons/message-question.svg') }}" alt="icon" /></a>
                </p>
            @empty
                <h1 className="text-lg text-center">No Ads Found Yet</h1>
            @endforelse
        </div>
    </section>
    <section id="Up-to-date" class="w-full flex justify-center mt-[70px] py-[50px] bg-[#F9F9FC]">
        <div class="max-w-[1130px] mx-auto flex flex-col gap-[30px]">
            <div class="flex justify-between items-center">
                <h2 class="font-bold text-[26px] leading-[39px]">
                    Other News You <br />
                    Might Be Interested
                </h2>
            </div>
            <div class="grid grid-cols-3 gap-[30px]">

                @forelse ($randomNews as $article)
                    <a href="{{ route('front.details', $article->slug) }}" class="card-news">
                        <div
                            class="rounded-[20px] ring-1 ring-[#EEF0F7] p-[26px_20px] flex flex-col gap-4 hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300 bg-white">
                            <div
                                class="thumbnail-container w-full h-[200px] rounded-[20px] flex shrink-0 overflow-hidden relative">
                                <p
                                    class="badge-white absolute top-5 left-5 rounded-full p-[8px_18px] bg-white font-bold text-xs leading-[18px]">
                                    {{ strtoupper($article->category->name) }}</p>
                                <img src="{{ $article->thumbnail }}" class="object-cover w-full h-full"
                                    alt="thumbnail" />
                            </div>
                            <div class="card-info flex flex-col gap-[6px]">
                                <h3 class="font-bold text-lg leading-[27px]">{{ substr($article->name, 0, 50) }}
                                    {{ strlen($article->name) > 50 ? '...' : '' }}</h3>
                                <p class="text-sm leading-[21px] text-[#A3A6AE]">
                                    {{ $article->created_at->format('d M, Y') }}</p>
                            </div>
                        </div>
                    </a>
                @empty
                    <h1 className="text-lg text-center">No Articles Found Yet</h1>
                @endforelse
            </div>
        </div>
    </section>
@endsection

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('output.css') }}" rel="stylesheet" />
    <link href="{{ asset('main.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
    <title>Newsly @yield('title')</title>
</head>

<body class="font-[Poppins] pb-[72px]">
    <nav id="Navbar" class="max-w-[1130px] mx-auto flex justify-between items-center mt-[30px]">
        <div class="logo-container flex gap-[30px] items-center">
            <a href="{{ route('front.index') }}" class="flex shrink-0">
                <img src="{{ asset('assets/images/logos/logo.svg') }}" alt="logo" />
            </a>
            <div class="h-12 border border-[#E8EBF4]"></div>
            <form action="searchPage.html"
                class="w-[450px] flex items-center rounded-full border border-[#E8EBF4] p-[12px_20px] gap-[10px] focus-within:ring-2 focus-within:ring-[#FF6B18] transition-all duration-300">
                <button type="submit" class="w-5 h-5 flex shrink-0">
                    <img src="{{ asset('assets/images/icons/search-normal.svg') }}" alt="icon" />
                </button>
                <input type="text" name="" id=""
                    class="appearance-none outline-none w-full font-semibold placeholder:font-normal placeholder:text-[#A3A6AE]"
                    placeholder="Search hot trendy news today..." />
            </form>
        </div>
        <div class="flex items-center gap-3">
            <a href=""
                class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18]">Upgrade
                Pro</a>
            <a href=""
                class="rounded-full p-[12px_22px] flex gap-[10px] font-bold transition-all duration-300 bg-[#FF6B18] text-white hover:shadow-[0_10px_20px_0_#FF6B1880]">
                <div class="w-6 h-6 flex shrink-0">
                    <img src="{{ asset('assets/images/icons/favorite-chart.svg') }}" alt="icon" />
                </div>
                <span>Post Ads</span>
            </a>
        </div>
    </nav>
    <nav id="Category" class="max-w-[1130px] mx-auto flex justify-center items-center gap-4 mt-[30px]">
        @forelse ($categories as $category)
            <a href="{{ route('front.category', $category->slug) }}"
                class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18]">
                <div class="w-6 h-6 flex shrink-0">
                    <img src="{{ $category->icon }}" alt="{{ $category->name }}" />
                </div>
                <span>{{ $category->name }}</span>
            </a>
        @empty
            <h1 className="text-lg text-center">No Categories Found Yet</h1>
        @endforelse

    </nav>

    @yield('content')


    <script src="{{ asset('js/two-lines-text.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
</body>

</html>

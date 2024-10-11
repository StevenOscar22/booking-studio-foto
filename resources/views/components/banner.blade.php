<div class="flex justify-center overflow-x-hidden">
    {{-- <div class="relative home-shadow-inner-img"> --}}
    @if ($title == 'Home')
        <div class="relative home-shadow-inner-img">
        @elseif ($title == 'Paket')
            <div class="relative paket-shadow-inner-img">
            @else
                <div class="relative">
    @endif

    <img src="{{ $imgSrc }}" alt="{{ $imgAlt }}">

    @if (isset($prevBtn) && $prevBtn != null && $prevBtn == 'true')
        <a href="../"
            class="absolute top-[33%] z-10 left-5 bg-orange-basic rounded-full px-2 py-1 hover:-translate-x-1 hover:bg-orange-400 ease-linear duration-100"><i
                class="fa-solid fa-arrow-left"></i></a>
    @endif

    <div
        class="absolute inset-0 flex justify-center items-center min-w-max max-h-64 {{ $title == 'Home' ? 'bg-black/15' : '' }}">
        <h3 class="text-white text-2xl font-bold z-10 p-2 rounded-md drop-shadow-lg shadow-black"
            style="text-shadow: -2px 3px 4px rgba(0, 0, 0, 0.5);">
            {{ $slot }}
        </h3>
    </div>
</div>
</div>

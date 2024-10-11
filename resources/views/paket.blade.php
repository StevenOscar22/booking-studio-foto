@extends('layouts.main')

@section('title')
    Kaia - {{ $title }}
@endsection

@section('css')
    <style>
        main a span:nth-child(1) {
            background-color: rgb(33, 33, 33);
            transition: 0.2s ease-in-out;
        }

        main a span:nth-child(2) {
            background-color: rgb(22, 22, 22);
            border-color: rgb(22, 22, 22);
            transition: 0.2s ease-in-out;
        }

        main a:hover span:nth-child(1) {
            background-color: rgb(253 186 116);
        }

        main a:hover span:nth-child(2) {
            background-color: #FFA500;
            border-color: #FFA500;
        }

        main a:hover {
            color: black;
        }
    </style>
@endsection

@section(section: 'body')
    <header class="m-auto w-full">
        <x-banner imgSrc="{{ asset('assets/banner_images/home_banner.png') }}" imgAlt="Banner Image" :prevBtn="true"
            title="{{ $title }}" />
    </header>

    <br>

    <main class="flex justify-center max-w-full px-2 mb-24">
        <div class="w-[400px] flex flex-col items-center gap-4 font-bold">
            <a href="#" class="relative flex w-[100%]">
                <span class="absolute bottom-0 right-0 mr-0 h-[104%] w-[101%] rounded-xl"></span>
                <span
                    class="fold-bold relative rounded-xl border-2 border-black text-base px-3 py-2 w-[100%] h-[80px] flex justify-center items-center">
                    <h3 class="text-center">SELF PHOTO (RAKSA/PREMIUM)</h3>
                </span>
            </a>
            <a href="#" class="relative flex w-[100%]">
                <span class="absolute bottom-0 right-0 mr-0 h-[104%] w-[101%] rounded-xl"></span>
                <span
                    class="fold-bold relative rounded-xl border-2 border-black text-base px-3 py-2 w-[100%] h-[80px] flex justify-center items-center">
                    <h3 class="text-center">STUDENT PACKAGE</h3>
                </span>
            </a>
            <a href="#" class="relative flex w-[100%]">
                <span class="absolute bottom-0 right-0 mr-0 h-[104%] w-[101%] rounded-xl"></span>
                <span
                    class="fold-bold relative rounded-xl border-2 border-black text-base px-3 py-2 w-[100%] h-[80px] flex justify-center items-center">
                    <h3 class="text-center">PAS FOTO</h3>
                </span>
            </a>
            <a href="#" class="relative flex w-[100%]">
                <span class="absolute bottom-0 right-0 mr-0 h-[104%] w-[101%] rounded-xl"></span>
                <span
                    class="fold-bold relative rounded-xl border-2 border-black text-base px-3 py-2 w-[100%] h-[80px] flex justify-center items-center">
                    <h3 class="text-center">PERSONAL PHOTOSHOOT</h3>
                </span>
            </a>
            <a href="#" class="relative flex w-[100%]">
                <span class="absolute bottom-0 right-0 mr-0 h-[104%] w-[101%] rounded-xl"></span>
                <span
                    class="fold-bold relative rounded-xl border-2 border-black text-base px-3 py-2 w-[100%] h-[80px] flex justify-center items-center">
                    <h3 class="text-center">WISUDA/FAMILY PACKAGE</h3>
                </span>
            </a>
        </div>
    </main>

    <x-footer title="{{ $title }}" />
@endsection

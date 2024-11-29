@extends('layouts.main')

@section('title')
    Kaia - {{ $title }}
@endsection

@section(section: 'body')
    <header class="max-w-[100%] m-auto">
        <x-banner imgSrc="{{ asset('assets/banner_images/home_banner.png') }}" imgAlt="Banner Image"
            title="{{ $title }}">
            <img src="{{ asset('assets/logo/kaia_logo_with_shadow.svg') }}" alt="Kaia Logo">
        </x-banner>
    </header>


    <main>
    </main>

    <x-footer title="{{ $title }}" />
@endsection

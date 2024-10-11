@extends('layouts.main')

@section('title')
    Kaia - {{ $title }}
@endsection

@section('body')
    <header class="px-2 m-auto max-w-[400px]">
        <div class="btn active mb-7 mt-4" style="width: 100%;">
            <h1 class="font-semibold text-2xl">Profil</h1>
        </div>
    </header>
    {{-- <header class="px-2 btn active m-auto mb-7 mt-4" style="max-width: 400px;">
        <h1 class="font-semibold text-2xl">Profil</h1>
    </header> --}}
    <div class="px-2 m-auto max-w-[400px] mb-28">
        <div class="flex items-center gap-3 py-3">
            <div class="rounded-full bg-slate-200">
                <img src="{{ asset('assets/logo/avatar.png') }}" alt="Foto Profil" style="width: 100px;">
            </div>
            <div class="flex gap-1">
                <h1 class="text-xl sm:text-2xl font-semibold -translate-y-5">Ema</h1>
                <button type="button"
                    class="bg-orange-basic hover:bg-orange-500 duration-150 ease-linear rounded-full h-6 w-6 flex justify-center items-center -translate-y-4"><i
                        class="fa-solid fa-pen text-xs text-black"></i></button>
            </div>
        </div>

        <br>

        <div class="pt-2 pb-6 rounded-xl px-3" style="background-color: rgb(23,23,23)">
            <h1 class="text-sm text-zinc-500 pb-1">Pengaturan Akun</h1>
            <div class="px-3">
                <a href="#" class="flex justify-between border-b pr-2 py-1">
                    <span><i class="fa-regular fa-user w-7 text-sm text-center"></i> Informasi Akun</span>
                    <div>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </a>
                <a href="#" class="flex justify-between border-b pr-2 py-1">
                    <span><i class="fa-solid fa-globe w-7 text-sm text-center"></i> Bahasa</span>
                    <div>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </a>
                <a href="#" class="flex justify-between border-b pr-2 py-1">
                    <span><i class="fa-solid fa-clock-rotate-left w-7 text-sm text-center"></i> Riwayat Pesanan</span>
                    <div>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </a>
                <a href="#" class="flex justify-between border-b pr-2 py-1">
                    <span><i class="fa-regular fa-folder w-7 text-sm text-center"></i> Riwayat Foto</span>
                    <div>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </a>
                <a href="#" class="flex justify-between border-b pr-2 py-1">
                    <span><i class="fa-regular fa-bell w-7 text-sm text-center"></i> Notifikasi</span>
                    <div>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </a>
            </div>
        </div>

        <br>

        <div class="pt-2 pb-6 rounded-xl px-3" style="background-color: rgb(23,23,23)">
            <h1 class="text-sm text-zinc-500 pb-1">Payment</h1>
            <div class="px-3">
                <a href="#" class="flex justify-between border-b pr-2 py-1">
                    <span><i class="fa-solid fa-credit-card w-7 text-sm text-center"></i> Payment Method</span>
                    <div>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </a>
            </div>
        </div>

        <br>

        <div class="pt-2 pb-6 rounded-xl px-3" style="background-color: rgb(23,23,23)">
            <h1 class="text-sm text-zinc-500 pb-1">KAIA</h1>
            <div class="px-3">
                <a href="#" class="flex justify-between border-b pr-2 py-1">
                    <span><i class="fa-solid fa-users w-7 text-sm text-center"></i> Tentang Kami</span>
                    <div>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </a>
                <a href="#" class="flex justify-between border-b pr-2 py-1">
                    <span><i class="fa-solid fa-cubes w-7 text-sm text-center"></i> Lihat Paket</span>
                    <div>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </a>
                <a href="#" class="flex justify-between border-b pr-2 py-1">
                    <span><i class="fa-regular fa-address-book w-7 text-sm text-center"></i> Kontak Personal</span>
                    <div>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </a>
            </div>
        </div>

        <br>

        <a href="#"
            class="py-3 flex justify-center text-center rounded-2xl bg-orange-basic hover:bg-orange-500 duration-150 ease-linear font-bold text-black text-lg">Log
            Out</a>
    </div>

    <x-footer title="{{ $title }}" />
@endsection

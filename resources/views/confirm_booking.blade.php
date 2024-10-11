@extends('layouts.main')

@section('title')
    Kaia - {{ $title }}
@endsection

@section('body')
    <div class="relative px-3 max-w-[450px] m-auto">
        <div
            class="absolute top-[25%] z-10 bg-orange-basic rounded-full px-2 py-1 hover:-translate-x-1 hover:bg-orange-400 ease-linear duration-100">
            <a href="../"><i class="fa-solid fa-arrow-left"></i></a>
        </div>
        <div class="text-center text-2xl font-semibold m-auto max-w-full border-b border-zinc-800 py-3">
            <h1>Confirm Booking</h1>
        </div>
    </div>

    <div class="flex gap-3 max-w-[450px] m-auto px-3 mt-6">
        <div class="overflow-hidden rounded-lg flex bg-slate-100">
            <img src="{{ asset('assets/sampel_foto/contoh_foto.jpg') }}" alt="Contoh Foto" style="transform: scale(1.07);">
        </div>
        <div class="mt-2 sm:mt-0">
            <h1 class="text-2xl font-bold">Paket Bronze</h1>
            <p class="text-sm">Rp. 350.000(1-6 Person)</p>
        </div>
    </div>

    <div class="max-w-[450px] m-auto mt-5 px-3 mb-9">
        <div class="border-b-4 border-orange-basic max-w-max pl-1 pr-10 mb-4 pb-2">
            <h1 class="font-semibold text-xl">Detail Transaksi</h1>
        </div>

        <form action="" method="post">
            <div class="flex flex-col">
                <label for="nama_pemesan">Nama</label>
                <input type="text" name="nama_pemesan" id="nama_pemesan"
                    class="bg-black-basic border-b border-orange-basic focus:outline-orange-basic outline-none outline-2 outline-offset-0 focus:rounded duration-200 ease-in px-2 py-1">
            </div>
            <div class="flex flex-col">
                <label for="no_hp_pemesan">Nomor Handphone</label>
                <input type="text" name="no_hp_pemesan" id="no_hp_pemesan"
                    class="bg-black-basic border-b border-orange-basic focus:outline-orange-basic outline-none outline-2 outline-offset-0 focus:rounded duration-200 ease-in px-2 py-1">
            </div>
            <div class="flex flex-col">
                <label for="email_pemesan">Email</label>
                <input type="email" name="email_pemesan" id="email_pemesan"
                    class="bg-black-basic border-b border-orange-basic focus:outline-orange-basic outline-none outline-2 outline-offset-0 focus:rounded duration-200 ease-in px-2 py-1">
            </div>

            <div class="mt-7">
                <div class="border-b-4 border-orange-basic max-w-max pl-1 pr-10 mb-2 pb-2">
                    <h1 class="font-semibold text-xl">Booking</h1>
                </div>

                <div class="text-sm">
                    <p>Rabu, 14 Agustus 2024, 12:45 WIB</p>
                    <p>6 Person</p>
                    <p>Diizinkan Upload</p>
                </div>

            </div>

            <div class="flex flex-col items-end">
                <div class="border-b-2 min-w-[150px] text-right border-orange-basic pb-5">
                    <p class="text-zinc-500 font-semibold">Rp. 350,000</p>
                </div>
                <h1 class="font-bold text-xl mt-1">Rp. 350,000</h1>
            </div>

            <br>
            <br>

            <div class="px-4">
                <button type="submit"
                    class="bg-orange-basic hover:bg-orange-300 rounded-lg transition-all duration-200 w-full text-black font-bold py-3">Lanjutkan
                    Transaksi</button>
            </div>
        </form>
    </div>
@endsection

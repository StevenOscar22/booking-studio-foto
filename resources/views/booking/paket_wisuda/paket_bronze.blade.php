@extends('layouts.main')

@section('title')
    Booking - Wisuda / Family Package
@endsection

@section(section: 'body')
    <main class="min-h-full max-w-[100%] m-auto">
        <x-banner imgSrc="{{ asset('assets/banner_images/paket_wisuda_bronze.png') }}" imgAlt="Wisuda / Family Package">
            PAKET BRONZE
        </x-banner>


        <section class="flex justify-center px-4">
            <div class="flex gap-4 sample-foto z-50">
                <div class="overflow-hidden rounded-lg flex flex-1">
                    <img src="{{ asset('assets/sampel_foto/contoh_foto.jpg') }}" alt="Contoh Foto"
                        style="transform: scale(1.07);">
                </div>
                <div class="mt-12">
                    <h5 class="font-bold text-base md:text-xl">Paket Bronze</h5>
                    <p>Rp.350.000</p>
                </div>
            </div>
        </section>

        <section class="mt-5 px-4">
            <div>
                <div class="flex justify-center text-center min-w-[100%]">
                    <div id="snk-btn" onclick="changeStyle('snk')" style="width: 200px;" class="btn cursor-pointer">
                        <button type="button" class="font-bold">S & K</button>
                    </div>
                    <div id="jadwal-btn" onclick="changeStyle('jadwal')" style="width: 200px;" class="cursor-pointer btn">
                        <button type="button" class="font-bold">JADWAL</button>
                    </div>
                </div>
            </div>

            <div id="content-area" class="max-w-[400px] m-auto pt-3">
                <!-- Default Content = snk.blade.php -->
                <div>
                    <ul>
                        <li>1. For 1-6 Person</li>
                        <li>2. Cetak 10R (20x25cm) + Frame</li>
                        <li>3. Durasi Foto 30 menit (Estimasi 70+ foto)</li>
                        <li>4. Free All Soft files Edit</li>
                        <li>5. Max. 1 Kostum</li>
                        <li>6. Add Person - 20.000/ person</li>
                    </ul>
                    <div
                        class="flex justify-center items-center bg-orange-basic hover:bg-orange-300 rounded-lg transition-all duration-200 mb-10 mt-5">
                        <button type="button" id="bookingBtnToJadwal" class="font-bold text-black w-[90%] h-10"
                            onclick="changeStyle('jadwal')">BOOKING</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

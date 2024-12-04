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
                {{-- @auth --}}
                <div class="flex justify-center items-center bg-orange-basic hover:bg-orange-300 rounded-lg transition-all duration-200 mb-10 mt-5"
                    id="loginButton">
                    <button type="button" id="bookingBtnToJadwal" class="font-bold text-black w-[90%] h-10"
                        onclick="changeStyle('jadwal')">BOOKING</button>
                </div>
                {{-- @else --}}
                <div class="flex justify-center items-center bg-gray-400 rounded-lg mt-5">
                    <a href="{{ route('login') }}"
                        class="font-bold text-black w-[90%] h-10 flex justify-center items-center">
                        LOGIN UNTUK MELANJUTKAN
                    </a>
                </div>
                {{-- @endauth --}}
            </div>
            </div>
        </section>
    </main>
@endsection


@section('script')
    <script>
        function changeStyle(option) {

            // Terapkan style berdasarkan pilihan
            const snkBtn = document.getElementById('snk-btn');
            const jadwalBtn = document.getElementById('jadwal-btn');

            if (option === 'snk') {
                // Hapus kelas aktif dari jadwal-btn dan tambahkan ke snk-btn
                jadwalBtn.classList.remove('active');
                snkBtn.classList.add('active');
            } else if (option === 'jadwal') {
                // Hapus kelas aktif dari snk-btn dan tambahkan ke jadwal-btn
                snkBtn.classList.remove('active');
                jadwalBtn.classList.add('active');
            }
        }

        function changeSnk() {
            changeStyle('snk');
            const key = 'snk'; // Cache key berdasarkan opsi

            if (cachedResponses[key]) {
                $('#content-area').html(cachedResponses[key]);
            } else {
                $.ajax({
                    url: '{{ route('get_content') }}',
                    type: 'POST',
                    data: {
                        paket_booking: "wisuda_family",
                        jenis_paket: "bronze",
                        option: "snk",
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        cachedResponses[key] = response.content;
                        $('#content-area').html(response.content);
                    }
                });
            }
        }

        function changeJadwal() {
            changeStyle('jadwal');
            const key = 'jadwal'; // Cache key berdasarkan opsi


            if (cachedResponses[key]) {
                $('#content-area').html(cachedResponses[key]);
            } else {
                $.ajax({
                    url: '{{ route('get_content') }}',
                    type: 'POST',
                    data: {
                        paket_booking: "wisuda_family",
                        jenis_paket: "bronze",
                        option: "jadwal",
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        // cachedResponses[key] = response.content;
                        $('#content-area').html(response.content);

                        document.getElementById('content-area').scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            }
        }
        // document.getElementById('snk-btn') && document.getElementById('jadwal-btn') && changeStyle('snk');

        let cachedResponses = {};
        // get content
        $(document).ready(function() {
            changeSnk();
            $(document).on('click', '#snk-btn', function() {
                changeSnk();
            });

            $(document).on('click', '#jadwal-btn', function() {
                changeJadwal();
            });

            $(document).on('click', '#bookingBtnToJadwal', function() {
                changeJadwal();
            });

            $(document).ready(function() {
                // Fungsi untuk memeriksa apakah input sudah terisi
                function checkInputs() {
                    if ($('#day_date').val().trim() !== '' && $('#time').val().trim() !== '' && $(
                            '#number_of_person').val().trim() !== '' && $('#upload_permission').val()
                        .trim() !== '') {
                        $('#loginButton button').prop('disabled', false); // Aktifkan tombol
                    } else {
                        $('#loginButton button').prop('disabled', true); // Nonaktifkan tombol
                    }
                }

                // Tambahkan event listener ke input
                $('#day_date, #time', '#number_of_person', '#upload_permission').on('input', checkInputs);

                // Panggil sekali untuk inisialisasi
                checkInputs();
            });
        });
    </script>
@endsection

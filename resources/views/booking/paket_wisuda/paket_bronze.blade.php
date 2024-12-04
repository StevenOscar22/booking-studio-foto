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

            <div id="content-area" class="max-w-[400px] m-auto pt-3"></div>

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
                // Panggil checkInputs() setelah konten dimuat
                checkInputs();
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

                        // Panggil checkInputs() setelah konten dimuat
                        checkInputs();

                        // Pastikan untuk menambahkan event listener untuk input radio setelah konten dimuat
                        $('input[type="radio"]').on('change', function() {
                            checkInputs();
                        });

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
        });

        // Fungsi untuk memeriksa apakah semua radio button sudah dipilih
        function checkInputs() {
            const dayDateSelected = $('input[name="day_date"]:checked').length > 0;
            const timeSelected = $('input[name="time"]:checked').length > 0;
            const numberOfPersonSelected = $('input[name="number_of_person"]:checked').length > 0;
            const uploadPermissionSelected = $('input[name="upload_permission"]:checked').length > 0;

            // Jika semua radio button dipilih, aktifkan tombol booking
            if (dayDateSelected && timeSelected && numberOfPersonSelected && uploadPermissionSelected) {
                console.log("Selected")
                $('#submitBookingDisabled').hide(); // Sembunyikan tombol yang disabled
                $('#submitBookingActive').show(); // Tampilkan tombol yang aktif
            } else {
                console.log("Not Selected");
                $('#submitBookingDisabled').show(); // Tampilkan tombol yang disabled
                $('#submitBookingActive').hide(); // Sembunyikan tombol yang aktif
            }
        }

        // Event listener untuk perubahan status radio button
        $('input[type="radio"]').on('change', function() {
            checkInputs();
        });
    </script>
@endsection

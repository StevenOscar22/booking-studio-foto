<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking - Wisuda / Family Package</title>
    @vite('resources/css/app.css')
</head>

<body>
    <main class="min-h-full max-w-[100%] m-auto">
        <section class="flex justify-center">
            <div class="relative">
                <img src="{{ asset('assets/paket_booking/paket_wisuda.svg') }}" alt="Wisuda / Family Package">
                <div class="absolute inset-0 flex justify-center items-center bg-black/50 min-w-max max-h-64">
                    <h3 class="text-white text-2xl font-bold  p-2 rounded-md drop-shadow-2xl shadow-white">PAKET BRONZE</h3>
                </div>
            </div>
            <!-- <div class="relative">
                <img src="{{ asset('assets/paket_booking/paket_wisuda.svg') }}" alt="Wisuda / Family Package">
                <div class="absolute bg-black/50 min-w-max max-h-64" style="transform: translate(-50%, -50%); top: 50%; left: 50%;">
                    <h3 class="text-white text-2xl font-bold  p-2 rounded-md drop-shadow-2xl shadow-white">PAKET BRONZE</h3>
                </div>
            </div> -->
        </section>

        <section class="flex flex-col items-center px-4">
            <div class="flex gap-4 sample-foto">
                <div class="overflow-hidden rounded-lg h-full">
                    <img src="{{ asset('assets/paket_booking/contoh_foto.jpg')}}" alt="Contoh Foto" style="scale: 1.07;">
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
                    <div id="snk-btn" onclick="changeStyle('snk')" style="width: 200px;" class="btn  cursor-pointer">
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
                    <div class="flex justify-center items-center bg-orange-basic hover:bg-orange-300 rounded-lg transition-all duration-200 mb-10 mt-5">
                        <button type="button" id="bookingBtnToJadwal" class="font-bold text-black w-[90%] h-10" onclick="changeStyle('jadwal')">BOOKING</button>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <script src="{{ asset("js/jquery/jquery-3.7.1.min.js") }}"></script>
    <!-- <script src="{{ asset("js/script.js") }}"></script> -->
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
        changeStyle('snk');


        let cachedResponses = {};
        // get content
        $(document).ready(function() {
            $(document).on('click', '#snk-btn', function() {
                changeStyle('snk');
                const key = 'snk'; // Cache key berdasarkan opsi

                if (cachedResponses[key]) {
                    $('#content-area').html(cachedResponses[key]);
                } else {
                    $.ajax({
                        url: '{{ route("get-content") }}',
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
            });

            $(document).on('click', '#jadwal-btn', function() {
                changeStyle('jadwal');
                const key = 'jadwal'; // Cache key berdasarkan opsi


                if (cachedResponses[key]) {
                    $('#content-area').html(cachedResponses[key]);
                } else {
                    $.ajax({
                        url: '{{ route("get-content") }}',
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
            });

            $(document).on('click', '#bookingBtnToJadwal', function() {
                changeStyle('jadwal');
                const key = 'jadwal'; // Cache key berdasarkan opsi


                if (cachedResponses[key]) {
                    $('#content-area').html(cachedResponses[key]);
                } else {
                    $.ajax({
                        url: '{{ route("get-content") }}',
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
            });
        });
    </script>
</body>

</html>
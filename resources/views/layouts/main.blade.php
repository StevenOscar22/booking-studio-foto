<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    @vite('resources/assets/fontawesome-6.6.0-web/css/all.min.css')
    @yield('css')
</head>

<body>
    @yield('body')
</body>

<script src="{{ asset('js/jquery/jquery-3.7.1.min.js') }}"></script>
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
    document.getElementById('snk-btn') && document.getElementById('jadwal-btn') && changeStyle('snk');


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
                    url: '{{ route('get-content') }}',
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
                    url: '{{ route('get-content') }}',
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
                    url: '{{ route('get-content') }}',
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

</html>

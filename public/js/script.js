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
$(document).ready(function () {
    $(document).on('click', '#snk-btn', function () {
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
                success: function (response) {
                    cachedResponses[key] = response.content;
                    $('#content-area').html(response.content);
                }
            });
        }
    });

    $(document).on('click', '#jadwal-btn', function () {
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
                success: function (response) {
                    // cachedResponses[key] = response.content;
                    $('#content-area').html(response.content);

                    document.getElementById('content-area').scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        }
    });

    $(document).on('click', '#bookingBtnToJadwal', function () {
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
                success: function (response) {
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

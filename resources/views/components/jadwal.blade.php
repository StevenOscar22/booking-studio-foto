<form action="" method="post" class="mb-10">
    <!-- Tanggal, Bulan, Hari -->
    <section class="overflow-x-auto border-t border-b border-gray-700 mb-5">
        <div class="radio-group min-w-fit py-2 px-5">
            <label class="radio-box">
                <input type="radio" name="day_date" value="slot1">
                <div class="content px-5 py-2">
                    <div class="flex gap-1 justify-center items-center">
                        <p class="date">21</p>
                        <p class="month">Aug</p>
                    </div>
                    <p class="day">SENIN</p>
                </div>
            </label>

            <label class="radio-box">
                <input type="radio" name="day_date" value="slot2">
                <div class="content px-5 py-2">
                    <div class="flex gap-1 justify-center items-center">
                        <p class="date">22</p>
                        <p class="month">Aug</p>
                    </div>
                    <p class="day">SELASA</p>
                </div>
            </label>
            <label class="radio-box">
                <input type="radio" name="day_date" value="slot2">
                <div class="content px-5 py-2">
                    <div class="flex gap-1 justify-center items-center">
                        <p class="date">23</p>
                        <p class="month">Aug</p>
                    </div>
                    <p class="day">RABU</p>
                </div>
            </label>
            <label class="radio-box">
                <input type="radio" name="day_date" value="slot2">
                <div class="content px-5 py-2">
                    <div class="flex gap-1 justify-center items-center">
                        <p class="date">24</p>
                        <p class="month">Aug</p>
                    </div>
                    <p class="day">KAMIS</p>
                </div>
            </label>
            <label class="radio-box">
                <input type="radio" name="day_date" value="slot2">
                <div class="content px-5 py-2">
                    <div class="flex gap-1 justify-center items-center">
                        <p class="date">25</p>
                        <p class="month">Aug</p>
                    </div>
                    <p class="day">JUMAT</p>
                </div>
            </label>
            <label class="radio-box">
                <input type="radio" name="day_date" value="slot2">
                <div class="content px-5 py-2">
                    <div class="flex gap-1 justify-center items-center">
                        <p class="date">26</p>
                        <p class="month">Aug</p>
                    </div>
                    <p class="day">SABTU</p>
                </div>
            </label>
            <label class="radio-box">
                <input type="radio" name="day_date" value="slot2">
                <div class="content px-5 py-2">
                    <div class="flex gap-1 justify-center items-center">
                        <p class="date">{{ date('t') }}</p>
                        <p class="month">{{ date('M') }}</p>
                    </div>
                    <p class="day">MINGGU</p>
                </div>
            </label>
        </div>
    </section>

    <!-- Waktu -->
    <section>
        <div class="flex gap-1 items-center">
            <img src="{{ asset('assets/camera.svg') }}" alt="Time icon">
            <h6 class="font-bold">TIME</h6>
        </div>

        <div class="overflow-x-auto mb-5">
            <div class="radio-group min-w-fit py-2 px-5">
                <label class="radio-box">
                    <input type="radio" name="time" value="time1">
                    <div class="content px-5 py-2">
                        <p class="time">10.00</p>
                    </div>
                </label>
                <label class="radio-box">
                    <input type="radio" name="time" value="time1">
                    <div class="content px-5 py-2">
                        <p class="time">12.45</p>
                    </div>
                </label>
                <label class="radio-box">
                    <input type="radio" name="time" value="time1">
                    <div class="content px-5 py-2">
                        <p class="time">14.45</p>
                    </div>
                </label>
                <label class="radio-box">
                    <input type="radio" name="time" value="time1">
                    <div class="content px-5 py-2">
                        <p class="time">16.45</p>
                    </div>
                </label>
                <label class="radio-box">
                    <input type="radio" name="time" value="time1">
                    <div class="content px-5 py-2">
                        <p class="time">18.00</p>
                    </div>
                </label>
            </div>
        </div>
    </section>

    <!-- Jumlah Orang -->
    <section>
        <div class="flex gap-1 items-center">
            <h6 class="ml-5 font-bold">PERSON</h6>
        </div>

        <div class="overflow-x-auto mb-5">
            <div class="radio-group min-w-fit py-2 px-5">
                <label class="radio-box">
                    <input type="radio" name="number_of_person" value="person1">
                    <div class="content px-5 py-2">
                        <p class="person">1</p>
                    </div>
                </label>
                <label class="radio-box">
                    <input type="radio" name="number_of_person" value="person1">
                    <div class="content px-5 py-2">
                        <p class="person">2</p>
                    </div>
                </label>
                <label class="radio-box">
                    <input type="radio" name="number_of_person" value="person1">
                    <div class="content px-5 py-2">
                        <p class="person">3</p>
                    </div>
                </label>
                <label class="radio-box">
                    <input type="radio" name="number_of_person" value="person1">
                    <div class="content px-5 py-2">
                        <p class="person">4</p>
                    </div>
                </label>
                <label class="radio-box">
                    <input type="radio" name="number_of_person" value="person1">
                    <div class="content px-5 py-2">
                        <p class="person">5</p>
                    </div>
                </label>
                <label class="radio-box">
                    <input type="radio" name="number_of_person" value="person1">
                    <div class="content px-5 py-2">
                        <p class="person">6</p>
                    </div>
                </label>
                <label class="radio-box">
                    <input type="radio" name="number_of_person" value="person1">
                    <div class="content px-5 py-2">
                        <p class="person">7</p>
                    </div>
                </label>
                <label class="radio-box">
                    <input type="radio" name="number_of_person" value="person1">
                    <div class="content px-5 py-2">
                        <p class="person">8</p>
                    </div>
                </label>
            </div>
        </div>
    </section>

    <!-- Izin Upload -->
    <section>
        <div class="flex gap-1 items-center">
            <h6 class="ml-5 font-bold">DIIZINKAN / TIDAK DIIZINKAN UPLOAD</h6>
        </div>

        <div class="overflow-x-auto mb-5">
            <div class="radio-group min-w-fit py-2 px-5">
                <label class="radio-box">
                    <input type="radio" name="upload_permission" value="yes">
                    <div class="content px-5 py-2">
                        <p class="upload_permission text-sm">DIIZINKAN</p>
                    </div>
                </label>
                <label class="radio-box">
                    <input type="radio" name="upload_permission" value="no">
                    <div class="content px-5 py-2">
                        <p class="upload_permission text-sm">TIDAK DIIZINKAN</p>
                    </div>
                </label>
            </div>
        </div>
    </section>

    <!-- Submit Button -->
    <div class="flex justify-center items-center bg-orange-basic hover:bg-orange-300 rounded-lg transition-all duration-200">
        <button type="submit" class="font-bold text-black w-[90%] h-10">BOOKING</button>
    </div>
</form>
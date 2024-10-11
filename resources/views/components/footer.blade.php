<footer class="footer flex justify-center gap-24 fixed bottom-0 left-0 right-0 pb-2 pt-4"
    style="background-color: #191919">
    <a href="/"
        class="flex flex-col items-center justify-center {{ $title == 'Home' ? 'text-white' : 'text-zinc-600' }}">
        <i class="fa-solid fa-house"></i>
        <p>Home</p>
    </a>
    <a href="/paket"
        class="flex flex-col items-center justify-center {{ $title == 'Paket' ? 'text-white' : 'text-zinc-600' }}">
        <i class="fa-solid fa-bookmark"></i>
        <p>Booking</p>
    </a>
    <a href="/profile"
        class="flex flex-col items-center justify-center {{ $title == 'Profile' ? 'text-white' : 'text-zinc-600' }}">
        <i class="fa-solid fa-user"></i>
        <p>Akun</p>
    </a>
</footer>

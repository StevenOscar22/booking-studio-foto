<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaia - Daftar</title>
    @vite('resources/css/app.css')
    <style>
        /* Sembunyikan input file asli */
        .file-input {
            display: none;
        }

        /* Gaya untuk label yang akan menggantikan input file */
        .file-label {
            display: inline-block;
            cursor: pointer;
            padding: 10px;
            border-radius: 50%;
        }

        /* Menampilkan gambar atau ikon kamera */
        .file-label img {
            width: 70px;
            height: 70px;
        }
    </style>
</head>

<body>
    <!-- background KAIA -->
    <div class="flex flex-col items-center -z-9">
        <img src="{{ asset('assets/auth/welcome_to.svg') }}" alt="Welcome To" class="">
        <img src="{{ asset('assets/auth/kaia_logo.svg') }}" alt="KAIA Logo">
    </div>


    <img src="" alt="">
    <form action="" method="post" class="flex flex-col justify-center items-center min-h-screen w-fit m-auto">
        <div class="w-[100%] mb-[9vh]">
            <div>
                <h1 class="text-white text-4xl">Create New<br>Account</h1>
            </div>
        </div>
        <div class="relative flex w-96 flex-col rounded-xl bg-clip-border text-gray-700 shadow-md">
            <div class="flex flex-col gap-4 p-6">
                <div class="flex flex-col j ustify-center items-center mb-12">
                    <input type="file" id="file-input" class="file-input">
                    <label for="file-input" class="file-label">
                        <img src="{{ asset('assets/auth/register/camera.svg') }}" alt="Upload Image">
                    </label>
                </div>
                <div class="relative h-11 w-full min-w-[200px]">
                    <input
                        class="peer h-full w-full border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-3 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-brown-basic focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 border-black border-b-white"
                        placeHolder=" " name="nama" type="text" />
                    <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-brown-basic peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-brown-basic peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-brown-basic peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 text-white">
                        Nama
                </div>
                <div class="relative h-11 w-full min-w-[200px]">
                    <input
                        class="peer h-full w-full border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-3 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-brown-basic focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 border-black border-b-white"
                        placeHolder=" " name="email" type="email" />
                    <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-brown-basic peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-brown-basic peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-brown-basic peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 text-white">
                        Email
                    </label>
                </div>
                <div class="relative h-11 w-full min-w-[200px]">
                    <input
                        class="peer h-full w-full border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-3 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-brown-basic focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 border-black border-b-white"
                        placeHolder=" " name="password" type="password" />
                    <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-brown-basic peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-brown-basic peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-brown-basic peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 text-white">
                        Password
                    </label>
                </div>
            </div>
            <div class="p-6 pt-0 mt-10">
                <a href="../"
                    class="block w-full select-none rounded-full bg-gradient-to-tr bg-brown-basic py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md bg-brown-basic/20 transition-all hover:shadow-lg hover:bg-brown-basic/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button"
                    data-ripple-light="true">
                    Daftar
                </a>
                <!-- <button
                    class="block w-full select-none rounded-lg bg-gradient-to-tr bg-brown-basic py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md bg-brown-basic/20 transition-all hover:shadow-lg hover:bg-brown-basic/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button"
                    data-ripple-light="true">
                    Sign In
                </button> -->
                <p class="mt-6 flex justify-center font-sans text-sm font-light leading-normal text-inherit antialiased text-white">
                    Sudah memiliki akun?
                    <a
                        href="../login"
                        class="ml-1 block font-sans text-sm font-bold leading-normal text-brown-basic antialiased">
                        Masuk
                    </a>
                </p>
            </div>
        </div>
    </form>
</body>

</html>

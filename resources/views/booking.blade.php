<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="h-64">


        <section
            class="bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                    Student Package</h1>

            </div>
        </section>

    </div>


    <div>


        <div>
            <div class="p-3 flex items-center">
                <div class="flex-row items-center justify-between mb-2">
                    <a href="#">
                        <img class="w-10 h-10 rounded-full"
                            src="https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg" alt="Jese Leos">
                    </a>

                </div>
                <p class="text-base font-semibold leading-none text-gray-900 dark:text-white">
                    <a href="#">Jese Leos</a>
                </p>
                <p class=" text-sm font-normal">
                    <a href="#" class="hover:underline">@jeseleos</a>
                </p>

            </div>

        </div>
        <div>

            <form class="max-w-md mx-auto px-5">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Mockups, Logos..." required />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>

        </div>

        <div class="mt-5">
            <div class="flex justify-between px-5">
                <h1 class="font-bold">Rekomendasi Ide Pose Foto</h1>
                <a href="">lihat Semua</a>

            </div>
            <div class="flex gap-3 overflow-scroll px-5">

                <img class="object-cover w-96 h-32 rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg" alt="">
            </div>
        </div>

    </div>
</body>

</html>

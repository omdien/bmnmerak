<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700;900&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    spacing: {
                        13: "3.25rem",
                    },
                    fontFamily: {
                        inter: ["Inter"],
                    },
                    colors: {
                        omdien: "#bada55",
                        kopi: "#c0ffee",
                    },
                },
            },
        };
    </script>
    <title>Modul BMN</title>
</head>

<body>


    @if(session()->has('loginError'))
    <div role="alert">
        {{ session('loginError') }}
        <button type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <section class="bg-rose-700 dark:bg-gray-900 max-w-screen-lg mx-auto px-10 flex items-center min-h-screen">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
            <div class="flex flex-col justify-center">
                <h1 class="mb-4 text-4xl font-inter font-bold tracking-tight leading-none text-yellow-500 md:text-5xl lg:text-6xl dark:text-white">Modul BMN SKIPM Merak</h1>
                <p class="mb-6 text-lg font-normal text-gray-200 lg:text-xl dark:text-gray-400">Aplikasi yang digunakan untuk mengelola aset atau barang yang dimiliki oleh negara. Aplikasi BMN dirancang untuk mencatat, memantau, dan mengendalikan seluruh proses yang terkait dengan barang milik negara, mulai dari pengadaan hingga pemeliharaan dan penghapusan.</p>
                <a href="#" class="text-blue-400 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Baca lebih lengkap tentang aplikasi
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
            <div>
                <div class="w-full lg:max-w-xl p-6 space-y-8 sm:p-8 bg-rose-300 rounded-lg shadow-xl dark:bg-gray-800">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                        Login ke aplikasi
                    </h2>
                    <form class="mt-8 space-y-6" action="{{env('APP_URL')}}/login" method="POST">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email anda</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <!-- <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" name="remember" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600" required>
                        </div>
                        <div class="ml-3 text-sm">
                        <label for="remember" class="font-medium text-gray-500 dark:text-gray-400">Remember this device</label>
                        </div>
                        <a href="#" class="ml-auto text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Lupa Password?</a>
                    </div> -->
                        <button type="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
                        <div class="text-sm font-medium text-gray-900 dark:text-white">
                            Belum teregister? <a class="text-blue-600 hover:underline dark:text-blue-500">Create account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
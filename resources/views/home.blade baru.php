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

<section class="flex items-center justify-center min-h-screen bg-gray-50">
    <div class="flex items-center max-w-3xl p-5 bg-gray-100 shadow-lg rounded-2xl">
        <!-- Form -->
        <div class="px-16 md:w-1/2">
            <h2 class="font-bold text-2xl text-[#002d74]">Login</h2>
            {{-- <p class="text-sm mt-4 text-[#002d74]">
                Aplikasi Modul BMN SKIPM Merak
            </p> --}}
            <form method="post" class="flex flex-col gap-4" action="{{env('APP_URL')}}/login">
                @csrf
                <input class="p-2 mt-8 border rounded-xl" type="email" name="email" placeholder="Email" id="email" autofocus required />
                <div class="relative">
                    <input class="w-full p-2 border rounded-xl" type="password" name="password" placeholder="Password" id="password" required />
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute -translate-y-1/2 bi bi-eye top-1/2 right-3" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg>
                </div>
                <button type="submit" name="btn-login" class="bg-[#002d74] text-white rounded-xl py-2 hover:scale-105 duration-300">
                    Login
                </button>
            </form>
            <div class="grid items-center grid-cols-3 mt-10 text-gray-400">
                <hr class="border-gray-400" />
                <p class="text-sm text-center">Aplikasi Modul BMN</p>
                <hr class="border-gray-400" />
            </div>
            <p class="text-gray-400 mt-2">Aplikasi yang digunakan untuk mengelola aset atau barang yang dimiliki oleh negara.</p>
            {{-- <button class="flex justify-center w-full py-2 mt-5 text-sm duration-300 bg-white border rounded-xl hover:scale-105">
                <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                    <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                    </path>
                    <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                    </path>
                    <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                    </path>
                    <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                    </path>
                </svg>
                Login with Google
            </button> --}}
            {{-- <p class="py-4 mt-5 text-xs border-b border-gray-400">
                Forgot your password?
            </p>
            <div class="flex items-center justify-between mt-3 text-xs">
                <p>Don't have account..</p>
                <button class="px-5 py-2 duration-300 bg-white border rounded-xl hover:scale-110">
                    Register
                </button>
            </div> --}}
        </div>
        <!-- Image -->
        <div class="hidden w-1/2 md:block">
            <img class="rounded-2xl" src="{{asset('img/image.avif')}}" alt="Login Image" />
        </div>
    </div>
</section>

</body>
</html>
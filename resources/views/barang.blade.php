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
    
    <div class="p-4 ">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-4">
        <div class="relative overflow-x-auto">
            <h2 class="text-center mb-5 font-inter font-semibold text-2xl text-blue-500">{{ $bmn->br_nama }}</h2>
            <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
                <div class="aspect-[3/4] md:aspect-[4/3] bg-blue-500 rounded-xl overflow-hidden group relative hover:scale-95 transition-all duration-500">
                    <div class="w-full h-full bg-[url({{ $src }})] bg-cover bg-center absolute group-hover:scale-125 transition-all duration-500 group-hover:rotate-12"></div>
                </div>
                <div class="w-full">
                    <ul class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                            <div class="flex flex-row">
                                <div class="flex flex-col basis-1/2">
                                    <div>Kode</div>
                                    <div class="font-bold">{{ $bmn->br_kode }}</div>
                                </div>
                                <div class="flex flex-col basis-1/2">
                                    <div >No Urut Perolehan</div>
                                    <div class="font-bold">{{ $bmn->nl_nup }}</div>
                                </div>
                            </div>
                        </li>
                        <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">
                            <div class="flex flex-col">
                                <div>Merk</div>
                                <div class="font-bold">{{ $bmn->br_merk }}</div>
                            </div>
                        </li>
                        <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">
                            <div class="flex flex-row">
                                <div class="flex flex-col basis-1/2">
                                    <div>Kondisi</div>
                                    <div class="font-bold">{{ $bmn->br_kondisi }}</div>
                                </div>
                                <div class="flex flex-col basis-1/2">
                                    <div>Tanggal Perolehan</div>
                                    <div class="font-bold">{{ $bmn->tg_perolehan }}</div>
                                </div>
                            </div>
                        </li>
                        <li class="w-full px-4 py-2 rounded-b-lg">
                            <div class="flex flex-col">
                                <div>Lokasi</div>
                                <div class="font-bold">{{ $bmn->ruangan->ru_nama }}</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
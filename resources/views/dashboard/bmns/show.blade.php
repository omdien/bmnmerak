@extends('dashboard.layouts.main') @section('container')

<div class="p-4 sm:ml-64">
    <div
        class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14"
    >
        <div class="relative overflow-x-auto">
            <h2
                class="text-center mb-5 font-inter font-semibold text-2xl text-blue-500"
            >
            {{ $bmn->br_nama }}
            </h2>
            <div class="flex items-center max-w-3xl p-5 bg-gray-100 mx-auto ">
                <div class="px-16 md:w-1/2">
                    <img src="{{ $src }}" alt="">
                </div>
                <div class=" w-1/2 md:block">
                    <ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                            Kode : {{ $bmn->br_kode }}
                        </li>
                        <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">Nama Barang : {{ $bmn->br_nama }}</li>
                        <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">Nomor Urut Perolehan : {{ $bmn->nl_nup }}</li>
                        <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">Merk : {{ $bmn->br_merk }}</li>
                        <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">Kondisi : {{ $bmn->br_kondisi }}</li>
                        <li class="w-full px-4 py-2 rounded-b-lg">Tanggal Perolehan : {{ $bmn->tg_perolehan }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('dashboard.layouts.main') @section('container')

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="relative overflow-x-auto">
            <h2 class="text-center mb-5 font-inter font-semibold text-2xl text-blue-500">{{ $bmn->br_nama }}</h2>
            <!-- <div class="flex items-center max-w-3xl p-5 bg-gray-100 mx-auto sm-flex-col">
                <div class="lg:w-1/2 p-5">
                    <img src="{{ $src }}" alt="" class="rounded-xl p-1">
                </div>
                <div class="lg:w-1/2">
                    <ul class="w-80 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
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
            </div> -->
        </div>
    </div>
</div>

@endsection

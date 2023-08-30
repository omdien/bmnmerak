@extends('dashboard.layouts.main') @section('container')

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <h2 class="text-center mb-5 font-inter font-semibold text-2xl text-blue-500">
                Tambah Barang Milik Negara SKIPM Merak
            </h2>
            <div class="flex mb-5">
                <div class="flex-auto">
                    <h3 class="ms-6 font-mono">Nama UAKPB : <span class="font-bold  text-blue-500">SKIPM MERAK</span></h3>
                    <h3 class="ms-6 font-mono">Kode UAKPB : <span class="font-bold  text-blue-500">032.13.2900.649688.000.KD</span></h3>
                </div>
                <div class="flex-auto">
                    <h3 class="ms-6 font-mono">Nama Ruangan : <span class="font-bold  text-blue-500">{{ $room->ru_nama }}</span></h3>
                    <h3 class="ms-6 font-mono">Kode Ruangan : <span class="font-bold  text-blue-500">{{ $room->ru_kode }}</span></h3>
                </div>
            </div>
            <div class="mx-5">
                <form class="mt-5" action="{{env('APP_URL')}}/dashboard/bmns/{{ $room->id }}/tambah">   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" name="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pencarian berdasarkan nama barang" required>
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
                    </div>
                </form>
            </div>                
            <div class="flex">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mb-5 mt-5">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Nama Barang</th>
                        <th scope="col" class="px-6 py-3">Kode/NUP</th>
                        <th scope="col" class="px-6 py-3">Merk</th>
                        <th scope="col" class="px-6 py-3">Posisi</th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bmns as $bmn)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $bmn->br_nama }}
                        </th>
                        <td class="px-6 py-4">{{ $bmn->br_kode }}/{{ $bmn->nl_nup }}</td>
                        {{-- <td class="px-6 py-4">{{ $bmn->nl_nup }}</td> --}}
                        <td class="px-6 py-4">{{ $bmn->br_merk }}</td>
                        <td class="px-6 py-4">{{ $bmn->ruangan->ru_nama }}</td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{env('APP_URL')}}/dashboard/bmns/{{ $bmn->id }}/{{ $room->id }}">
                                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16"> <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/> </svg>
                                    <span class="sr-only">Icon description</span>
                                </button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $bmns->links() }}
    </div>
</div>

@endsection

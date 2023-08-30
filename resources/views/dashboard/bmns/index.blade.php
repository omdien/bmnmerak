@extends('dashboard.layouts.main') @section('container')

<div class="p-4 sm:ml-64">
    <div
        class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14"
    >
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <h2
                class="text-center mb-5 font-inter font-semibold text-2xl text-blue-500"
            >
                Daftar Barang Milik Negara SKIPM Merak
            </h2>
            <table
                class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mb-5"
            >
                <thead
                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                >
                    <tr>
                        <th scope="col" class="px-6 py-3">Nama Barang</th>
                        <th scope="col" class="px-6 py-3">Kode</th>
                        <th scope="col" class="px-6 py-3">NUP</th>
                        <th scope="col" class="px-6 py-3">Merk</th>
                        <th scope="col" class="px-6 py-3">Kondisi</th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bmns as $bmn)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                    >
                        <th
                            scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                        >
                            {{ $bmn->br_nama }}
                        </th>
                        <td class="px-6 py-4">{{ $bmn->br_kode }}</td>
                        <td class="px-6 py-4">{{ $bmn->nl_nup }}</td>
                        <td class="px-6 py-4">{{ $bmn->br_merk }}</td>
                        <td class="px-6 py-4">{{ $bmn->br_kondisi }}</td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{env('APP_URL')}}/dashboard/bmns/{{ $bmn->id }}"
                                ><span
                                    class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300"
                                    >Lihat</span
                                ></a
                            >
                            <a href="#"
                                ><span
                                    class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300"
                                    >Edit</span
                                ></a
                            >
                            <a href="#"
                                ><span
                                    class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300"
                                    >Hapus</span
                                ></a
                            >
                        </td>
                    </tr>
                    @endforeach
                    <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Microsoft Surface Pro
                </th>
                <td class="px-6 py-4">
                    White
                </td>
                <td class="px-6 py-4">
                    Laptop PC
                </td>
                <td class="px-6 py-4">
                    $1999
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Magic Mouse 2
                </th>
                <td class="px-6 py-4">
                    Black
                </td>
                <td class="px-6 py-4">
                    Accessories
                </td>
                <td class="px-6 py-4">
                    $99
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr> -->
                </tbody>
            </table>
            {{ $bmns->links() }}
        </div>
    </div>
</div>

@endsection

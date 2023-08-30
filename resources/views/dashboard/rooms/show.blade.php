@extends('dashboard.layouts.main')

@section('container')

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <h2 class="text-center mb-4 font-inter font-semibold text-2xl text-blue-500">Daftar Barang Ruangan</h2>
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
            <div class="ms-6 flex">
                <div class="flex-auto">
                    <a href="{{env('APP_URL')}}/dashboard/bmns/{{ $room->id }}/tambah"><span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Tambah Barang</span></a>
                    <a href="{{env('APP_URL')}}/dashboard/rooms"><span class="bg-red-100 text-red-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Kembali ke daftar ruangan</span></a>
                </div>
                {{-- <div class="flex-auto">
                    <form action="{{env('APP_URL')}}/dashboard/bmns/{{ $room->id }}/tambah">   
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
                </div> --}}
            </div>    
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mb-5 mt-5">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Barang
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kode/NUP
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Merk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kondisi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $barang)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $barang->br_nama }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $barang->br_kode }}/{{ $barang->nl_nup }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $barang->br_merk }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $barang->br_kondisi }}
                        </td>
                        <td class="px-6 py-4 text-right flex">
                            {{-- {{ $barang->id }} --}}
                            {{-- @include('modal',['some' =>$barang->id,]) --}}
                            <a href="{{env('APP_URL')}}/dashboard/bmns/{{ $barang->id }}"><button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-1 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Lihat</button></a>
                            {{-- <a href="{{env('APP_URL')}}/dashboard/bmns/{{ $barang->id }}"><span
                                    class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Lihat</span></a> --}}
                            {{-- <button onclick="location.href='{{ url('dashboard/bmns/') }}'" type="button" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-1 text-center mr-2 mb-2">Lihat</button>         --}}
                            <button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-1 text-center mr-2 mb-2 delete" data-id ="{{ $barang->id }}" ruangan-id = "{{ $room->id }}" ruangan-nama = "{{ $room->ru_nama }}">Hapus</button>
                            {{-- <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-1 text-center mr-2 mb-2">Hapus</button> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $barangs->links() }}
        </div>
    </div>
</div>

<script>
    $('.delete').click(function(){
        var barang_id = $(this).attr('data-id');
        var ruangan_id = $(this).attr('ruangan-id');
        var ruangan_nama = $(this).attr('ruangan-nama');
        swal({
            title: "Anda yakin?",
            text: "BMN akan dikeluarkan dari "+ruangan_nama+"",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/bmnmerak/dashboard/bmns/"+barang_id+"/"+ruangan_id+"/hapus"
                swal("BMN telah dikeluarkan!", {
                icon: "success",
                });
            } else {
                swal("Barang Tidak Jadi dikeluarkan!");
            }
        });
    });
</script>

@endsection
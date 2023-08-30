@extends('dashboard.layouts.main') 
@section('container')
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relativer">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2 class="text-center mb-4 font-inter font-semibold text-2xl text-blue-500">Edit Ruangan</h2>
    <form class="mt-10" method="post" action="{{env('APP_URL')}}/dashboard/rooms/{{ $room->id }}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div> 
            <label for="ru_kode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode</label>
            <input type="text" id="ru_kode" name="ru_kode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required autofocus value="{{ old('ru_kode',$room->ru_kode) }}">
        </div>
        <div> 
            <label for="ru_nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Ruangan</label>
            <input type="text" id="ru_nama" name="ru_nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{ old('ru_kode',$room->ru_nama) }}">
        </div>
        <div> 
            <label for="ru_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type Ruangan</label>
            <input type="text" id="ru_type" name="ru_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required value="{{ old('ru_type',$room->ru_type) }}">
        </div>
        <div>
            <label for="nl_nup" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NUP</label>
            <input type="number" id="nl_nup" name="nl_nup" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{ old('nl_nup',$room->nl_nup) }}">
        </div>  
        <div>
            <label for="nl_lantai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lantai</label>
            <input type="number" id="nl_lantai" name="nl_lantai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{ old('nl_lantai',$room->nl_lantai) }}">
        </div>
        <div>
            <label for="nl_luas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Luas Bangunan</label>
            <input type="number" id="nl_luas" name="nl_luas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{ old('nl_luas',$room->nl_luas) }}">
        </div>
        <div>
            <label for="nl_ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Luas Ruangan</label>
            <input type="number" id="nl_ruang" name="nl_ruang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{ old('nl_ruang',$room->nl_ruang) }}">
        </div>
        <div>
            <label for="ru_ket" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
            <input type="text" id="ru_ket" name="ru_ket" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('ru_ket',$room->ru_ket) }}" >
        </div>
        <div>
            <label for="ru_barcode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Barcode file</label>
            <input type="hidden" name="bar_lama" value="{{ $room->ru_barcode }}">
            @if($room->ru_barcode)
               <img src="{{ asset('storage/' . $room->ru_barcode) }}" class="bar-preview mb-2" width="200" height="200">
            @else
                <img class="bar-preview"> 
            @endif
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="ru_barcode" name="ru_barcode" type="file" onchange="previewImage" value="{{ $room->ru_barcode }}">
        </div>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update  Ruangan</button>
    <a href="{{env('APP_URL')}}/dashboard/rooms">
        <button class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-green-800">Batal</button>
    </a>
</form>
</div>
</div>
@endsection
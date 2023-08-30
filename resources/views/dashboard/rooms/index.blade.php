@extends('dashboard.layouts.main') @section('container')

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <h2 class="text-center font-inter font-semibold text-2xl text-blue-500 mb-5">Daftar Ruangan SKIPM Merak</h2>
            <div class="flex mb-5">
                <div class="flex-auto">
                    <h3 class="ms-6 font-mono">Nama UAKPB : <span class="font-bold  text-blue-500">SKIPM MERAK</span></h3>
                    <h3 class="ms-6 font-mono">Kode UAKPB : <span class="font-bold  text-blue-500">032.13.2900.649688.000.KD</span></h3>
                </div>
                <div class="flex-auto text-end me-6">
                    <a href="{{env('APP_URL')}}/dashboard/rooms/create"><span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Tambah ruangan</span></a>     
                </div>
            </div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mb-5">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Kode Ruangan</th>
                        <th scope="col" class="px-6 py-3">Nama Ruangan</th>
                        <th scope="col" class="px-6 py-3">Jumlah Barang</th>
                        <th scope="col" class="px-6 py-3">Luas Ruangan</th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rooms as $room)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $room->ru_kode }}
                        </th>
                        <td class="px-6 py-4">{{ $room->ru_nama }}</td>
                        <td class="px-6 py-4">{{ $room->masterbmn_count }}</td>
                        <td class="px-6 py-4">{{ $room->nl_ruang }}</td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{env('APP_URL')}}/dashboard/rooms/{{ $room->id }}"><span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Lihat</span></a>
                            <a href="{{env('APP_URL')}}/dashboard/rooms/{{ $room->id }}/edit"><span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Edit</span></a>
                            <a href="#"><span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300 delete" ruangan-id = "{{ $room->id }}" ruangan-nama = "{{ $room->ru_nama }}" ruangan-jumlah = "{{ $room->masterbmn_count }}">Hapus</span></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $('.delete').click(function(){
        var ruangan_id = $(this).attr('ruangan-id');
        var ruangan_nama = $(this).attr('ruangan-nama');
        var ruangan_jumlah = $(this).attr('ruangan-jumlah');
        if (ruangan_jumlah > 0) {
            swal(ruangan_nama+" tidak dapat di hapus", "Masih terdapat BMN dalam ruangan!", "error"); 
        }
        else {
            swal({
                title: "Anda yakin?",
                text: "akan menghapus "+ruangan_nama+"",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/bmnmerak/dashboard/rooms/"+ruangan_id+"/hapus"
                    swal("Ruangan telah dihapus!", {
                    icon: "success",
                    });
                } else {
                    swal("Ruangan tidak jadi di hapus!");
                }
            });
        };   
    });
</script>
@endsection
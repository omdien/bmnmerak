<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700;900&display=swap"
        rel="stylesheet" />
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

    <div class="container">
	<h2 class="text-center mb-2 font-inter font-semibold text-2xl text-blue-500">Daftar Barang Ruangan</h2>
    <h3 class="ms-6 font-mono">Nama Ruangan : <span class="font-bold  text-blue-500">{{ $ruang->ru_nama}}</span></h3>
    <h3 class="ms-6 font-mono mb-2">Kode Ruangan : <span class="font-bold  text-blue-500">{{ $ruang->ru_kode}}</span></h3>

	<table class="text-left w-full">
		<thead class="bg-emerald-600 flex text-white w-full">
			<tr class="flex w-full mb-4">
				<th class="p-4 w-1/4">Nama</th>
				<th class="p-4 w-1/4">Kode/NUP</th>
				<th class="p-4 w-1/4">Merk</th>
				<th class="p-4 w-1/4">Action</th>
			</tr>
		</thead>
        <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
		<tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full" style="height: 50vh;">
            @foreach ($barangs as $barang)
			<tr class="flex w-full mb-4">
				<td class="p-4 w-1/4">{{ $barang->br_nama }}</td>
				<td class="p-4 w-1/4">{{ $barang->br_kode }}/{{ $barang->nl_nup }}</td>
				<td class="p-4 w-1/4">{{ $barang->br_merk }}</td>
				<td class="p-4 w-1/4">
                    <a href="{{env('APP_URL')}}/bmn/{{ $barang->id }}"><span
                                    class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Lihat</span></a>
                </td>
			</tr>
            @endforeach
		</tbody>
	</table>
</div>
</body>

</html>
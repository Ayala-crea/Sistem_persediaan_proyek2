<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('dist/images/logo.png') }}" type="image/x-icon">
    <title>WAREHOUSE | PERGUDANGAN</title>
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}">
</head>

<body style="background-color: white">
    <div class="mx-auto p-16" style="max-width: 800px;">
        <div class="flex items-center justify-between mb-8 px-3">
            <div>
                <span class="text-2xl">Invoice </span>: 0001-2019<br />
                <div><span>Date</span>: <span id="currentDate"></span></div>
            </div>
            <div class="text-right">
                <img class="w-10" src="{{ asset('dist/images/logo.png') }}" />
            </div>
        </div>

        <div class="md:flex justify-between">
            <div class="mt-6">
                <h5 class="text-lg font-semibold">Details pesanan:</h5>

                <ul class="list-none">
                    <li class="flex mt-3">
                        <span class="w-24">Invoice No. :</span>
                        <span class="text-slate-400">land45845621</span>
                    </li>

                    <li class="flex mt-3">
                        <span class="w-24">Name :</span>
                        <span class="text-slate-400">{{ Auth::user()->name }}</span>
                    </li>

                    <li class="flex mt-3">
                        <span class="w-24">Tanggal Pengiriman :</span>
                        <span
                            class="text-slate-400">{{ \Carbon\Carbon::parse($Datainvoice->tanggal_keluar)->addDays(3)->format('d-F-Y') }}</span>
                    </li>

                </ul>
            </div>

        </div>

        <div class="border border-t-2 border-gray-200 mb-8 px-3"></div>

        <!-- Tabel untuk jumlah pemesanan barang -->
        <div class="relative overflow-x-auto shadow dark:shadow-gray-800 rounded-md mt-6">
            @foreach ($dataJoin as $index => $item)
                <table class="w-full text-left text-slate-500 dark:text-slate-400">
                    <thead class="text-sm uppercase bg-slate-50 dark:bg-slate-800">
                        <tr>
                            <th scope="col" class="px-6 py-3 w-16">
                                No.
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Items
                            </th>
                            <th scope="col" class="px-6 py-3 w-20">
                                Qty
                            </th>
                            <th scope="col" class="px-6 py-3 w-20">
                                Total($)
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white dark:bg-slate-900">
                            <td class="px-6 py-4">
                                {{ $index + 1 }}
                            </td>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ $item->nama_barang }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->jumlahBarangKeluar }}
                            </td>
                            <td class="px-6 py-4">
                                Rp{{ $item->harga_jual }}0
                            </td>
                        </tr>
                    </tbody>
                </table>
            @endforeach


        </div>

        <div class="w-56 ml-auto p-5">
            <ul class="list-none">
                <li class="text-slate-400 flex justify-between">
                    <span>Subtotal :</span>
                    <span>Rp{{ $hargaJualTerakhir }}0</span>
                </li>
                <li class="flex justify-between font-semibold mt-2">
                    <span>Total :</span>
                    <span>Rp{{ $hargaJualTerakhir }}0</span>
                </li>
            </ul>
        </div>
        <div class="shrink-0 flex items-center">
            <a href="{{ route('Home') }}">
                <button>back</button>
            </a>
        </div>

        <!-- Gambar Dana -->
        <div class="mx-auto text-center mb-8">
            <span>To be paid before</span> Februari 1st 2019 on <b class="underline font-bold">Dana : 082184952582</b>
            Atau Bisa melakukan Scan
            <img class="mx-auto" src="{{ asset('dist/images/dana.jpg') }}" alt="">
        </div>

        <div class="mb-8 text-4xl text-center px-3">
            <span>Thank you!</span>
        </div>
    </div>
    <script src="{{ asset('dist/js/invoicee.js') }}"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Barang</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Tampilkan detail barang -->
    <div class="container mx-auto p-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Detail Pemesanan</h2>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="{{ asset($barang->foto) }}" alt="{{ $barang->nama_barang }}" class="mb-4">
            <h3 class="text-xl font-semibold mb-2">{{ $barang->nama_barang }}</h3>
            <p class="text-gray-700 mb-4">{{ $barang->deskripsi_barang }}</p>
            <p class="text-green-500 font-bold">Rp{{ $barang->harga }}0</p>
            <!-- Tambahkan form pemesanan sesuai kebutuhan -->
            <form action="{{ route('proses.pemesanan') }}" method="post">
                @csrf
                <input type="hidden" name="barang_id" value="{{ $barang->id }}">
                <!-- Tambahkan input fields lainnya sesuai kebutuhan -->
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-full mt-4">Pesan Barang</button>
            </form>
        </div>
    </div>
</body>

</html>
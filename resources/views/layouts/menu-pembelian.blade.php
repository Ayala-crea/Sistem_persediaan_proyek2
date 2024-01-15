<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce | Product Listings</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    @include('layouts.navigation')

    <section class="bg-gray-100 py-8">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Produk Kami</h2>
            <!-- Daftar Produk -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($barangs as $item)
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <img src="{{ asset($item->foto) }}" alt="Produk 1" class="mb-4">
                        <h3 class="text-xl font-semibold mb-2">{{ $item->nama_barang }}</h3>
                        <p class="text-gray-700 mb-4">{{ $item->deskripsi_barang }}</p>
                        <p class="text-green-500 font-bold">Rp{{ $item->harga }}0</p>
                        <button form="submit" class="bg-blue-500 text-white px-4 py-2 rounded-full mt-4">
                            <a href="{{ route('pesan.barang', ['id' => $item->id]) }}">Pesan Barang</a>
                        </button>
                    </div>
                @endforeach
            </div>

            <br>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white p-6 mt-12">
        <div class="container mx-auto text-center text-gray-600">
            <p>&copy; Warehouse | Gudang Barang.</p>
        </div>
    </footer>

</body>

</html>

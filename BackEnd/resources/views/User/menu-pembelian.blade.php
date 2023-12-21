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
    <nav class="bg-white p-6 shadow-md">
        <div class="container mx-auto flex items-center justify-between">
            <a href="#" class="text-2xl font-semibold text-gray-800">Warehouse</a>
            <div class="flex items-center">
                <a href="#" class="mr-4 text-gray-600">Home</a>
                <a href="#" class="mr-4 text-gray-600">barang</a>
                <a href="#" class="mr-4 text-gray-600">bayar</a>
            </div>
        </div>
    </nav>

    <!-- Product Listings -->
    <!-- Bagian Daftar Produk -->
    <!-- Product Listings -->
    <!-- Bagian Daftar Produk -->
    <!-- Product Listings -->
    <!-- Bagian Daftar Produk -->
    <section class="bg-gray-100 py-8">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Produk Kami</h2>
            <!-- Daftar Produk -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Produk 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="{{ asset('dist/images/daia.jpg') }}" alt="Produk 1" class="mb-4">
                    <h3 class="text-xl font-semibold mb-2">Detergent Daia</h3>
                    <p class="text-gray-700 mb-4">Bahan Kimia</p>
                    <p class="text-green-500 font-bold">Rp.15.000.00</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-full mt-4">Beli</button>
                </div>
                <!-- Produk 2 (contoh) -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="{{ asset('dist/images/PEPSODENT.jpg') }}" alt="Produk 1" class="mb-4">
                    <h3 class="text-xl font-semibold mb-2">Pepsodent odol</h3>
                    <p class="text-gray-700 mb-4">Barang Kimia.</p>
                    <p class="text-green-500 font-bold">Rp.10.000.00</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-full mt-4">beli</button>
                </div>
                <!-- Produk 3 (contoh) -->
            </div>
            <br>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Produk 4 (contoh) -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="" alt="Produk 1" class="mb-4">
                    <h3 class="text-xl font-semibold mb-2">Nama Produk 1</h3>
                    <p class="text-gray-700 mb-4">Deskripsi singkat produk 1.</p>
                    <p class="text-green-500 font-bold">$99.99</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-full mt-4">Tambah ke Keranjang</button>
                </div> <!-- Produk 5 (contoh) -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="gambar_produk1.jpg" alt="Produk 1" class="mb-4">
                    <h3 class="text-xl font-semibold mb-2">Nama Produk 1</h3>
                    <p class="text-gray-700 mb-4">Deskripsi singkat produk 1.</p>
                    <p class="text-green-500 font-bold">$99.99</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-full mt-4">Tambah ke Keranjang</button>
                </div> <!-- Produk 6 (contoh) -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="gambar_produk1.jpg" alt="Produk 1" class="mb-4">
                    <h3 class="text-xl font-semibold mb-2">Nama Produk 1</h3>
                    <p class="text-gray-700 mb-4">Deskripsi singkat produk 1.</p>
                    <p class="text-green-500 font-bold">$99.99</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-full mt-4">Tambah ke Keranjang</button>
                </div>
            </div>
            <br>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Produk 7 (contoh) -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="gambar_produk1.jpg" alt="Produk 1" class="mb-4">
                    <h3 class="text-xl font-semibold mb-2">Nama Produk 1</h3>
                    <p class="text-gray-700 mb-4">Deskripsi singkat produk 1.</p>
                    <p class="text-green-500 font-bold">$99.99</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-full mt-4">Tambah ke Keranjang</button>
                </div> <!-- Produk 8 (contoh) -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="gambar_produk1.jpg" alt="Produk 1" class="mb-4">
                    <h3 class="text-xl font-semibold mb-2">Nama Produk 1</h3>
                    <p class="text-gray-700 mb-4">Deskripsi singkat produk 1.</p>
                    <p class="text-green-500 font-bold">$99.99</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-full mt-4">Tambah ke Keranjang</button>
                </div> <!-- Produk 9 (contoh) -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="gambar_produk1.jpg" alt="Produk 1" class="mb-4">
                    <h3 class="text-xl font-semibold mb-2">Nama Produk 1</h3>
                    <p class="text-gray-700 mb-4">Deskripsi singkat produk 1.</p>
                    <p class="text-green-500 font-bold">$99.99</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-full mt-4">Tambah ke Keranjang</button>
                </div>
            </div>
        </div>
    </section>



    <!-- Bagian Formulir Pemesanan -->
    <section class="py-8">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Pesan Sekarang</h2>
            <form>
                <!-- Kolom-kolom formulir -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="nama" class="block text-gray-700">Nama</label>
                        <input type="text" id="nama" name="nama" class="mt-1 p-2 border w-full" required>
                    </div>
                    <!-- Kolom-kolom lainnya (alamat, nomor telepon, dll.) -->
                </div>
                <!-- Tombol Submit -->
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-full mt-4">Pesan
                    Sekarang</button>
            </form>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-white p-6 mt-12">
        <div class="container mx-auto text-center text-gray-600">
            <p>&copy; 2023 E-Commerce. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>

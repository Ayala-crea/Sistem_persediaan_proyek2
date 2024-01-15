<!-- resources/views/pesanan.blade.php -->

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
            <img class="w-10" src="{{ asset($produk->foto) }}" alt="{{ $produk->nama_barang }}" class="mb-4">
            <h3 class="text-xl font-semibold mb-2">{{ $produk->nama_barang }}</h3>
            <p class="text-gray-700 mb-4">{{ $produk->deskripsi_barang }}</p>
            <p class="text-green-500 font-bold">Rp{{ $produk->harga }}0</p>

            <!-- Tambahkan form pemesanan sesuai kebutuhan -->
            <form action="{{ route('simpan.pesanan') }}" method="post">
                @csrf
                <input type="hidden" name="barangs" value="{{ $produk->id }}">
                <input type="hidden" name="harga_per_barang" value="{{ $produk->harga }}">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-full mt-4">Bayar Pesanan</button>

                <h3 class="text-xl font-semibold mb-6 mt-8">Ringkasan Pembelian</h3>

                <!-- List of Purchased Items -->
                <div class="mb-4">
                    <input type="hidden" id="nama_barang" name="nama_barang" value="{{ $produk->nama_barang }}">
                    <p class="text-gray-700">Nama Barang: {{ $produk->nama_barang }}</p>
                    <p class="text-gray-700">Jumlah: </p>
                    <input type="number" name="jumlahBarangKeluar" id="jumlah" class="border p-2 w-16 rounded-md"
                        oninput="hitungTotalHarga()">
                    <p class="text-gray-700">Harga per Barang: Rp.{{ $produk->harga }}0</p>
                    <p class="text-gray-700">Total Harga: <span id="totalHarga">Rp.0</span></p>
                </div>

                <!-- Total Amount -->
                <div class="border-t border-gray-300 pt-4">
                    <p class="text-xl font-semibold text-gray-800">Total Pembayaran: Rp.<span
                            id="totalPembayaran">{{ $produk->harga }}0</span></p>
                </div>
            </form>

            <script>
                // Fungsi untuk menghitung total harga berdasarkan jumlah
                function hitungTotalHarga() {
                    var jumlah = document.getElementById('jumlah').value;
                    var hargaPerBarang = {{ $produk->harga }};
                    var totalHarga = jumlah * hargaPerBarang;
                    document.getElementById('totalHarga').innerText = 'Rp.' + totalHarga.toFixed(2);
                    document.getElementById('totalPembayaran').innerText = totalHarga.toFixed(2);
                }
            </script>


</body>

</html>

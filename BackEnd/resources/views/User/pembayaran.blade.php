<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce | Pembayaran</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <nav class="bg-white p-6 shadow-md">
        <div class="container mx-auto flex items-center justify-between">
            <a href="#" class="text-2xl font-semibold text-gray-800">Warehouse</a>
            <div class="flex items-center">
                <a href="#" class="mr-4 text-gray-600">Home</a>
                <a href="#" class="mr-4 text-gray-600">Barang</a>
                <a href="#" class="mr-4 text-gray-600">Bayar</a>
            </div>
        </div>
    </nav>

    <!-- Payment Section -->
    <section class="container mx-auto mt-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Pembayaran</h2>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold mb-6">Ringkasan Pembelian</h3>

            <!-- List of Purchased Items -->
            <div class="mb-4">
                <p class="text-gray-700">Nama Barang: Daia Detergent</p>
                <p class="text-gray-700">Jumlah: 1</p>
                <p class="text-gray-700">Harga per Barang: Rp.15.000.00</p>
            </div>

            <!-- Total Amount -->
            <div class="border-t border-gray-300 pt-4">
                <p class="text-xl font-semibold text-gray-800">Total Pembayaran: Rp.15.000.00</p>
            </div>
        </div>

        <!-- Payment Form -->
        <form class="mt-8">
            <h3 class="text-xl font-semibold mb-4">Informasi Pembayaran</h3>

            <!-- Payment Fields (Card number, expiration date, etc.) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="cardNumber" class="block text-gray-700">Nomor Kartu</label>
                    <input type="text" id="cardNumber" name="cardNumber" class="mt-1 p-2 border w-full" required value="Dana : 082184952582">
                </div>
                <div>
                    <label for="expiryDate" class="block text-gray-700">Tanggal Kadaluarsa</label>
                    <input type="text" id="expiryDate" name="expiryDate" class="mt-1 p-2 border w-full" required value="25-April-2023">
                </div>
                <!-- Add more fields as needed (e.g., CVV, cardholder name) -->
            </div>

            <!-- Submit Button -->
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-full mt-4">Bayar Sekarang</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="bg-white p-6 mt-12">
        <div class="container mx-auto text-center text-gray-600">
            <p>&copy; 2023 Warehouse. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>

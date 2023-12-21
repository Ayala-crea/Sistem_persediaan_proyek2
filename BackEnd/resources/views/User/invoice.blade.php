<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice | Warehouse</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Invoice Header -->
    <header class="bg-white p-6 shadow-md">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-semibold text-gray-800">Invoice</h1>
        </div>
    </header>

    <!-- Billing Information -->
    <section class="container mx-auto mt-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Sender Information -->
            <div>
                <h2 class="text-xl font-semibold mb-4">From:</h2>
                <p class="text-gray-700">pt.sejahtera abadi</p>
                <p class="text-gray-700">Phone: 082188746523</p>
            </div>

            <!-- Receiver Information -->
            <div>
                <h2 class="text-xl font-semibold mb-4">To:</h2>
                <p class="text-gray-700">Ahmmad Rifki Ayala</p>
                <p class="text-gray-700">Phone: 082133562436</p>
            </div>
        </div>
    </section>

    <!-- Invoice Details -->
    <section class="container mx-auto mt-8">
        <h2 class="text-xl font-semibold mb-4">Invoice Details</h2>

        <!-- Table of Products/Services -->
        <table class="min-w-full border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 py-2 px-4">Description</th>
                    <th class="border border-gray-300 py-2 px-4">Quantity</th>
                    <th class="border border-gray-300 py-2 px-4">Unit Price</th>
                    <th class="border border-gray-300 py-2 px-4">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-300 py-2 px-4">Daia Detergent</td>
                    <td class="border border-gray-300 py-2 px-4">1</td>
                    <td class="border border-gray-300 py-2 px-4">Rp.15.000.00</td>
                    <td class="border border-gray-300 py-2 px-4">Rp.15.000.00</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>

        </table>
        <br>
        <br>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-full mt-4">home</button>


        <!-- Total Amount -->
        <div class="mt-4 text-right">
            <p class="text-xl font-semibold text-gray-800">Total: Rp.15.000.00</p>
        </div>
    </section>

    <!-- Invoice Footer -->
    <footer class="container mx-auto mt-8 text-center text-gray-600">
        <p> 2023 Warehouse.</p>
    </footer>

</body>

</html>

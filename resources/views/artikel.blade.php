<?php
// Data services (in real use case, this might come from a database or API)
$services = [

    [
        'category' => 'Premium Package',
        'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys ',
        'title' => 'Kerusakan Mobil'
    ],
    [
        'category' => 'Premium Package',
        'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys ',
        'title' => 'rute perjalanan'
    ],
    [
        'category' => 'Premium Package',
        'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys ',
        'title' => 'rute perjalanan'
    ],
];
?>
<!-- resources/views/artikel.blade.php -->
<div class="text-gray-900 py-8">
    <article class="max-w-6xl mx-auto px-4 py-8">
        <header class="text-center mb-12">
            <h1 class="text-3xl font-bold mb-4 text-black">📣 Informasi Terkini</h1>
            <p class="text-lg text-gray-900">Kami menyediakan informasi terkini seputar transportasi khususnya transportasi rute yang almasar tempuh</p>
        </header>

        <section class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($services as $item)
            <div class="flex flex-col bg-white rounded-lg border border-gray-100 p-6">
                <!-- Gambar -->
                <div class="mb-4">
                    <img src="{{ asset('img/karona.jpg') }}" alt="{{ $item['category'] }}" class="w-full h-48 object-cover rounded-md">
                </div>

                <!-- Title -->
                <h2 class="text-2xl font-semibold mb-4">{{ $item['title'] }}</h2>

                <!-- Deskripsi Harga -->
                <div class="mb-4 text-lg">
                    <span class="text-gray-900 text-sm">{{ $item['description'] }}</span>
                </div>

                <!-- Tombol Read More -->
                <a href="#" class="mt-auto inline-block bg-success text-black py-2 px-4 rounded hover:bg-white">
                    Read More
                </a>
            </div>
            @endforeach
        </section>
    </article>
</div>

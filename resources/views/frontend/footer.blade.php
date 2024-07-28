<?php
$images = [
    'jogon' => 'path/to/jogon.png',
    'nando' => 'path/to/nando.png',
    'mds' => 'path/to/logo_only.png',
    'tway' => 'path/to/poto2.jpg',
    'johan' => 'path/to/johan.png'
];
?>
    <div class="relative py-16">
        <div class="max-w-4xl mx-auto px-4 py-8">
            <div class="relative">
                <div class="flex items-center justify-center -space-x-2">
                    <!-- <img src="{{ asset('img/bus.jpg') }}" alt="member photo" class="w-20 h-15 rounded-full object-cover"> -->
                    <img src="{{ asset('img/logo1.png') }}" alt="member photo" class=" border border-black p-1 rounded-sm object-cover">
                </div>
                <div class="m-auto mt-6 space-y-6 md:w-8/12 lg:w-7/12">
                    <h1 class="text-center text-2xl font-bold text-gray-800 dark:text-white md:text-4xl">
                        Anda Mengalami Kendala ? Hubungi kami
                    </h1>
                    <p class="text-center text-gray-600 dark:text-gray-300">
                       Kami menyediakan konsultasi untuk permasalahan yang di hadapi penumpang kami
                    </p>
                    <div class="flex flex-wrap justify-center gap-6">
                        <!-- <a href="https://wa.me/6285761088663?text=Halo%20Cs%20Tway,%20saya%ingin%20konsultasi%20untuk%20pembuatan%20Website." 
                           target="_blank" rel="noopener noreferrer" 
                           class="relative flex h-12 w-full items-center justify-center px-8 before:absolute before:inset-0 before:rounded-xl before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                            <span class="relative text-base bg-blue-700 p-2 rounded-sm font-semibold text-white dark:text-black">
                                Login Sekarang
                            </span>
                        </a> -->
                        <a href="https://wa.me/6282166622870?text=Halo%20Cs%20Fernando,%20saya%ingin%20konsultasi%20untuk%20pembuatan%20Website." 
                           target="_blank" rel="noopener noreferrer" 
                           class="relative flex h-12 w-full items-center justify-center px-8 before:absolute before:inset-0 before:rounded-xl before:border before:border-transparent before:bg-primary/10 before:bg-gradient-to-b before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 dark:before:border-gray-700 dark:before:bg-gray-800 sm:w-max">
                            <span class="relative text-base font-semibold bg-primary p-2 rounded-sm text-white dark:text-white">
                                Hubungi kami Sekarang
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
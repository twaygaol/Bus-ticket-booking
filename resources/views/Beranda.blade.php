@extends('frontend.app')
@section('title', 'Beranda')
@section('styles')
  <link href="{{ asset('vendor/select2/dist/css/select2.min.css') }}" rel="stylesheet"/>
  <style>
    .select2-container--default .select2-selection--single {
      border-radius: 0.375rem;
      border-color: #d1d3e2;
    }
    
    .select2-container--default .select2-selection--single .select2-selection__rendered {
      color: #6e707e;
    }
  </style>
@endsection

@section('content')
  <div class="relative" style="margin-top: -230px;" id="home">
    <div class="container mx-auto px-4">
        <div class="relative ml-auto pt-36">
            <div class="mx-auto text-center lg:w-2/3">
                <h1 class="text-4xl font-bold text-gray-900 bg-white bg-opacity-50 p-4  rounded-xl border-spacing-1 border border-black dark:text-white md:text-2xl xl:text-6xl">
                    PT Al  <span class="text-red-400 dark:text-white">MASAR</span> <br>
                        <span style="margin-top:-10px;" class="relative text-base font-semibold text-green-800 dark:text-white">
                            ⭐⭐⭐⭐⭐ Kebanyakan orang telah menggunakan almasar
                        </span>
                </h1>
                <p class="mt-8 text-gray-700 dark:text-gray-300 bg-white bg-opacity-50 p-4 rounded-sm">
                    Transformasikan cara Anda memesan tiket bus dengan sistem informasi pemesanan tiket bus PT Al Masar. Kami menyediakan solusi digital yang canggih untuk mempermudah proses pemesanan dan meningkatkan pengalaman Anda dengan layanan yang terpercaya dan efisien.
                </p>
                <span style="margin-top:-10px;" class="relative text-base font-semibold text-green-800 dark:text-white">
                  <div class="title-icon rotate-n-15">
                    <i class="fas fa-ticket-alt text-2xl text-green-900"></i>
                  </div>
                    Cari ticket kamu disini sebelum melakukan pemesanan 
                </span>

               <!-- cari tiket -->
               <div class="mt-10 flex justify-center">
                <div class="w-full max-w-5xl">
                    <div class="bg-green-100 shadow-md rounded-lg border border-gray-200">
                        <div class="p-6">
                            <form action="{{ route('ticket.search') }}" method="POST" class="space-y-4">
                              @csrf
                                <div class="flex flex-wrap gap-4">
                                    <div class="flex flex-col flex-1 min-w-[200px]">
                                        <label for="category" class="block text-sm font-medium text-black">Category</label>
                                        <select class="select2 block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="category" name="category" required>
                                            <option value="" disabled selected>-- Pilih Category --</option>
                                            @foreach ($category as $val)
                                                <option value="{{ $val->id }}">{{ $val->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex flex-col flex-1 min-w-[200px]">
                                        <label for="start" class="block text-sm font-medium text-black">Rute Awal</label>
                                        <select class="select2 block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="start" name="start" required>
                                            <option value="" disabled selected>-- Pilih Rute Awal --</option>
                                            @foreach ($data['start'] as $val)
                                                <option value="{{ $val }}">{{ $val }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex flex-col flex-1 min-w-[200px]">
                                        <label for="end" class="block text-sm font-medium text-black">Rute Akhir</label>
                                        <select class="select2 block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="end" name="end" required>
                                            <option value="" disabled selected>-- Pilih Rute Akhir --</option>
                                            @foreach ($data['end'] as $val)
                                                <option value="{{ $val }}">{{ $val }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex flex-col flex-1 min-w-[200px]">
                                        <label for="waktu" class="block text-sm font-medium text-black">Tgl. Berangkat</label>
                                        <input type="date" class="block w-full mt-1 border p-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="waktu" name="waktu" required/>
                                    </div>
                                    <div class="flex items-end flex-1 min-w-[200px]">
                                        <button type="submit" class="w-full py-2 px-4 bg-green-500 text-white font-semibold rounded-md shadow-sm hover:bg-green-600 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                            Cari Tiket
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cari tiket end -->

                <div class="mt-16 hidden justify-between border-y border-gray-200 py-8 dark:border-gray-800 sm:flex">
                    <div class="text-left">
                        <h6 class="text-lg font-semibold text-gray-700 dark:text-white">Medan</h6>
                        <p class="mt-2 text-gray-500">Pasar 5 Padang Bulan</p>
                    </div>
                    <div class="text-left">
                        <h6 class="text-lg font-semibold text-gray-700 dark:text-white">Berastagi</h6>
                        <p class="mt-2 text-gray-500">Berastagi pajak buah</p>
                    </div>
                    <div class="text-left">
                        <h6 class="text-lg font-semibold text-gray-700 dark:text-white">KabanJahe</h6>
                        <p class="mt-2 text-gray-500">Terminal KabanJahe</p>
                    </div>
                </div>
            </div>
            <div class="mt-12 grid grid-cols-3 gap-2 sm:grid-cols-4 p-4 md:grid-cols-3">
                <div class="p-2 border border-black grayscale transition duration-200 hover:grayscale-0">
                    <img src="{{ asset('img/logo1.png') }}" class="mx-auto h-12 w-auto" loading="lazy" alt="client logo">
                  </div>
                  <div class="flex p-2 border border-black grayscale transition duration-200 hover:grayscale-0">
                      <img src="{{ asset('img/logo 3.png') }}" class="m-auto h-12 w-auto" loading="lazy" alt="client logo">
                  </div>
                <div class="p-2 border border-black grayscale transition duration-200 hover:grayscale-0">
                    <img src="{{ asset('img/logo 2.png') }}" class="mx-auto h-12 w-auto" loading="lazy" alt="client logo">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- about pt al masar -->

<div id="solution" class="bg-blue-100 shadow-sm border border-blue-900 w-full">
        
    <div class="container w-full mx-auto py-12">
        <div class="flex-row-reverse justify-between space-y-6 p-2 text-gray-600 md:flex md:gap-6 md:space-y-0 lg:items-center lg:gap-12">
            <div class="relative w-full h-full rounded-sm">
                <img src="{{ asset('img/bus.jpg') }}" alt="image" class="w-full h-full object-cover rounded-sm"/>
                <div class="absolute inset-0 bg-black opacity-50 backdrop-blur-sm"></div>
            </div>
            <div class="w-full">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white md:text-4xl">Kenali kami lebih jauh </h2>
                <p class="my-8 text-gray-600 dark:text-gray-300">PT Al MASAR adalah sebuah perusahaan transportasi yang bertempat di berastagi yang telah memiliki beberapa cabang medan dan kabanjahe.<br><br>PT ALMASAR INDONESIA kemudian membuka trayek MEDAN-PEKANBARU ,MEDAN PANGKALAN KRINCI,MEDAN -AIR MOLEK,MEDAN-KUBU DAN MEDAN-JAKARTA ,PT ALMASAR juga membuka trayek AKDP MEDAN-KABANJAHE, MEDAN- GAROGA, MEDAN-KISARAN,MEDAN -TJ BALAI, MEDAN -PK SUSU, MEDAN -BERANDAN ,MEDAN-SIDIJALANG, MEDAN-KOTACANE, MEDAN-GN MERIAH , MEDAN - SARIBUDOLOK</p>
                <div class="space-y-4 divide-y divide-gray-100 dark:divide-gray-800">
                    
                    <div class="flex gap-4 pt-4 md:items-center">
                        <div class="flex w-12 h-12 gap-4 rounded-full bg-red-100 dark:bg-teal-900/20">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="m-auto w-6 h-6 text-teal-600 dark:text-teal-400">
                                <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="w-5/6">
                            <h4 class="text-lg font-semibold text-gray-700 dark:text-teal-900">Lokasi Loket Cabang</h4>
                            <div class>
                            <p class="text-gray-900 dark:text-gray-900">Padang Bulan Pasar 5, Medan</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-4 pt-4 md:items-center">
                        <div class="flex w-12 h-12 gap-4 rounded-full bg-blue-100 dark:bg-teal-900/20">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="m-auto w-6 h-6 text-teal-600 dark:text-teal-400">
                                <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="w-5/6">
                            <h4 class="text-lg font-semibold text-gray-700 dark:text-teal-900">Lokasi Loket Cabang</h4>
                            <div class="">
                            <p class="text-gray-900 dark:text-gray-900">Berastagi, Sumatera Utara</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-4 pt-4 md:items-center">
                        <div class="flex w-12 h-12 gap-4 rounded-full bg-green-100 dark:bg-teal-900/20">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="m-auto w-6 h-6 text-teal-600 dark:text-teal-400">
                                <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="w-5/6">
                            <h4 class="text-lg font-semibold text-gray-700 dark:text-teal-300">Lokasi Loket Cabang</h4>
                            <div class="">
                            <p class="text-gray-900 dark:text-gray-900">Kaban Jahe Terminal, Sumatera Utara</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


  <!-- keunggulan pt al masar -->

  <div id="about">
  <div class="container mx-auto px-4">
    <div class="mt-12 md:w-2/3 lg:w-1/2">
      <h2 class="my-8 text-2xl font-bold text-gray-700 dark:text-white md:text-4xl">
        Keuntungan Layanan Transportasi
        <span class="text-green-700 dark:text-white font-bold"> AlMASAR</span>
      </h2>
      <p class="text-gray-600 dark:text-gray-300">
        Beberapa rute yang kami sediakan membuat banyak orang untuk menggunakan layanan transportasi almasar
        <br /> <br />
        dengan membuka beberapa cabang yang dapat menjangkau penumpang lebih dekat dengan terminal kami
      </p>
    </div>

    <div class="mt-16 grid divide-x divide-y divide-gray-100 overflow-hidden rounded-3xl border border-gray-400 text-gray-600 dark:divide-gray-700 dark:border-gray-700 sm:grid-cols-2 lg:grid-cols-4 lg:divide-y-0 xl:grid-cols-4">
      <div class="group relative bg-yellow-100 transition hover:z-[1] hover:bg-red-300 hover:shadow-2xl hover:shadow-red-600/10 dark:bg-gray-800">
        <div class="relative space-y-8 p-8 py-12 cursor-pointer">
        <i class="fas fa-ticket-alt text-yellow-400 text-4xl"></i>

          <div class="space-y-2">
            <h5 class="text-xl text-black font-bold transition dark:text-white">
              Transportasi Aman
            </h5>
            <p class="text-gray-600 dark:text-gray-300">
              kami selalu menyediakan bus bus yang siap di gunakan
            </p>
          </div>
        </div>
      </div>
      <div class="group relative cursor-pointer bg-red-100 transition hover:z-[1] hover:bg-blue-300 hover:shadow-2xl hover:shadow-gray-600/10 dark:bg-gray-800">
        <div class="relative space-y-8 p-8 py-12">
        <i class="fas fa-ticket-alt text-red-800 text-4xl"></i>

          <div class="space-y-2">
            <h5 class="group-hover:text-secondary text-xl text-black font-bold transition dark:text-white">
              Harga sesuai kantong
            </h5>
            <p class="text-gray-600 dark:text-gray-300">
              dengan fasilitas yang kami berikan, harga pun tetap kami utamakan untuk kenyamanan kantong penumpang
            </p>
          </div>
        </div>
      </div>
      <div class="group relative cursor-pointer bg-blue-100 transition hover:z-[1] hover:bg-orange-300 hover:shadow-2xl hover:shadow-gray-600/10 dark:bg-gray-800">
        <div class="relative space-y-8 p-8 py-12">
        <i class="fas fa-ticket-alt text-blue-800 text-4xl"></i>

          <div class="space-y-2">
            <h5 class="group-hover:text-secondary text-xl text-black font-bold transition dark:text-white">
              Jangkauan 
            </h5>
            <p class="text-gray-600 dark:text-gray-300">
              Loket telah banyak tersebar di area sibuk seperti perkampusan dan area sibuk kerja lainnya
            </p>
          </div>
        </div>
      </div>
      <div class="group relative cursor-pointer bg-green-100 transition hover:z-[1] hover:bg-gray-300 hover:shadow-2xl hover:shadow-gray-600/10 dark:bg-gray-900">
        <div class="relative space-y-8 p-8 py-12">
        <i class="fas fa-ticket-alt text-green-800 text-4xl"></i>

          <div class="space-y-2">
            <h5 class="group-hover:text-secondary text-xl  text-black font-bold transition dark:text-black">
              Pemesanan Ticket
            </h5>
            <p class="text-gray-600 dark:text-gray-300">
             Pemesanan tiket sangat mudah tinggal login atau register untuk yang tidak memiliki akun
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- artikel almasar -->

@include('artikel')
@endsection

@section('scripts')
<script>
  $(document).ready(function() {
    $('#ticketSearchForm').submit(function(event) {
      event.preventDefault();
      let formData = $(this).serialize();

      $.ajax({
        url: '{{ route("ticket.search") }}',
        type: 'POST',
        data: formData,
        success: function(response) {
          $('#ticketResults').empty();
          if (response.length > 0) {
            response.forEach(ticket => {
              $('#ticketResults').append('<li>' + ticket + '</li>');
            });
          } else {
            $('#ticketResults').append('<li>Tidak ada tiket yang ditemukan</li>');
          }
          $('#ticketModal').show();
        },
        error: function() {
          $('#ticketResults').empty();
          $('#ticketResults').append('<li>Terjadi kesalahan, silakan coba lagi nanti</li>');
          $('#ticketModal').show();
        }
      });
    });
  });
</script>
</script>
@endsection
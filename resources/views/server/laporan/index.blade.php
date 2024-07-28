@extends('layouts.app')
@section('title', 'Transaksi')
@section('heading', 'Transaksi')
@section('styles')
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"/>
  <style>
    thead > tr > th, tbody > tr > td {
      vertical-align: middle !important;
    }

    .card-title {
      float: left;
      font-size: 1.1rem;
      font-weight: 400;
      margin: 0;
    }

    .card-text {
      clear: both;
    }

    small {
      font-size: 80%;
      font-weight: 400;
    }

    .text-muted {
      color: #6c757d !important;
    }
  </style>
@endsection
@section('content')
  <div class="bg-white rounded-lg mb-4">
    <!-- <div class="bg-gray-100 px-4 py-3 rounded-t-lg flex justify-between items-center">
      <button
        type="button"
        class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-green-500 border border-transparent rounded-md shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
      >
        <i class="fas fa-plus"></i>
      </button>
    </div> -->
    <div class="p-4">
      <div class="overflow-x-auto">
        <table
          class="min-w-full bg-white border border-gray-200 rounded-lg"
          id="dataTable"
        >
          <thead>
            <tr class="bg-gray-100 border-b">
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode Pemesanan</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tujuan</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Penumpang</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Berangkat</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pemesanan as $data)
              <tr class="border-b">
                <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <h5 class="card-title">{!! DNS1D::getBarcodeHTML($data->kode, "C128", 2, 30) !!}</h5>
                  <p class="card-text">
                    <small class="text-muted">{{ $data->kode }}</small>
                  </p>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <h5 class="card-title">{{ $data->rute->tujuan }}</h5>
                  <p class="card-text">
                    <small class="text-muted">{{ $data->rute->start }} - {{ $data->rute->end }}</small>
                  </p>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <h5 class="card-title">{{ $data->penumpang->name }}</h5>
                  <p class="card-text">
                    <small class="text-muted">Kode Kursi : {{ $data->kursi }}</small>
                  </p>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <h5 class="card-title">{{ date('l, d F Y', strtotime($data->waktu)) }}</h5>
                  <p class="card-text">
                    <small class="text-muted">{{ date('H:i', strtotime($data->waktu)) }} WIB</small>
                  </p>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <a
                    href="{{ route('transaksi.show', $data->kode) }}"
                    class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-blue-500 border border-transparent rounded-full shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                  >
                    <i class="fas fa-search-plus"></i>
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
@section('script')
  <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
  </script>
@endsection

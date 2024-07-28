@extends('frontend.app')
@section('title', 'Cari tiket')
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
  <div class="flex justify-center my-6">
    <div class="w-full max-w-lg">
      <div class="bg-white shadow-md rounded-lg border border-gray-200">
        <div class="p-6">
          <form method="POST" action="{{ route('store') }}" class="space-y-4">
            @csrf
            <div>
              <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
              <select
                class="select2 block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                id="category"
                name="category"
                required
              >
                <option value="" disabled selected>-- Pilih Category --</option>
                @foreach ($category as $val)
                  <option value="{{ $val->id }}">{{ $val->name }}</option>
                @endforeach
              </select>
            </div>
            <div>
              <label for="start" class="block text-sm font-medium text-gray-700">Rute Awal</label>
              <select
                class="select2 block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                id="start"
                name="start"
                required
              >
                <option value="" disabled selected>-- Pilih Rute Awal --</option>
                @foreach ($data['start'] as $val)
                  <option value="{{ $val }}">{{ $val }}</option>
                @endforeach
              </select>
            </div>
            <div>
              <label for="end" class="block text-sm font-medium text-gray-700">Rute Akhir</label>
              <select
                class="select2 block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                id="end"
                name="end"
                required
              >
                <option value="" disabled selected>-- Pilih Rute Akhir --</option>
                @foreach ($data['end'] as $val)
                  <option value="{{ $val }}">{{ $val }}</option>
                @endforeach
              </select>
            </div>
            <div>
              <label for="waktu" class="block text-sm font-medium text-gray-700">Waktu Berangkat</label>
              <input
                type="date"
                class="block w-full mt-1 border p-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                id="waktu"
                name="waktu"
                required
              />
            </div>
            <button type="submit" class="w-full py-2 px-4 bg-green-500 text-white font-semibold rounded-md shadow-sm hover:bg-white-600 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
              Cari Tiket
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
  <script src="{{ asset('vendor/select2/dist/js/select2.full.min.js') }}"></script>
  <script>
    if(jQuery().select2) {
      $(".select2").select2();
    }
  </script>
@endsection

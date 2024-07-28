@extends('layouts.app')

@section('title', 'Edit Rute')
@section('heading', 'Edit Rute')

@section('styles')
<link href="{{ asset('vendor/select2/dist/css/select2.min.css') }}" rel="stylesheet"/>
@endsection

@section('content')
<div class="bg-white shadow-md rounded-lg p-6 mb-4">
  <form action="{{ route('rute.store') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $rute->id }}">

    <div class="mb-4">
      <label for="tujuan" class="block text-sm font-medium text-gray-700 mb-1">Tujuan</label>
      <input type="text" class="form-input w-full px-3 py-2 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" id="tujuan" name="tujuan" value="{{ $rute->tujuan }}" required>
    </div>

    <div class="grid grid-cols-2 gap-4 mb-4">
      <div>
        <label for="start" class="block text-sm font-medium text-gray-700 mb-1">Rute Awal</label>
        <input type="text" class="form-input w-full px-3 py-2 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" id="start" name="start" value="{{ $rute->start }}" required>
      </div>

      <div>
        <label for="end" class="block text-sm font-medium text-gray-700 mb-1">Rute Akhir</label>
        <input type="text" class="form-input w-full px-3 py-2 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" id="end" name="end" value="{{ $rute->end }}" required>
      </div>
    </div>

    <div class="grid grid-cols-2 gap-4 mb-4">
      <div>
        <label for="harga" class="block text-sm font-medium text-gray-700 mb-1">Harga</label>
        <input type="text" class="form-input w-full px-3 py-2 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" id="harga" name="harga" onkeypress="return inputNumber(event)" value="{{ $rute->harga }}" required>
      </div>

      <div>
        <label for="jam" class="block text-sm font-medium text-gray-700 mb-1">Jam Berangkat</label>
        <input type="time" class="form-input w-full px-3 py-2 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" id="jam" name="jam" value="{{ $rute->jam }}" required>
      </div>
    </div>

    <div class="mb-4">
      <label for="transportasi_id" class="block text-sm font-medium text-gray-700 mb-1">Transportasi</label>
      <select class="select2 form-select w-full px-3 py-2 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" id="transportasi_id" name="transportasi_id" required>
        <option value="" disabled>-- Pilih Transportasi --</option>
        @foreach ($transportasi as $data)
          <option value="{{ $data->id }}" @if ($data->id == $rute->transportasi_id) selected @endif>{{ $data->kode }} - {{ $data->name }}</option>
        @endforeach
      </select>
    </div>

    <div class="flex justify-end">
      <a href="{{ route('rute.index') }}" class="inline-block bg-yellow-500 text-white px-4 py-2 rounded-md mr-2 hover:bg-yellow-600 transition duration-300">Kembali</a>
      <button type="submit" class="inline-block bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition duration-300">Simpan</button>
    </div>
  </form>
</div>
@endsection

@section('script')
<script src="{{ asset('vendor/select2/dist/js/select2.full.min.js') }}"></script>
<script>
  $(document).ready(function() {
    if(jQuery().select2) {
      $(".select2").select2();
    }
  });

  function inputNumber(e) {
    const charCode = (e.which) ? e.which : e.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
      return false;
    }
    return true;
  };
</script>
@endsection

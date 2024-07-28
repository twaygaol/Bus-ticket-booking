@extends('layouts.app')

@section('title', 'Transportasi')
@section('heading', 'Transportasi')

@section('styles')
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('vendor/select2/dist/css/select2.min.css') }}" rel="stylesheet"/>
@endsection

@section('content')
<div class="container mx-auto py-6">
  <div class="bg-white rounded-lg">
    <div class="flex justify-between items-center px-6 py-4 border-b">
      <button
        type="button"
        class="inline-flex items-center bg-green-500 text-black rounded-md px-4 py-2 hover:bg-primary-600 transition duration-300"
        data-toggle="modal"
        data-target="#add-modal"
      >
        <i class="fas fa-plus mr-2"></i> Tambah
      </button>
    </div>

    <div class="p-4">
      <div class="overflow-x-auto">
        <table id="transportasi-table" class="table-auto min-w-full bg-white border-gray-200">
          <thead class="bg-gray-500 text-gray-700">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">No</th>
              <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Kode</th>
              <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Nama</th>
              <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Jumlah Kursi</th>
              <th class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">Aksi</th>
            </tr>
          </thead>
          <tbody class="text-gray-700">
            @foreach ($transportasi as $data)
            <tr class="border-b border-gray-200 hover:bg-gray-50">
              <td class="px-6 py-4">{{ $loop->iteration }}</td>
              <td class="px-6 py-4">{{ $data->kode }}</td>
              <td class="px-6 py-4">
                <div class="font-semibold">{{ $data->name }}</div>
                <div class="text-xs text-gray-500">{{ $data->category->name }}</div>
              </td>
              <td class="px-6 py-4">{{ $data->jumlah }} Kursi</td>
              <td class="px-6 py-4 text-center">
                <form action="{{ route('transportasi.destroy', $data->id) }}" method="POST">
                  @csrf
                  @method('delete')
                  <a href="{{ route('transportasi.edit', $data->id) }}" class="text-yellow-500 hover:text-yellow-700 mr-2"><i class="fas fa-edit"></i></a>
                  <button type="submit" class="text-red-500 hover:text-red-700"><i class="fas fa-trash"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Add Modal -->
<div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-gray-200 px-6 py-4">
        <h5 class="modal-title text-lg font-semibold text-gray-800" id="exampleModalLabel">Tambah Transportasi</h5>
        <button type="button" class="close text-gray-700" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('transportasi.store') }}" method="POST">
        @csrf
        <div class="modal-body px-6 py-4">
          <input type="hidden" name="id">
          <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" class="form-input w-full rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" id="name" name="name" placeholder="Nama Transportasi" required>
          </div>
          <div class="mb-4">
            <label for="kode" class="block text-sm font-medium text-gray-700">Kode</label>
            <input type="text" class="form-input w-full rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" id="kode" name="kode" placeholder="Kode Transportasi" required>
          </div>
          <div class="mb-4">
            <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah Kursi</label>
            <input type="text" class="form-input w-full rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" id="jumlah" name="jumlah" onkeypress="return inputNumber(event)" placeholder="Jumlah Kursi" required>
          </div>
          <div class="mb-4">
            <label for="category_id" class="block text-sm font-medium text-gray-700">Kategori</label>
            <select class="select2 form-select w-full rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" id="category_id" name="category_id" required>
              <option value="" disabled selected>-- Pilih Kategori --</option>
              @foreach ($category as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="modal-footer bg-gray-100 px-6 py-4">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('script')
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/select2/dist/js/select2.full.min.js') }}"></script>
<script>
  $(document).ready(function() {
    $('#transportasi-table').DataTable({
      "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
    });

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

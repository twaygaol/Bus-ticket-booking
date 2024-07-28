@extends('layouts.app')

@section('title', 'Artikel')
@section('heading', 'Seputar transportasi')

@section('styles')
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('vendor/select2/dist/css/select2.min.css') }}" rel="stylesheet"/>
@endsection

@section('content')
<div class="py-4 -mt-8">
  <div class="overflow-hidden border-b border-gray-200 sm:rounded-lg">
    <div class="p-6 bg-white">
      <button
        type="button"
        class="inline-flex items-center px-4 py-2 text-sm font-medium text-black bg-green-500 border border-transparent rounded-md shadow-sm hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500"
        data-toggle="modal"
        data-target="#add-modal"
      >
        <i class="fas fa-plus mr-2"></i> Tambah artikel
      </button>
    </div>
    <div class="overflow-x-auto">
      <table id="rute-table" class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-200">
          <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">No</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Title</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Gambar</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Aksi</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          @foreach ($artikel as $data)
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <!-- <div class="flex-shrink-0 h-10 w-10">
                  <img class="h-10 w-10 rounded-full" src="{{ asset('images/transportasi.png') }}" alt="">
                </div> -->
                <div class="ml-4">
                  <div class="text-sm font-medium text-gray-900">{{ $data->transportasi->name }}</div>
                  <div class="text-xs text-gray-500">{{ $data->transportasi->category->name }}</div>
                </div>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
              <div class="flex items-center space-x-2">
                <a href="{{ route('rute.edit', $data->id) }}" class="text-indigo-600 hover:text-indigo-900">
                  <i class="fas fa-show"></i>
                </a>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Add Modal -->
<div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-gray-200">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Seputar Transportasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('rute.store') }}" method="POST">
        @csrf
        <div class="modal-body">
          <input type="hidden" name="id">
          <div class="mb-4">
            <label for="tujuan" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" class="form-input mt-1 block w-full" id="tujuan" name="tujuan" placeholder="Tujuan" required>
          </div>
          <div class="mb-4">
            <label for="start" class="block text-sm font-medium text-gray-700">Gambar</label>
            <input type="file" class="form-input mt-1 block w-full" id="start" name="start" placeholder="Rute Awal" required>
          </div>
          <div class="mb-4">
            <label for="end" class="block text-sm font-medium text-gray-700">Description</label>
            <input type="text" class="form-input mt-1 block w-full" id="end" name="end" placeholder="Rute Akhir" required>
          </div>
        </div>
        <div class="modal-footer bg-gray-200">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary">Tambah Artikel</button>
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

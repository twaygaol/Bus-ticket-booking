@extends('layouts.app')

@section('title', 'Category')
@section('heading', 'Category')

@section('styles')
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"/>
@endsection

@section('content')
  <div class="container mx-auto py-6">
    <div class="bg-white rounded-lg">
      <div class="flex justify-between items-center px-6 py-4 border-b">
        <button
          type="button"
          class="inline-flex items-center bg-green-500 text-black rounded-md px-4 py-2 hover:bg-primary-600 transition duration-300"
          data-toggle="modal"
          data-target="#modal"
        >
          <i class="fas fa-plus mr-2"></i> Tambah
        </button>
      </div>

      <div class="p-4">
        <div class="overflow-x-auto">
          <table id="dataTable" class="table-auto min-w-full bg-white border-gray-200">
            <thead class="bg-gray-500 text-gray-700">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">No</th>
                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Name</th>
                <th class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">Action</th>
              </tr>
            </thead>
            <tbody class="text-gray-700">
              @foreach ($category as $data)
                <tr class="border-b border-gray-200 hover:bg-gray-50">
                  <td class="px-6 py-4">{{ $loop->iteration }}</td>
                  <td class="px-6 py-4">{{ $data->name }}</td>
                  <td class="px-6 py-4 text-center">
                    <form action="{{ route('category.destroy', $data->id) }}" method="POST">
                      @csrf
                      @method('delete')
                      <a href="javascript:void(0)" class="text-yellow-500 hover:text-yellow-700 mr-2 btn-edit" data-id="{{ $data->id }}" data-name="{{ $data->name }}"><i class="fas fa-edit"></i></a>
                      <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Yakin?');"><i class="fas fa-trash"></i></button>
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
  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-gray-200 px-6 py-4">
          <h5 class="modal-title text-lg font-semibold text-gray-800" id="exampleModalLabel">Tambah Category</h5>
          <button type="button" class="close text-gray-700" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('category.store') }}" method="POST">
          @csrf
          <div class="modal-body px-6 py-4">
            <input type="hidden" name="id" id="id">
            <div class="mb-4">
              <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
              <input type="text" class="form-input w-full p-2 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" id="name" name="name" placeholder="Name Category" required>
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
  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable();

      $(".btn-add").click(function(){
        $("#modal").modal("show");
        $(".modal-title").html("Tambah Category");
        $("#id").val("");
        $("#name").val("");
      });

      $("#dataTable").on("click", ".btn-edit", function () {
        let id = $(this).data("id");
        let name = $(this).data("name");
        $("#modal").modal("show");
        $(".modal-title").html("Edit Category");
        $("#id").val(id);
        $("#name").val(name);
      });

      $('[data-dismiss="modal"]').click(function(){
        $("#modal").hide();
      });
    });
  </script>
@endsection

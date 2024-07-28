@extends('layouts.app')
@if (Auth::user()->level == "Admin")
  @section('title', 'Verifikasi Pembayaran')
  @section('heading', 'Verifikasi Pembayaran')
@elseif (Auth::user()->level == "Petugas")
  @section('title', 'Petugas')
@endif
@section('content')
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="card shadow">
        <div class="card-body">
          <form method="POST" action="{{ route('petugas.kode') }}">
          @csrf
            <div class="row">
              <div class="col">
                <div class="form-group" style="margin-bottom: 0">
                  <input
                    type="text"
                    class="form-control"
                    id="kode"
                    name="kode"
                    placeholder="Kode Pemesanan"
                    required
                  />
                </div>
              </div>
              <div class="col-auto">
                <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-black bg-green-500 border border-transparent rounded-md shadow-sm hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500"
                style="font-size: 16px">
                  Cari
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

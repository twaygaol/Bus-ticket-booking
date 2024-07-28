@extends('layouts.app')
@section('title', 'Dashboard')
@section('heading', 'Dashboard')
@section('content')
  <div class="row">
    @foreach ($cards as $card)
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-{{ $card['color'] }} shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xl font-weight-bold text-{{ $card['color'] }} text-uppercase mb-1">{{ $card['title'] }}</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $card['value'] }}</div>
              </div>
              <div class="col-auto">
                <i class="fas {{ $card['icon'] }} fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection

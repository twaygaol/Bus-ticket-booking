@extends('layouts.app')
@section('title', 'Login')
@section('content')
  <div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md">
      <div class="bg-white shadow-md rounded-lg px-8 py-6 mb-4">
        <div class="text-center mb-6">
          <h1 class="text-2xl font-bold text-gray-900">Selamat Datang!</h1>
        </div>
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="mb-4">
            <label for="username" class="block text-gray-700 w-28">Username</label>
            <input type="text" class="mt-1 w-full px-4 py-2 border rounded-lg @error('username') border-red-500 @enderror" name="username" required autocomplete="off" placeholder="Username">
            @error('username')
              <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-4">
            <label for="password" class="block text-gray-700 w-28">Password</label>
            <input type="password" class="mt-1 w-full px-4 py-2 border rounded-lg @error('password') border-red-500 @enderror" name="password" required placeholder="Password">
            @error('password')
              <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-4 flex items-center">
            <input type="checkbox" class="mr-2 leading-tight" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember" class="text-sm text-gray-700">{{ __('Remember Me') }}</label>
          </div>
          <div class="mb-4">
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-200">
              {{ __('Login') }}
            </button>
          </div>
        </form>
        <hr class="my-4">
        <div class="text-center">
          <a class="text-sm text-blue-500 hover:underline" href="{{ route('register') }}">Buat Akun!</a>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
  <script>
    document.body.classList.add("bg-gray-100");
  </script>
@endsection

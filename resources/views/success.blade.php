@extends('includes.nav')
@section('content')
  <main class="container mt-4 m-auto">
    <div class="container">
        <div class="mt-4 p-5 bg-success text-white rounded">
            <h1 class="text-center">Éxito</h1>
            @if(session('success'))
                <p class="text-center">{{ session('success') }}</p>
            @endif
          </div>
    </div>
  </main>
@endsection

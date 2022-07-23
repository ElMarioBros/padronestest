@extends('includes.nav')
@section('content')
  <main class="container m-4 m-auto">
    <h2 class="text-center m-3">Registro</h2>
    <form action="{{ route('store-union') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="n_id" class="form-label fw-semibold">Número de identificación</label>
        <input type="text" class="form-control" id="n_id" name="n_id">
      </div>
      <div class="mb-3">
        <label for="name" class="form-label fw-semibold">Nombre</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="mb-3">
        <label for="sindicato" class="form-label fw-semibold">Sindicato</label>
        <input type="text" class="form-control" id="sindicato" name="sindicato">
      </div>
      <div class="mb-3">
        <label for="federacion" class="form-label fw-semibold">Federación</label>
        <input type="text" class="form-control" id="federacion" name="federacion">
      </div>
      <div class="mb-3">
        <label for="confederacion" class="form-label fw-semibold">Confederación</label>
        <input type="text" class="form-control" id="confederacion" name="confederacion">
      </div>
      <div class="mb-3">
        <label for="empleo" class="form-label fw-semibold">Empleo</label>
        <input type="text" class="form-control" id="empleo" name="empleo">
      </div>
      <div class="mb-3">
        <label for="n_contacto" class="form-label fw-semibold">Número de telefono de contacto</label>
        <input type="text" class="form-control" id="n_contacto" name="n_contacto">
      </div>
      <div class="mb-3">
        <label for="supervisor" class="form-label fw-semibold">Supervisor</label>
        <input type="text" class="form-control" id="supervisor" name="supervisor">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label fw-semibold">Correo Electrónico</label>
        <input type="text" class="form-control" id="email" name="email">
      </div>
      <div class="mb-3">
        <label for="curp" class="form-label fw-semibold">CURP</label>
        <input type="text" class="form-control" id="curp" name="curp">
      </div>
      <div class="mb-3">
        <label for="rfc" class="form-label fw-semibold">RFC</label>
        <input type="text" class="form-control" id="rfc" name="rfc">
      </div>
      <div class="mb-3">
        <label for="beneficiarios" class="form-label fw-semibold">Beneficiarios</label>
        <textarea name="beneficiarios" class="form-control" id="beneficiarios" name="beneficiarios"></textarea>
      </div>


      <button type="submit" class="btn btn-primary my-4">Enviar</button>
    </form>
  </main>
@endsection

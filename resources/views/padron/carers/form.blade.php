@extends('includes.nav')

@section('content')
<main class="container m-4 m-auto">
    <h2 class="text-center m-3">Registro</h2>
    <form action="{{ route('store-carer') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label fw-semibold">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" required>
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
          <label for="email" class="form-label fw-semibold">Correo Electrónico</label>
          <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="n_contacto" class="form-label fw-semibold">Número de telefono de contacto</label>
            <input type="text" class="form-control" id="n_contacto" name="n_contacto">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label fw-semibold">Dirección</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="mb-3">
            <label for="tipo_sangre">Tipo de sangre:</label>
            <select class="form-control" name="tipo_sangre" id="tipo_sangre" required>
              <option value="" disabled selected>Seleccione su tipo de sangre...</option>
              <option value="o-">O-</option>
              <option value="o+">O+</option>
              <option value="a-">A-</option>
              <option value="a+">A+</option>
              <option value="b-">B-</option>
              <option value="b+">B+</option>
              <option value="ab-">AB-</option>
              <option value="ab+">AB+</option>
            </select> 
        </div>
        <div class="mb-3">
            <label for="carer_type">Cuidador de:</label>
            <select class="form-control" name="carer_type" id="carer_type" required>
              <option value="" disabled selected>Usted es cuidador de...</option>
              <option value="pacientes">Pacientes</option>
              <option value="ninos">Niños</option>
              <option value="mascotas">Mascotas</option>
              <option value="adultos mayoes">Adultos Mayores</option>
              <option value="casa o edificio">Casa o Edificio</option>
              <option value="automovil">Automóvil</option>
              <option value="traslado">Traslado</option>
              <option value="otro">Otro</option>
            </select> 
        </div>
        <div class="mb-3">
            <label for="work_experience" class="form-label fw-semibold">Experiencia Laboral</label>
            <textarea class="form-control" id="work_experience" name="work_experience"></textarea>
        </div>


      <button type="submit" class="btn btn-primary my-4">Enviar</button>
    </form>
  </main>
@endsection
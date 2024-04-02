<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap Linki -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Editar Departamento</title>
</head>
<body>
    @include('navbar')
  <div class="container-fluid bg-dark text-light py-5">
    <div class="container">
      <h1 class="display-5 fw-bold">Editar Departamento</h1>
    </div>
  </div>
    <div class="container">
      <div class="card">
          <div class="card-header">
              <span class="text-primary">Datos del departamento</span>
          </div>
          <div class="card-body">
              <form method="POST" class="form-horizontal" action="{{ route('departamentos.store') }}">
                  @csrf
                  <div class="form-group">
                      <label class="control-label col-sm-2" for="id">Código Departamento:</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="id" name="id" placeholder="Ingrese código del departamento"
                          disabled value="{{ $departamento -> depa_codi }}">
                          <small id="idlHelp" class="form-text text-muted">ID del departamento</small>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-sm-2" for="name">Nombre Departamento:</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese nombre de la comuna"
                          value="{{ $departamento-> depa_nomb }}">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-sm-2" for="municipality">Municipio:</label>
                      <div class="col-sm-10">
                          <select class="form-select" id="municipality" name="code" required>
                              <option selected disabled value="">Seleccione una...</option>
                              @foreach ($paises as $pais)
                              @if ($pais -> pais_codi == $departamento -> pais_codi)
                                  <option selected value="{{ $pais -> pais_codi}}">{{ $pais -> pais_nomb }}</option>
                              @else
                                  <option value="{{ $pais -> pais_codi }}">{{ $pais -> pais_nomb }}</option>
                              @endif
                          @endforeach
                          </select>
                      </div>
                  </div>
                  <div class="form-group mt-2">
                      <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Guardar</button>
                          <a class="btn btn-secondary" href="{{ route('departamentos.index') }}" role="button">Cancelar</a>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
  @include('footer')
</body>
</html>

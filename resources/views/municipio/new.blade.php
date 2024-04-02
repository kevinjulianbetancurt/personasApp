<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap Linki -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Nuevo Municipio</title>
</head>
<body>
  @include('navbar')
  <div class="p-5 mb-4 text-bg-dark container-fluid">
    <div class="container">
      <h1 class="display-5 fw-bold">Agregar Municipio</h1>
    </div>
  </div>
    <div class="container">
      <div class="card">
          <div class="card-header">
              <span class="text-primary">Datos del municipio</span>
          </div>
          <div class="card-body">
              <form method="POST" action="{{ route('municipios.store') }}">
                  @csrf
                  <div class="form-group">
                      <label class="control-label col-sm-2" for="id">Código Municipio:</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="id" name="id" placeholder="Ingrese código del municipio">
                          <div id="idlHelp" class="form-text">ID del municipio</div>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-sm-2" for="name">Nombre Municipio:</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese nombre del municipio">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-sm-2" for="department">Departamento:</label>
                      <div class="col-sm-10">
                          <select class="form-select" id="department" name="code" required>
                              <option selected disabled value="">Seleccione una...</option>
                              @foreach ($departamentos as $departamento)
                                  <option value="{{ $departamento->depa_codi }}">{{ $departamento->depa_nomb }}</option>
                              @endforeach
                          </select>
                      </div>
                  </div>
                  <div class="form-group mt-3">
                      <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Guardar</button>
                          <a href="{{ route('municipios.index') }}" class="btn btn-secondary">Cancelar</a>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
  @include('footer')
</body>
</html>
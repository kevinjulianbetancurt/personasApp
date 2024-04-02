<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap Linki -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Nueva Departamento</title>
</head>
<body>
  @include('navbar')
  <div class="p-5 mb-4 text-bg-dark container-fluid">
    <div class="container">
      <h1 class="display-5 fw-bold">Agregar Departamento</h1>
    </div>
  </div>
    <div class="container">
      <div class="card">
        <div class="card-header">
          <span class="text-primary">Datos de departamento</span>
        </div>
        <div class="card-body">
          <form class="form-horizontal" role="form" action="{{ route('departamentos.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label class="control-label col-sm-2" for="id">Código Departamento:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="id" name="id" placeholder="Ingrese código del departamento">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="name">Nombre Departamento:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese nombre del departamento">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="country">País:</label>
              <div class="col-sm-10">
                <select class="form-select" id="country" name="code" required>
                  <option selected disabled value="">Seleccione una...</option>
                  @foreach ($paises as $pais)
                    <option value="{{ $pais->pais_codi }}">{{ $pais->pais_nomb }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group mt-2">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{ route('departamentos.index') }}" role="button">Cancelar</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    @include('footer')
</body>
</html>
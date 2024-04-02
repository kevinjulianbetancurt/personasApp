<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bostrap --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Municipios</title>

</head>
<body>
  @include('navbar')

    <div class="container">
        <h1>Listado de Municipios</h1>
        <a href="{{ route('municipios.create') }}" class="btn btn-success">Add Municipality</a>
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">Code</th>
                <th scope="col">Municipality</th>
                <th scope="col">Department</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($municipios as $municipio)
              <tr>
                <th scope="row">{{ $municipio -> muni_codi }}</th>
                <td> {{$municipio -> muni_nomb}} </td>
                <td> {{$municipio -> depa_nomb}} </td>
                <td>
                    <a href=" {{route('municipios.edit', ['municipio'=>$municipio->muni_codi]) }} "
                        class="btn btn-info"> Editar </a></li>

                      <form action="{{ route('municipios.destroy', ['municipio' => $municipio->muni_codi]) }}"
                        method="POST" style="display: inline-block">
                        @method('delete')
                        @csrf
                        <input class="btn btn-danger" type="submit" value="Eliminar">
                      </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

    </div>
    @include('footer')   
</body>
</html>
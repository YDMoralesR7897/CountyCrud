<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


        
    </head>
    <body>
    <div class = "container">
        <div class="row">
            <div class="col-sm-25 mx-auto"">
                <div class="card border-0 shadow">
                    <div class="card-body">
                            @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                - {{$error}} <br>
                                @endforeach
                            </div>
                            @endif
                        <form action="{{ route ('paises.store')}}" method="POST">
                            <div class="form-row">
                            <div class="col-sm-2">
                                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ old('nombre') }}">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="capital" class="form-control" placeholder="Capital" value="{{ old('capital') }}">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="number" name="codigo" class="form-control" placeholder="Codigo" value="{{ old('codigo') }}">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="number" name="cantidadhabitantes" class="form-control" placeholder="numero Habitantes" value="{{ old('cantidadhabitantes') }}">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="number" name="area" class="form-control" placeholder="Area" value="{{ old('area') }}">
                                        </div>
                                <!--<div class="col-sm-3">
                                    <input type="text" name="nombre" class="form-control" placeholder="Nombre Pais">
                                <div>
                                <div class="col-sm-3">
                                    <input type="text" name="capital" class="form-control" placeholder="Capital">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="codigo" class="form-control" placeholder="codigo">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="cantidadhabitantes" class="form-control" placeholder="Numero de Habitantes">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="area" class="form-control" placeholder="Area">
                                </div>-->
                                <div class="col-auto">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Capital</th>
                            <th>Codigo</th>
                            <th>Cantidad de habitantes</th>
                            <th>Area</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($paises as $pais)
                        <tr>
                            <td>{{$pais->id}}</td>
                            <td>{{$pais->nombre }}</td>
                            <td>{{$pais->capital }}</td>
                            <td>{{$pais->codigo }}</td>
                            <td>{{$pais->cantidadhabitantes }}</td>
                            <td>{{$pais->area }}</td>
                            <td>
                                <form action="{{ route ('paises.destroy', $pais)}}" method="POST" >
                                    @method('DELETE')
                                    @csrf
                                    <input 
                                    type="submit" 
                                    value="Eliminar" 
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('¿Desea Eliminar?')">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
       
    </body>
</html>
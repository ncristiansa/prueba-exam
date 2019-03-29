<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<h2>Artistas</h2>
<h4>Listado de artistas</h4>

@foreach($artista as $artist)
    <a href="modificarArtista/{{$artist->id}}"><p>{{$artist->Nombre}} {{$artist->Apellido}} {{$artist->Edad}} {{$artist->Sexo}}</p></a>
@endforeach
<button onclick="location.href = '{{ url('nuevoArtista')}}'">Nuevo Artista</button>
<h2>Modificar usuario</h2>
@foreach($artista as $artist)
    <form method="POST" action="/modificarArtista/{{$artist->id}}" accept-charset="UTF-8">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="{{$artist->Nombre}}"><br>
    <label>Apellido:</label><br>
    <input type="text" name="nombre" value="{{$artist->Apellido}}"><br>
    <label>Edad:</label><br>
    <input type="text" name="nombre" value="{{$artist->Edad}}"><br>
    <label>Sexo:</label><br>
    <input type="text" name="nombre" value="{{$artist->Sexo}}"><br>
    <input type="submit" value="enviar" name="enviar">
    </form>
@endforeach
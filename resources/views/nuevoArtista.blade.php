<h2>Formulario</h2>
<h4>Nuevo Artista</h4>
<form method="POST" action="/">
    {{ csrf_field() }}
    <label>Nombre</label><br>
    <input type="text" name="nombre"><br>
    <label>Apellido</label><br>
    <input type="text" name="apellido"><br>
    <label>Edad</label><br>
    <input type="number" name="edad"><br>
    <label>Sexo</label><br>
    <input type="text" name="sexo"><br>
    <input type="submit" name="enviar" value="agregar"><br>
</form>
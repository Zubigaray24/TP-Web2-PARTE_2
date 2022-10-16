<h1><a href="{BASE_URL}home">HOME</a></h1>

<h2>Editar juego</h2>

<form action="{BASE_URL}editarGenero" method="POST">
    
    <label>Nombre</label>
    <input type="text" name="editnombregenero">

    <input type="hidden" name="idgenero" value="{$id}">

    <button type="submit">Editar genero</button>
    
</form>
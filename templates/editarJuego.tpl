<h1><a href="{BASE_URL}home">HOME</a></h1>

<h2>Editar juego</h2>

<form action="{BASE_URL}editarJuego" method="POST">


    <label>Nombre</label>
    <input type="text" name="editnombre">

    <label>Fecha de lanzamiento</label>
    <input type="date" name="editfechalanzamiento">

    <label>Desarrollador</label>
    <input type="text" name="editdesarrollador">

    <label>Precio</label>
    <input type="number" name="editprecio">

    <label>Descripcion</label>
    <input type="text" name="editdescripcion">

    <label>Genero</label>
    <select name="editidgenero">
        {foreach from= $generos item= $genero}
            <option value={$genero->id_genero}>
                {$genero->nombregenero}
            </option>
        {/foreach}
    </select>

    <input type="hidden" name="idjuego" value="{$id}">

    <button type="submit">Editar juego</button>

</form>
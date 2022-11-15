<h1><a href="{BASE_URL}home">HOME</a></h1>

<h2>Editar juego</h2>

    <form action="{BASE_URL}editarJuego" method="POST">

        <label>Nombre</label>
        <input type="text" name="editnombre" value="{$juego->nombre}">

        <label>Fecha de lanzamiento</label>
        <input type="date" name="editfechalanzamiento" value="{$juego->fechalanzamiento}">

        <label>Desarrollador</label>
        <input type="text" name="editdesarrollador" value="{$juego->desarrollador}">

        <label>Precio</label>
        <input type="number" name="editprecio" value="{$juego->precio}">

        <label>Descripcion</label>
        <input type="text" name="editdescripcion" value="{$juego->descripcion}">

        <label>Genero</label>
        <select name="editidgenero">
            {foreach from= $generos item= $genero}
                <option value={$genero->id_genero}>
                    {$genero->nombregenero}
                </option>
            {/foreach}
        </select>

        <input type="hidden" name="idjuego" value="{$juego->id_juego}">

        <button type="submit">Editar juego</button>

    </form>

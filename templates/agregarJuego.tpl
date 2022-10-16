<h1><a href="{BASE_URL}home">HOME</a></h1>

<h2>Agregar juego</h2>

<form action="{BASE_URL}agregarJuego" method="POST">
    
    <label>Nombre</label>
    <input type="text" name="nombre" required>

    <label>Fecha de lanzamiento</label>
    <input type="date" name="fechalanzamiento" required>

    <label>Desarrollador</label>
    <input type="text" name="desarrollador" required>

    <label>Precio</label>
    <input type="number" name="precio" required>

    <label>Descripcion</label>
    <input type="text" name="descripcion" required>

    <label>Genero</label>
    <select name="idgenero">
        {foreach from= $generos item= $genero}
            <option value={$genero->id_genero}>
                {$genero->nombregenero}
            </option>
        {/foreach}
    </select>

    <button type="submit">Agregar juego</button>

</form>
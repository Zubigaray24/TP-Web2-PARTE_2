<h1><a href="{BASE_URL}home">HOME</a></h1>
<h2>Todos los juegos</h2>
<ul>
    {foreach from=$lista item=$juego}
        <a href="{BASE_URL}juego/{$juego->id_juego}"><li>{$juego->nombre}</li></a>
            {if ($check === "Logeado")}
                <a href="{BASE_URL}borrarJuego/{$juego->id_juego}">Borrar</a>
                
                <a href="{BASE_URL}mostrarFormularioEditarJuego/{$juego->id_juego}">Editar</a>
            {/if}
    {{/foreach}}    
</ul>
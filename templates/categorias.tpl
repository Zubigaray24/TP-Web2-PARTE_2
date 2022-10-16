<h1><a href="{BASE_URL}home">HOME</a></h1>
<h2>Categorias</h2>
<ul>
    {foreach from=$listaCategorias item=$categoria}
        <a href="{BASE_URL}genero/{$categoria->id_genero}"><li>{$categoria->nombregenero}</li></a>
            {if ($check === "Logeado")}
                <a href="{BASE_URL}showFormularioEditarGenero/{$categoria->id_genero}">Editar genero</a>

                <a href="{BASE_URL}borrarGenero/{$categoria->id_genero}">Borrar genero</a>
            {/if}
    {{/foreach}}    
</ul>
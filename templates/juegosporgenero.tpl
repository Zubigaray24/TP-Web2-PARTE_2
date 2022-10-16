<h1><a href="{BASE_URL}home">HOME</a></h1>
<ul>
    {foreach from=$lista item=$categoria}
        <a href="{BASE_URL}juego/{$categoria->id_juego}">
            <li>{$categoria->nombre}</li>
        </a>
    {{/foreach}}
</ul>
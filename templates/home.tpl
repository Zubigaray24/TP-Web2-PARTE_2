<h1><a href="{BASE_URL}home">HOME</a></h1>
<ul>
    {if ($check === "Deslogeado")}
        <li><a href="{BASE_URL}showregister">Registrarse</a></li>
        <li><a href="{BASE_URL}login">Iniciar Sesion</a></li> 
    {/if}

    <li><a href="{BASE_URL}todoslosjuegos">Lista de juegos</a></li>
    <li><a href="{BASE_URL}todoslosgeneros">Lista de categorias</a></li>
    {if ($check === "Logeado")}

        <li><a href="{BASE_URL}mostrarformulario">Agregar juego</a></li>
        <!-- <li><a href="mostrarformularioeditar">Editar juego</a></li> -->

        <li><a href="{BASE_URL}mostrarFormularioGenero">Agregar categoria</a></li>

        <li><a href="{BASE_URL}logout">Cerrar sesion</a></li>
        
    {/if}
    {$check}
</ul>
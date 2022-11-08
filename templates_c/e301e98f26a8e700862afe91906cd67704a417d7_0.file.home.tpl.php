<?php
/* Smarty version 4.2.1, created on 2022-11-08 01:33:53
  from 'C:\xampp\htdocs\TP-Web2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6369a3f1401dc5_55712176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e301e98f26a8e700862afe91906cd67704a417d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-Web2\\templates\\home.tpl',
      1 => 1667866964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6369a3f1401dc5_55712176 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><a href="<?php echo BASE_URL;?>
home">HOME</a></h1>
<ul>
    <?php if (($_smarty_tpl->tpl_vars['check']->value === "Deslogeado")) {?>
        <li><a href="<?php echo BASE_URL;?>
showregister">Registrarse</a></li>
        <li><a href="<?php echo BASE_URL;?>
login">Iniciar Sesion</a></li> 
    <?php }?>

    <li><a href="<?php echo BASE_URL;?>
todoslosjuegos">Lista de juegos</a></li>
    <li><a href="<?php echo BASE_URL;?>
todoslosgeneros">Lista de categorias</a></li>
    <?php if (($_smarty_tpl->tpl_vars['check']->value === "Logeado")) {?>

        <li><a href="<?php echo BASE_URL;?>
mostrarformulario">Agregar juego</a></li>
        <!-- <li><a href="mostrarformularioeditar">Editar juego</a></li> -->

        <li><a href="<?php echo BASE_URL;?>
mostrarFormularioGenero">Agregar categoria</a></li>

        <li><a href="<?php echo BASE_URL;?>
logout">Cerrar sesion</a></li>
        
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['check']->value;?>

</ul><?php }
}

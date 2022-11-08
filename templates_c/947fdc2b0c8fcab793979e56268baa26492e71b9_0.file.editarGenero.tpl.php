<?php
/* Smarty version 4.2.1, created on 2022-11-08 02:41:47
  from 'C:\xampp\htdocs\TP-Web2\templates\editarGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6369b3dbad3e23_49020924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '947fdc2b0c8fcab793979e56268baa26492e71b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-Web2\\templates\\editarGenero.tpl',
      1 => 1667866964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6369b3dbad3e23_49020924 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><a href="<?php echo BASE_URL;?>
home">HOME</a></h1>

<h2>Editar juego</h2>

<form action="<?php echo BASE_URL;?>
editarGenero" method="POST">
    
    <label>Nombre</label>
    <input type="text" name="editnombregenero">

    <input type="hidden" name="idgenero" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">

    <button type="submit">Editar genero</button>
    
</form><?php }
}

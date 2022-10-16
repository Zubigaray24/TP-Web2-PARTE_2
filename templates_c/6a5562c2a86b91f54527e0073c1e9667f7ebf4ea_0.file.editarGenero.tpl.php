<?php
/* Smarty version 4.2.1, created on 2022-10-17 00:57:27
  from 'C:\xampp\htdocs\tpweb2\templates\editarGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c8c57f2cdd6_86349648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a5562c2a86b91f54527e0073c1e9667f7ebf4ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpweb2\\templates\\editarGenero.tpl',
      1 => 1665959662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c8c57f2cdd6_86349648 (Smarty_Internal_Template $_smarty_tpl) {
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

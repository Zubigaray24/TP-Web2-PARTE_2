<?php
/* Smarty version 4.2.1, created on 2022-11-08 02:13:46
  from 'C:\xampp\htdocs\TP-Web2\templates\juegoinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6369ad4a95fe55_18188632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c9aa42bc5b90972eca230bce542d09578d3daa3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-Web2\\templates\\juegoinfo.tpl',
      1 => 1667866964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6369ad4a95fe55_18188632 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><a href="<?php echo BASE_URL;?>
home">HOME</a></h1>
<h1><?php echo $_smarty_tpl->tpl_vars['juego']->value->nombre;?>
</h1>

<ul>
    <li>Fecha de lanzamiento: <?php echo $_smarty_tpl->tpl_vars['juego']->value->fechalanzamiento;?>
</li>
    <li>Desarrollador: <?php echo $_smarty_tpl->tpl_vars['juego']->value->desarrollador;?>
</li>
    <li>Precio: <?php echo $_smarty_tpl->tpl_vars['juego']->value->precio;?>
</li>
    <li>Genero: <?php echo $_smarty_tpl->tpl_vars['genero']->value;?>
</li>
</ul>

<p><?php echo $_smarty_tpl->tpl_vars['juego']->value->descripcion;?>
</p><?php }
}

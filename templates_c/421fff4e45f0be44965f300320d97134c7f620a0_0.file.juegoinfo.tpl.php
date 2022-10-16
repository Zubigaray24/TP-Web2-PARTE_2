<?php
/* Smarty version 4.2.1, created on 2022-10-16 23:52:57
  from 'C:\xampp\htdocs\tpweb2\templates\juegoinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c7d398b2d89_76142527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '421fff4e45f0be44965f300320d97134c7f620a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpweb2\\templates\\juegoinfo.tpl',
      1 => 1665957176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c7d398b2d89_76142527 (Smarty_Internal_Template $_smarty_tpl) {
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

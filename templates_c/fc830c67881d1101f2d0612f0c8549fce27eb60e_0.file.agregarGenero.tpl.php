<?php
/* Smarty version 4.2.1, created on 2022-10-16 22:39:09
  from 'C:\xampp\htdocs\tpweb2\templates\agregarGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c6bedc57423_53295876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc830c67881d1101f2d0612f0c8549fce27eb60e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpweb2\\templates\\agregarGenero.tpl',
      1 => 1665952744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c6bedc57423_53295876 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><a href="<?php echo BASE_URL;?>
home">HOME</a></h1>

<h2>Agregar genero</h2>

<form action="<?php echo BASE_URL;?>
agregarGenero" method="POST">
    
    <label>Genero</label>
    <input type="text" name="newgenero" required>

    <button type="submit">Agregar genero</button>

</form><?php }
}

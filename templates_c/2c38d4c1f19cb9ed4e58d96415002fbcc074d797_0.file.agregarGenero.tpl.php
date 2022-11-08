<?php
/* Smarty version 4.2.1, created on 2022-11-08 02:14:44
  from 'C:\xampp\htdocs\TP-Web2\templates\agregarGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6369ad846ff3e2_49870559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c38d4c1f19cb9ed4e58d96415002fbcc074d797' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-Web2\\templates\\agregarGenero.tpl',
      1 => 1667866964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6369ad846ff3e2_49870559 (Smarty_Internal_Template $_smarty_tpl) {
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

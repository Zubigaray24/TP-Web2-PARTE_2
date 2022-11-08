<?php
/* Smarty version 4.2.1, created on 2022-11-08 01:34:02
  from 'C:\xampp\htdocs\TP-Web2\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6369a3fabb6074_01357715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1016ac97581502c2b9bc0001c1c48b65c5549d3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-Web2\\templates\\registro.tpl',
      1 => 1667866964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6369a3fabb6074_01357715 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><a href="<?php echo BASE_URL;?>
home">HOME</a></h1>
<h2>Registro</h2>
<form action="<?php echo BASE_URL;?>
register" method="POST">
    <input type="text" name="username" placeholder="Ingrese su email..."/>
    <input type="password" name="password" placeholder="Ingrese su password..."/>
    <button>Crear cuenta</button>
</form><?php }
}

<?php
/* Smarty version 4.2.1, created on 2022-10-16 23:56:53
  from 'C:\xampp\htdocs\tpweb2\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c7e257b91d2_51814522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb131cf8255a6566ac638517d7370c43be44aafb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpweb2\\templates\\registro.tpl',
      1 => 1665952701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c7e257b91d2_51814522 (Smarty_Internal_Template $_smarty_tpl) {
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

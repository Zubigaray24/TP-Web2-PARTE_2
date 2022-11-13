<?php
/* Smarty version 4.2.1, created on 2022-11-11 16:46:17
  from 'C:\xampp\htdocs\TP-Web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636e6e49473822_04655747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e183ab8c3c731b04967a41a98c8ba575d3072c7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-Web2\\templates\\login.tpl',
      1 => 1667926506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636e6e49473822_04655747 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><a href="<?php echo BASE_URL;?>
home">HOME</a></h1>
<div class="container">
    <form action="<?php echo BASE_URL;?>
verify" method="POST" class="col-md-4 offset-md-4 mt-4">
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        <div class="form-group">
            <label>Usuario (email)</label>
            <input type="email" name="username" class="form-control" placeholder="Ingrese email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <h3><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h3>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
</div>
<?php }
}

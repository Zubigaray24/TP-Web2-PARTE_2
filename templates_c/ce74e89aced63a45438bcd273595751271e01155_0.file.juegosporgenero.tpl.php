<?php
/* Smarty version 4.2.1, created on 2022-11-08 04:10:19
  from 'C:\xampp\htdocs\TP-Web2\templates\juegosporgenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6369c89b1c5b95_09823010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce74e89aced63a45438bcd273595751271e01155' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-Web2\\templates\\juegosporgenero.tpl',
      1 => 1667866964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6369c89b1c5b95_09823010 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><a href="<?php echo BASE_URL;?>
home">HOME</a></h1>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
        <a href="<?php echo BASE_URL;?>
juego/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_juego;?>
">
            <li><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</li>
        </a>
    <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

</ul><?php }
}

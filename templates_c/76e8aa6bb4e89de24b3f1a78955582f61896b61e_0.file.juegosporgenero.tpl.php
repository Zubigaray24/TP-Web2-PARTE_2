<?php
/* Smarty version 4.2.1, created on 2022-10-16 22:32:43
  from 'C:\xampp\htdocs\tpweb2\templates\juegosporgenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c6a6b84fc60_16438948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76e8aa6bb4e89de24b3f1a78955582f61896b61e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpweb2\\templates\\juegosporgenero.tpl',
      1 => 1665952359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c6a6b84fc60_16438948 (Smarty_Internal_Template $_smarty_tpl) {
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

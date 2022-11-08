<?php
/* Smarty version 4.2.1, created on 2022-11-08 01:33:57
  from 'C:\xampp\htdocs\TP-Web2\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6369a3f5dde919_95384072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dab9b489b6438360bbcc56b7fa87635c098b639' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-Web2\\templates\\categorias.tpl',
      1 => 1667866964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6369a3f5dde919_95384072 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><a href="<?php echo BASE_URL;?>
home">HOME</a></h1>
<h2>Categorias</h2>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaCategorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
        <a href="<?php echo BASE_URL;?>
genero/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_genero;?>
"><li><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombregenero;?>
</li></a>
            <?php if (($_smarty_tpl->tpl_vars['check']->value === "Logeado")) {?>
                <a href="<?php echo BASE_URL;?>
showFormularioEditarGenero/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_genero;?>
">Editar genero</a>

                <a href="<?php echo BASE_URL;?>
borrarGenero/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_genero;?>
">Borrar genero</a>
            <?php }?>
    <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
    
</ul><?php }
}

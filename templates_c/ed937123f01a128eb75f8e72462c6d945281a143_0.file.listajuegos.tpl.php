<?php
/* Smarty version 4.2.1, created on 2022-11-08 01:33:55
  from 'C:\xampp\htdocs\TP-Web2\templates\listajuegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6369a3f3a94959_02468547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed937123f01a128eb75f8e72462c6d945281a143' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-Web2\\templates\\listajuegos.tpl',
      1 => 1667866964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6369a3f3a94959_02468547 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><a href="<?php echo BASE_URL;?>
home">HOME</a></h1>
<h2>Todos los juegos</h2>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>
        <a href="<?php echo BASE_URL;?>
juego/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
"><li><?php echo $_smarty_tpl->tpl_vars['juego']->value->nombre;?>
</li></a>
            <?php if (($_smarty_tpl->tpl_vars['check']->value === "Logeado")) {?>
                <a href="<?php echo BASE_URL;?>
borrarJuego/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
">Borrar</a>
                
                <a href="<?php echo BASE_URL;?>
mostrarFormularioEditarJuego/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
">Editar</a>
            <?php }?>
    <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
    
</ul><?php }
}

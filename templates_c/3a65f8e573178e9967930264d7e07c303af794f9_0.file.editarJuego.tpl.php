<?php
/* Smarty version 4.2.1, created on 2022-11-08 02:40:51
  from 'C:\xampp\htdocs\TP-Web2\templates\editarJuego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6369b3a30cad34_94151166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a65f8e573178e9967930264d7e07c303af794f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-Web2\\templates\\editarJuego.tpl',
      1 => 1667871598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6369b3a30cad34_94151166 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><a href="<?php echo BASE_URL;?>
home">HOME</a></h1>

<h2>Editar juego</h2>

<form action="<?php echo BASE_URL;?>
editarJuego" method="POST">


    <label>Nombre</label>
    <input type="text" name="editnombre">

    <label>Fecha de lanzamiento</label>
    <input type="date" name="editfechalanzamiento">

    <label>Desarrollador</label>
    <input type="text" name="editdesarrollador">

    <label>Precio</label>
    <input type="number" name="editprecio">

    <label>Descripcion</label>
    <input type="text" name="editdescripcion">

    <label>Genero</label>
    <select name="editidgenero">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
            <option value=<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
>
                <?php echo $_smarty_tpl->tpl_vars['genero']->value->nombregenero;?>

            </option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>

    <input type="hidden" name="idjuego" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">

    <button type="submit">Editar juego</button>

</form><?php }
}

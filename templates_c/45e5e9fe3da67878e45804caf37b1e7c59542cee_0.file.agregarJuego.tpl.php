<?php
/* Smarty version 4.2.1, created on 2022-10-16 22:24:04
  from 'C:\xampp\htdocs\tpweb2\templates\agregarJuego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c6864695624_67561832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45e5e9fe3da67878e45804caf37b1e7c59542cee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpweb2\\templates\\agregarJuego.tpl',
      1 => 1665950646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c6864695624_67561832 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><a href="<?php echo BASE_URL;?>
home">HOME</a></h1>

<h2>Agregar juego</h2>

<form action="<?php echo BASE_URL;?>
agregarJuego" method="POST">
    
    <label>Nombre</label>
    <input type="text" name="nombre" required>

    <label>Fecha de lanzamiento</label>
    <input type="date" name="fechalanzamiento" required>

    <label>Desarrollador</label>
    <input type="text" name="desarrollador" required>

    <label>Precio</label>
    <input type="number" name="precio" required>

    <label>Descripcion</label>
    <input type="text" name="descripcion" required>

    <label>Genero</label>
    <select name="idgenero">
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

    <button type="submit">Agregar juego</button>

</form><?php }
}

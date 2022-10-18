<?php
/* Smarty version 4.2.1, created on 2022-10-18 03:42:39
  from 'C:\xampp\htdocs\web 2\TPE\templates\modific.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634e048f8c7957_29490152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb3dd6413479c6e5f80ac595beb419d11a3258ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web 2\\TPE\\templates\\modific.tpl',
      1 => 1666057355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634e048f8c7957_29490152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="formmodific">
<form method="POST" action="update/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label>nombre planta que desea modificar</label>
                    <input name="name" type="text" class="form-control">
                </div>
                <div class="col">
                    <label>precio</label>
                    <input name="price" type="number" class="form-control">
                </div>    
                <div class="col">
                    <label>stock</label>
                    <input name="stock" type="text" class="form-control">
                </div>
                <div class="col">
                    <label>tamaño</label>
                    <input name="size" type="text" class="form-control">
                </div>
                <div>
                <label>tipo</label>
                <select name="type">
                <option value="1">hola</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value->type;?>
/<?php echo $_smarty_tpl->tpl_vars['type']->value->season;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                </div> 
            </div>
        </div>
                <input type="submit" value="enviar">
</form>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

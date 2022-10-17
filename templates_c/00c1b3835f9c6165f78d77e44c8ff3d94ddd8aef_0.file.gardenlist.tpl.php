<?php
/* Smarty version 4.2.1, created on 2022-10-16 01:50:40
  from 'C:\xampp\htdocs\web 2\TPE\templates\gardenlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b4750d25701_94383821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00c1b3835f9c6165f78d77e44c8ff3d94ddd8aef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web 2\\TPE\\templates\\gardenlist.tpl',
      1 => 1665877677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_alta.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634b4750d25701_94383821 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:form_alta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table table-light table-striped">
        <tr class="table-dark">
            <th> Id</th>
            <th>nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>tamaño(mts)</th>
            <th>tipo</th>
            <th>accesos</th>
        </tr>
        <tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <tr> 
            <td><?php echo $_smarty_tpl->tpl_vars['product']->value->Id;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</td><td>
            <?php echo $_smarty_tpl->tpl_vars['product']->value->stock;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['product']->value->size;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['product']->value->type;?>
 
            </td> <td><a type="button" class="btn btn-danger " href="delete/<?php echo $_smarty_tpl->tpl_vars['product']->value->Id;?>
">eliminar</a>
            <a type="button" class="btn btn-warning " href="modificproduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->Id;?>
">modificar</a>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tr>
</table> 


<table class="table table-light table-striped">
        <tr class="table-dark">
            <th>Id</th>
            <th>tipo planta</th>
            <th>temporada planta</th>
            <th>accesos</th>
        </tr>
        <tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
            <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['type']->value->id;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['type']->value->type;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['type']->value->season;?>
</td>
            <td>
                <a type="button" class="btn btn-danger " href="deletetype/<?php echo $_smarty_tpl->tpl_vars['type']->value->id;?>
">eliminar</a>
                <a type="button" class="btn btn-warning " href="filter/<?php echo $_smarty_tpl->tpl_vars['type']->value->Id;?>
">filtrar</a>
            </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tr>
</table>






</table>   
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

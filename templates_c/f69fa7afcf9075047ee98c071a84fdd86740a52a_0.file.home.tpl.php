<?php
/* Smarty version 4.2.1, created on 2022-10-15 03:46:19
  from 'C:\xampp\htdocs\web 2\TPE\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634a10ebb22d43_50259667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f69fa7afcf9075047ee98c071a84fdd86740a52a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web 2\\TPE\\templates\\home.tpl',
      1 => 1665798266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634a10ebb22d43_50259667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table table-light table-striped"> 
    <tr class="table-dark" >
        <th>nombre</th>
        <th>precio</th>
        <th>stock</th>
        <th>tamaño</th>
        <th>tipo</th>
    </tr>   
    <tr>  
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['product']->value->stock;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['product']->value->size;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['product']->value->type;?>
</td></tr>        
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
    </tr>    
</table>   

<table class="table table-light table-striped">
    <tr class="table-dark">
        <th>tipo de planta</th>
        <th>temporada</th>
            <tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
            <tr><td><?php echo $_smarty_tpl->tpl_vars['type']->value->type;?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['type']->value->season;?>
</td></tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
    </tr>    
</table>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

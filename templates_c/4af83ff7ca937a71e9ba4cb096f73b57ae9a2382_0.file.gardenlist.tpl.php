<?php
/* Smarty version 4.2.1, created on 2022-10-13 20:35:59
  from 'C:\xampp\htdocs\web 2\tpe 1er entrega web2\templates\gardenlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63485a8f499195_19529863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4af83ff7ca937a71e9ba4cb096f73b57ae9a2382' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web 2\\tpe 1er entrega web2\\templates\\gardenlist.tpl',
      1 => 1665686133,
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
function content_63485a8f499195_19529863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:form_alta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul class="list-groupgarden">
        <li class="list-group-item list-group-item-dark">ID-Name-Price-Image-Stock-Size-Type</li>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            
            <li class="list-group-item list-group-item-primary"> <?php echo $_smarty_tpl->tpl_vars['product']->value->Id;?>
-<?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
-<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
-<?php echo $_smarty_tpl->tpl_vars['product']->value->image;?>
-
            <?php echo $_smarty_tpl->tpl_vars['product']->value->stock;?>
-<?php echo $_smarty_tpl->tpl_vars['product']->value->size;?>
-<?php echo $_smarty_tpl->tpl_vars['product']->value->type;?>

            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>    


<ul class="list-grouptype">
        <li class="list-group-item list-group-item-dark">tipo-temporada</li>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
            <li class="list-group-item list-group-item-primary"> <?php echo $_smarty_tpl->tpl_vars['type']->value->type;?>
-<?php echo $_smarty_tpl->tpl_vars['type']->value->season;?>

            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>        
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

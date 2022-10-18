<?php
/* Smarty version 4.2.1, created on 2022-10-18 03:58:14
  from 'C:\xampp\htdocs\web 2\TPE\templates\filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634e08364ebfe8_90857204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41eaafbfa7afa8d3b8ac54edd5b62796d7f249d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web 2\\TPE\\templates\\filter.tpl',
      1 => 1666058292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634e08364ebfe8_90857204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>

    </li>
    
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}

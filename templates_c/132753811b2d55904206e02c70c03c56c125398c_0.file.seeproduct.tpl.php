<?php
/* Smarty version 4.2.1, created on 2022-10-18 04:10:39
  from 'C:\xampp\htdocs\web 2\TPE\templates\seeproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634e0b1f7866b5_21828462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '132753811b2d55904206e02c70c03c56c125398c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web 2\\TPE\\templates\\seeproduct.tpl',
      1 => 1666058975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634e0b1f7866b5_21828462 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
<h1>producto:<?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</h1>
<p>estacion:<?php echo $_smarty_tpl->tpl_vars['product']->value->season;?>
</p>
<p>tipo de planta: <?php echo $_smarty_tpl->tpl_vars['product']->value->type;?>
</p>
<p>stock:<?php echo $_smarty_tpl->tpl_vars['product']->value->stock;?>
</p>
<p>precio$:<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</p>
<p>tamaño:<?php echo $_smarty_tpl->tpl_vars['product']->value->size;?>
</p>
</div><?php }
}

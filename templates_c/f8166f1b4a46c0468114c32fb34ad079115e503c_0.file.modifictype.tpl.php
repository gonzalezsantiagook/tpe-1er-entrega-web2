<?php
/* Smarty version 4.2.1, created on 2022-10-18 04:32:12
  from 'C:\xampp\htdocs\web 2\TPE\templates\modifictype.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634e102c622f99_72577638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8166f1b4a46c0468114c32fb34ad079115e503c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web 2\\TPE\\templates\\modifictype.tpl',
      1 => 1666060273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634e102c622f99_72577638 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="updatetype/<?php echo $_smarty_tpl->tpl_vars['type']->value->id;?>
" method="POST">
<label>tipo</label>
<input type="text"name="type">
<label >temporada</label>
<input type="text"name="season">
<input type="submit" value="modificar">


</form><?php }
}

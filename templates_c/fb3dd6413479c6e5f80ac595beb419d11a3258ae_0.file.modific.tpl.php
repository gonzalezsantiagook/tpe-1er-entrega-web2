<?php
/* Smarty version 4.2.1, created on 2022-10-17 20:41:54
  from 'C:\xampp\htdocs\web 2\TPE\templates\modific.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634da1f2035201_76515346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb3dd6413479c6e5f80ac595beb419d11a3258ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web 2\\TPE\\templates\\modific.tpl',
      1 => 1666032112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634da1f2035201_76515346 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="formmodific">
    <form action="update" method="POST" class="my-4">
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
            </div>
        </div>
        <input type="submit" value="modificar"></input>
    </form>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

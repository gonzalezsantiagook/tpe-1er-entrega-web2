<?php
/* Smarty version 4.2.1, created on 2022-10-16 02:13:10
  from 'C:\xampp\htdocs\web 2\TPE\templates\form_alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b4c9624a5f8_14163377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1d2e516001e75450c6c6c59913607b979e7be89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web 2\\TPE\\templates\\form_alta.tpl',
      1 => 1665879188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634b4c9624a5f8_14163377 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="centrador" class="column">
    <div >
        <div class="formalta">
                    <form action="add" method="POST" class="my-4">
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label>nombre planta que desea agregar</label>
                                    <input name="name" type="text" class="form-control">
                                </div>
                                <div class="col-9">
                                    <label>precio</label>
                                    <input name="price" type="number" class="form-control">
                                </div> 
                                <div class="col-9">
                                    <label>stock</label>
                                    <input name="stock" type="text" class="form-control">
                                </div>
                                <div class="col-9">
                                    <label>tamaño</label>
                                    <input name="size" type="text" class="form-control">
                                </div>
                            </div>
                        
                            <label>tipo</label>
                                <select name="type" class="form-control">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value->id;?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['type']->value->type;?>
/<?php echo $_smarty_tpl->tpl_vars['type']->value->season;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            <button type="submit" class="btn btn-dark btn-sm">agregar</button>
                        </div>
                    </form>
        </div>
    </div>
    <div>
        <form action="addtype" method="POST" class="my-4">
            <div class="row">
                <div class="col-9">
                    <div class="form-addtype">
                        <label>nuevo tipo de planta que desee agregar</label>
                        <input name="type" type="text" class="form-control">
                    </div>
                    <div class="col">
                        <label>temporada del nuevo tipo de planta</label>
                        <input name="season" type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-dark ">agregar</button>
                </div>
            </div>    
        </form>
    </div>
</div>

<?php }
}

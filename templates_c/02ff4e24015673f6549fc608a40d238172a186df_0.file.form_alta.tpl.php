<?php
/* Smarty version 4.2.1, created on 2022-10-13 22:25:19
  from 'C:\xampp\htdocs\web 2\tpe 1er entrega web2\templates\form_alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348742f1ba128_85405859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02ff4e24015673f6549fc608a40d238172a186df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web 2\\tpe 1er entrega web2\\templates\\form_alta.tpl',
      1 => 1665692716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348742f1ba128_85405859 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de tarea -->
<div class="formalta">
<form action="add" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>nombre planta que desea agregar</label>
                <input name="name" type="text" class="form-control">
            </div>
            <div class="col">
                <label>precio</label>
                <input name="price" type="number" class="form-control">
            </div>
            <div class="col">
                <label>imagen</label>
                <input name="image" type="text" class="form-control">
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
        <div class="col-3">
            <div class="form-group">
                <label>tipo</label>
                <select name="type" class="form-control">
                    <option value="1">Frutales/Primavera</option>
                    <option value="2">Frutales/Invierno</option>
                    <option value="3">Arbusto/Verano</option>
                    <option value="4">Arbusto/Invierno</option>
                </select>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2">agregar</button>
</form>

<!-- formulario de alta de nuevo tipo de planta que se quiera agregar -->
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
            <button type="submit" class="btn btn-primary ">agregar</button>
</form>
</div><?php }
}

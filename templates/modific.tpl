{include file="header.tpl"}

<div class="formmodific">
<form method="POST" action="update/{$product->id}">
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
                {foreach from=$types item=$type}
                    <option value="{$type->id}">{$type->type}/{$type->season}</option>
                {/foreach}
                </select>
                </div> 
            </div>
        </div>
                <input type="submit" value="enviar">
</form>
</div>


{include file="footer.tpl"}

{include file="header.tpl"}

{include file="form_alta.tpl"}

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
        {foreach from=$products item=$product}
            <tr> 
            <td>{$product->Id}</td><td>{$product->name}</td><td>{$product->price}</td><td>
            {$product->stock}</td><td>{$product->size}</td><td>{$product->type} 
            </td> <td><a type="button" class="btn btn-danger " href="delete/{$product->Id}">eliminar</a>
            <a type="button" class="btn btn-warning " href="modificproduct/{$product->Id}">modificar</a>
            </tr>
        {/foreach}
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
        {foreach from=$types item=$type}
            <tr>
            <td>{$type->id}</td>
            <td>{$type->type}</td>
            <td>{$type->season}</td>
            <td>
                <a type="button" class="btn btn-danger " href="deletetype/{$type->id}">eliminar</a>
                <a type="button" class="btn btn-warning " href="filter/{$type->Id}">filtrar</a>
            </td>
            </tr>
        {/foreach}
        </tr>
</table>






</table>   
{include file="footer.tpl"}


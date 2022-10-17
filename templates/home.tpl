{include 'header.tpl'}
<table class="table table-light table-striped"> 
    <tr class="table-dark" >
        <th>nombre</th>
        <th>precio</th>
        <th>stock</th>
        <th>tamaño</th>
        <th>tipo</th>
    </tr>   
    <tr>  
    {foreach from=$products item=$product}
        <tr><td>{$product->name}</td><td>{$product->price}</td><td>{$product->stock}</td><td>{$product->size}</td><td>{$product->type}</td></tr>        
    {/foreach}  
    </tr>    
</table>   

<table class="table table-light table-striped">
    <tr class="table-dark">
        <th>tipo de planta</th>
        <th>temporada</th>
            <tr>{foreach from=$types item=$type }
            <tr><td>{$type->type}</td> <td>{$type->season}</td></tr>
            {/foreach}
            </tr>
    </tr>    
</table>
{include 'footer.tpl'}
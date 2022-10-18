{include file="header.tpl"}
<ul>
{foreach from=$products item=$product }
    <li>{$product->name}
    </li>
    
{/foreach}
</ul>
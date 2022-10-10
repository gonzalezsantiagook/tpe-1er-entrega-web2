{include file="header.tpl"}

{include file="form_alta.tpl"}

<!-- lista de arboles/arbustos -->
<ul class="list-group">
    {foreach from=$gardens item=$garden}
                {/if}
                <a href='delete/{$task->id}' type='button' class='btn btn-danger'>Borrar</a>
            </div>
        </li>
    {/foreach}
</ul>

<p class="mt-3"><small>Mostrando {$count} tareas</small></p>

{include file="footer.tpl"}
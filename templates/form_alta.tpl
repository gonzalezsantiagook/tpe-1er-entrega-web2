<div class="centrador" class="column">
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
                                    {foreach from=$types item=$type}
                                        <option value="{$type->id}">
                                        {$type->type}/{$type->season}</option>
                                    {/foreach}
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


{include file="header.tpl"}

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


{include file='footer.tpl'}


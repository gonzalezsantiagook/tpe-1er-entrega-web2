<!-- formulario de alta de tarea -->
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

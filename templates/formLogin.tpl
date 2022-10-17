{include 'header.tpl'}

<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="validate">
        <div class="form-login">
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp"placeholder="Example@gmail.com">
            <div id="emailHelp" class="form-text">Nunca compartiremos su direccion email con nadie.</div>
            <label for="password">Password</label>
            <input type="password" required class="form-control" id="password" name="password"placeholder="">
            <div id="emailHelp" class="form-text">¿Olvidaste tu contraseña?</div>
        </div>

        {if $error} 
            <div class="alert alert-danger mt-3">
                {$error}
            </div>
        {/if}
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
    </form>
</div>
{include 'footer.tpl'}


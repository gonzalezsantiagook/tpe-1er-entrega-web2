<?php
/* Smarty version 4.2.1, created on 2022-10-15 03:55:33
  from 'C:\xampp\htdocs\web 2\TPE\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634a13157ba876_32893206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bfa5d0408c7fa6e51d644b49a4b8161166aad90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web 2\\TPE\\templates\\formLogin.tpl',
      1 => 1665798931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634a13157ba876_32893206 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
            <div class="alert alert-danger mt-3">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

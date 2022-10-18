<?php
/* Smarty version 4.2.1, created on 2022-10-18 03:00:27
  from 'C:\xampp\htdocs\web 2\TPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dfaab0546d1_84132393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2955227aaf035044119eb4f239607b1ec8161f2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web 2\\TPE\\templates\\header.tpl',
      1 => 1666054823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634dfaab0546d1_84132393 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <title>SHOP GARDEN</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark" >
            <div class="container-fluid">
              <a class="navbar-brand">Shop Garden</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home">Home</a>
                    <?php if (!(isset($_SESSION['USER_ID']))) {?>
                      <a class="nav-link active" aria-current="page" href="login">Admin Login</a>
                    <?php } else { ?>
                        <a class="nav-link active" aria-current="page" href="logout">Log out</a>
                        
                    <?php }?>
                    
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <!-- inicio main container -->
    <main class="container">
<?php }
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-25 20:57:34
  from 'C:\xampp\htdocs\entrega-web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_619feaaebe6c52_84181901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9768281ae429b889995143b8d890b2b4f12bf05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\entrega-web2\\templates\\header.tpl',
      1 => 1637252234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619feaaebe6c52_84181901 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Motos Tandil</title>
    <base href="<?php echo BASE_URL;?>
">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <section class="encabezado">
            <h1>Tandil Motos</h1>
            <div class="btn_menu"><img src="images/menu.png" alt="menu"></div>
        </section>

        <nav class="menu">
            <ul class="botonera">
                <li><a href=index>Home</a></li>
                <li><a href=motos>Motos</a></li>
                <li><a href=tipos>Tipos</a></li>
                 <?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value && $_smarty_tpl->tpl_vars['isAdmin']->value) {?>
                    <li><a href=user>Usuarios</a></li>
                <?php }?>   
    
                <?php if (!$_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>
                    <li><a href=login>Login</a></li>
                <?php }?>                
                <?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>
                    <li><a href=logout>Logout</a></li>
                <?php }?>
            </ul>
        </nav>
    </header>
<?php }
}

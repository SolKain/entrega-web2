<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-29 04:33:54
  from 'C:\xampp\htdocs\entrega-web2\templates\formComentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61a44a2248f642_29717945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c957521b89ad9fa3606d9c2c0d969f0460c196de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\entrega-web2\\templates\\formComentarios.tpl',
      1 => 1638156675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a44a2248f642_29717945 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="POST" class="formTabla" id="formComentarios">

  <label for="">Comentario</label> <input type="text" name="comentario" id="comentario" placeholder="Comentario">
  <label for="">Puntuacion</label> <input type="number" name="puntuacion" min="1" max="5" id="puntuacion" placeholder="Del 1 a 5">
  <button type="submit" id="btnAgregar">Agregar</button>
  
</form><?php }
}

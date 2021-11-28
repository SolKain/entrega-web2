<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-26 22:10:09
  from 'C:\xampp\htdocs\entrega-web2\templates\formEditarMoto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61a14d319ce6e7_85403292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17d55aabb907c549df599f4198269bd7df521ba3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\entrega-web2\\templates\\formEditarMoto.tpl',
      1 => 1637176490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61a14d319ce6e7_85403292 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
     <?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>
    <form action="edit/<?php echo $_smarty_tpl->tpl_vars['idMoto']->value;?>
" method="POST" class="formTabla" id="formTabla" enctype="multipart/form-data">
          <label for="">Ingresar color:</label> <input type="text" name="color" id="inputColor" placeholder="Blanco">
          <label for="">Ingresar cilindrada:</label> <input type="text" name="cilindrada" id="inputCilindrada" placeholder="150">
          <label for="">Ingresar tanque:</label> <input type="text" name="tanque" id="inputTanque" placeholder="10">
          <label for="">Ingresar tipo:</label><input type="text" name="id_tipo_moto" id="inputTipoMoto" placeholder="1">
          <div >
            <button type="submit" id="">Editar</button>
          </div> 
        </form>
<?php }
$_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-25 20:59:19
  from 'C:\xampp\htdocs\entrega-web2\templates\formEditarTipo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_619feb172c0749_99604730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9474f014b0526e7b592eda37c4676d77f0b8958a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\entrega-web2\\templates\\formEditarTipo.tpl',
      1 => 1637176524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619feb172c0749_99604730 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>
<form action="editTipo/<?php echo $_smarty_tpl->tpl_vars['idTipo']->value;?>
" method="POST" class="formTabla" id="formTablaTipo" enctype="multipart/form-data">
<label for="">Ingresar terreno:</label> <input type="text" name="terreno" id="inputTerreno" placeholder="Arena">
    <div >
    <button type="submit" id="">Editar</button>
    </div> 
</form>

</div>
    <h4 class= error>  <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
</div>
<?php }?>
 <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-28 22:37:35
  from 'C:\xampp\htdocs\entrega-web2\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61a3f69f93e611_56778967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5b681f39ba4b12876e0fb5abd5e03b42ca70c8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\entrega-web2\\templates\\error.tpl',
      1 => 1638135450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61a3f69f93e611_56778967 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php if ($_smarty_tpl->tpl_vars['mensaje']->value != '') {?>
          <h2><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h2>
          <?php }?>

   <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-29 04:33:54
  from 'C:\xampp\htdocs\entrega-web2\templates\motoParticular.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61a44a22386047_99655302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2ab2d9dc396ca0985dd9f461eb8959906769b2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\entrega-web2\\templates\\motoParticular.tpl',
      1 => 1638156690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/formComentarios.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61a44a22386047_99655302 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php echo '<script'; ?>
 src="js/comentarios.js"><?php echo '</script'; ?>
>
<section>
        <table id="tablaMoto">
            <thead>
                <tr>
                 <th id=<?php echo $_smarty_tpl->tpl_vars['moto']->value->id;?>
> Color </th>
                <th id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
>Cilindrada</th>
                <th>Tanque</th>
                <th>Tipo</th>
                </tr>
            </thead>
            <tbody id="tabla" class="body-tabla">
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['moto']->value->color;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['moto']->value->cilindrada;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['moto']->value->tanque;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['moto']->value->terreno;?>
</td>
             </tr>
                         </tbody>
        </table>
    </section>


    <div id="lista">
</div>
<section>
          <table>
            <thead id="columnas">
              <th>Comentarios</th>
              <th>Puntuaciones</th>
              <th>Usuarios</th>
              <?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value && $_smarty_tpl->tpl_vars['isAdmin']->value) {?>
              <th>Borrar</th>
              <?php }?>
            </thead>
            <tbody  id="tablaComentarios">
            </tbody>
          </table>

          <?php $_smarty_tpl->_subTemplateRender("file:templates/formComentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</section>


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

 {include file="templates/header.tpl"}
 <script src="js/comentarios.js"></script>
<section>
        <table id="tablaMoto">
            <thead>
                <tr>
                 <th id={$moto->id}> Color </th>
                <th id={$usuario}>Cilindrada</th>
                <th>Tanque</th>
                <th>Tipo</th>
                </tr>
            </thead>
            <tbody id="tabla" class="body-tabla">
            <tr>
                <td>{$moto->color}</td>
                <td>{$moto->cilindrada}</td>
                <td>{$moto->tanque}</td>
                <td>{$moto->terreno}</td>
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
              {if $isLoggedIn && $isAdmin}
              <th>Borrar</th>
              {/if}
            </thead>
            <tbody  id="tablaComentarios">
            </tbody>
          </table>

          {include file="templates/formComentarios.tpl"}
</section>


{include file="templates/footer.tpl"}

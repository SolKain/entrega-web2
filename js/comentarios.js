//document.addEventListener("DOMContentLoaded", function(){
  let mainURL = 'http://localhost/entrega-web2/api/comentarios';
  let subURL = 'http://localhost/entrega-web2/api/comentario/';

  document.addEventListener("DOMContentLoaded", function(){
      inicializarBotonAgregar();
      setTimeout(idComentarios, 1);

    });

  llamadoPrincipal();


  function mostrarComentariosDeMoto(id){
      fetch (mainURL + "Generales",  {
          "method" : "GET",
          "mode" : "cors",
      }).then(function(r){
              if(!r.ok){
              console.log(r)
              }
              return r.json();
          })
          .then(function(json) {
              actualizarTabla(json, id);
              
          })
          .catch(function(e){
              console.log(e)
          })
  }

  function actualizarTabla(json, id){
      let tabla = document.querySelector("#tablaComentarios");
      let filas = document.querySelector("#columnas").rows[0].cells.length;
      tabla.innerHTML = " ";
      
      for (let index = 0; index<json.length; index++){
          let comentarioActual = json[index];
          let idJson = comentarioActual.id;
          if(id == comentarioActual.idMoto){
              if(filas == 4){
                  tabla.innerHTML +=                     
                  `<tr>
                  <td>${comentarioActual.comentario}</td>
                  <td>${comentarioActual.puntuacion}</td>
                  <td>${comentarioActual.usuario}</td>
                  <td><button class="btn-delete" id="${idJson}">Eliminar</button></td>
                  </tr>`
              }
              else if(filas == 3){
                  tabla.innerHTML +=                     
                  `<tr>
                  <td>${comentarioActual.comentario}</td>
                  <td>${comentarioActual.puntuacion}</td>
                  <td>${comentarioActual.usuario}</td>
                  </tr>`
              }
          }
      }
      inicializarBotonEliminar();
  }

  
  function insertarComentario(idMoto,data){
      console.log(data);
      fetch(subURL + idMoto, {
          "method": "POST",
          "mode": "cors",
          "headers": { "Content-Type": "application/json" },
          "body": JSON.stringify(data)
      }).then(function (r) {
          let jsonResponse = r.json();
          console.log(jsonResponse);
          mostrarComentariosDeMoto(idMoto);
      });
    }

  function deleteComentario(id){
      fetch(subURL + id, {
          "method": "DELETE",
          "mode": "cors",
      }).then(function(r) {
          if (!r.ok) {
              console.log(e);
          };
          return r.json();
      }).then(function () {
          llamadoPrincipal();
      });
  };

  function llamadoPrincipal(){
      let urlPagina = window.location.href;
      let idMoto = urlPagina.charAt(45);
      idMoto += urlPagina.charAt(46);
      mostrarComentariosDeMoto(idMoto);
  }

  function inicializarBotonEliminar(){
      document.querySelectorAll(".btn-delete").forEach(element => element.addEventListener("click", function(){
          console.log(element.id); 
          deleteComentario(element.id);
      }));  
  }

  function inicializarBotonAgregar(){
    document.querySelector("#btnAgregar").addEventListener("click", function(){
        let comentario = document.querySelector("#comentario").value;
        let puntuacion = document.querySelector("#puntuacion").value;
        let tabla = document.querySelector("#tablaMoto");
        let idMotoParticular = tabla.rows.item(0).cells[0].id;
        let usuario = tabla.rows.item(0).cells[1].id;
        let body = {
            'comentario' : comentario,
            'puntuacion' : puntuacion,
            'usuario' :  usuario
        }
        insertarComentario(idMotoParticular, body);
    });  
}


  function validarInsert(){
      let comentario = document.querySelector("#comentario").value;
      let puntuacion = document.querySelector("#puntuacion").value;
      let tabla = document.querySelector("#tablaMoto");
      let id_tendencia =  tabla.rows.item(0).cells[1].id;
      if(comentario != "" && puntuacion != "" && (puntuacion <= 5) && (puntuacion >= 1)){
          return (comentario && puntuacion && id_tendencia);
      }
      else{
          return false;
      }
  }

  function idComentarios(){
    document.querySelector("#formComentarios").action = 'javascript:void(0)';
}


  
  
  
  



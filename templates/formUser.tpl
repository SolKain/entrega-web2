{include file="templates/header.tpl"}

<h2>Iniciar sesion:</h2>
<form action="verify" method="POST">
    <input type="text" name="usuario" id="id" placeholder="Ingrese su usuario" required>
    <input type="password" name="contrasenia" id="password" placeholder="Ingrese su contraseña" required>
    <button type="submit" id="">Aceptar</button>
</form>


</div>
    <h4 class= error>  {$error}</h4>
</div>

<h3>Crear usuario: </h3>
<button><a href="registrarse">Registrarse</a></button>

{include file="templates/footer.tpl"}


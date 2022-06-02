<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login - Hogar  Vital</title>
    <link rel="stylesheet" href="{{asset ('css/index.css')}}">
    <link rel="icon" type="imagenes/png" href="../imagenes/logo_icon.ico">
  </head>
  <body>

    <div class="contenedor">
      <img src="../imagenes/logo.jpeg" class="imagen" alt="imagen">
      <h1>Iniciar Sesión</h1>
      <form  method="POST">

        @csrf
        <!-- USERNAME INPUT -->
        <label for="correo" >Correo electronico:</label>
        <input  name='correo' type="text" placeholder="Ingrese su correo electronico" class="campos" >
        <!-- PASSWORD INPUT -->
        <label  for="password">Contraseña:</label>
        <input name='password' type="password" placeholder="Ingrese su contraseña" class="campos" >
        <br>
        <br>
        <input type="submit" value="Iniciar Sesión" class="boton">
      </form>

      <a href="{{url('../')}}"><input type="submit" value="Volver" class="boton2"></a>
      <center>
      <a href="{{url('layouts/contraseña')}}">¿Has olvidado tu contraseña?</a><br>
      </center>
    </div>
  </body>
</html>

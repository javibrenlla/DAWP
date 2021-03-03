<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <div id="Contenedor">
    <div class="Icon">
      <!--Icono de usuario-->
      <span class="glyphicon glyphicon-user"></span>
    </div>
    <div class="ContentForm">
      <form action="" method="post" name="FormEntrar">
        <div class="input-group input-group-lg">
          <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
          <input type="email" class="form-control" name="correo" placeholder="Correo" id="Correo" aria-describedby="sizing-addon1" required>
        </div>
        <br>
        <div class="input-group input-group-lg">
          <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
          <input type="password" name="contra" class="form-control" placeholder="******" aria-describedby="sizing-addon1" required>
        </div>
        <br>
        <button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit">Entrar</button>
        <div class="opcioncontra"><a href="">Olvidaste tu contraseña?</a></div>
      </form>
    </div>
  </div>
<a href="sobrenosotros.html">Sobrenosotros</a>
</body>

</html>

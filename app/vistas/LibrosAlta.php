<!DOCTYPE html>
<html>
<head>
  <title>Dar de alta una Pelicula</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="<?php print RUTA_APP.'/img/favicon.jpg'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php print RUTA_APP.'/css/main.css'; ?>">
</head>

    <body>
     <!-- <background-imagen> url("C:\xampp\htdocs\CRUD_CSS\app\vistas\liranroll.png"); </background-imagen> -->
	   <!--  <body style="background-color:chartreuse;">   -->
    </body>

<body>
   <h1>Dar de alta una Pelicula</h1>
  <fieldset>
   
  <form action='<?php print RUTA_APP."libros/alta/"; ?>' method="POST">
    <table>
      <tr><td ><label for="titulo">Titulo:</label></td>
        <td class="cien"><input type="text" name="titulo"></td>
      </tr>
      <tr><td><label for="autor">Año:</label></td>
        <td class="cien"><input type="text" name="autor"></td>
      </tr>
      <tr><td><label for="editorial">Genero:</label></td>
        <td class="cien"><input type="text" name="editorial"></td>
      </tr>
      <tr><td>&nbsp;</td>
        <td><input type="submit" value="Enviar"></td>
      </tr>
    </table>
  </form>
  </fieldset> <BR>
  <a href='<?php print RUTA_APP."libros/"; ?>'><input type="button" id="REGRESAR" value="REGRESAR"> </a>
</body>
</html>
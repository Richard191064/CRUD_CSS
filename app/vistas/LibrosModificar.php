<!DOCTYPE html>
<html>
<head>
  <title>Modificar un libro</title>
  <meta charset="utf-8">
</head>
<body>
  <form action='<?php print RUTA_APP."libros/modificar/"; ?>' method="POST">
    <table>
      <tr><td><label for="titulo">Titulo:</label></td>
        <td><input type="text" name="titulo" value="<?php print $data["titulo"]; ?>"></td>
      </tr>
      <tr><td><label for="autor">Año:</label></td>
        <td><input type="text" name="autor" value="<?php print $data["autor"]; ?>"></td>
      </tr>
      <tr><td><label for="editorial">Genero:</label></td>
        <td><input type="text" name="editorial" value="<?php print $data["editorial"]; ?>"></td>
      </tr>
        <tr><td><input type="hidden" value="<?php print $data["id"]; ?>" name="id"></td>
        <td><input type="submit" value="Enviar"></td>
      </tr>
    </table>
  </form> <BR>
  <a href='<?php print RUTA_APP."libros/"; ?>'> <input type="button" id="REGRESAR" value="REGRESAR"> </a>
</body>
</html>
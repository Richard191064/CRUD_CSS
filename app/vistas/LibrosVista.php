<!DOCTYPE html>
<html>
<head>
  <title>Lista de PELICULAS</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="<?php print RUTA_APP.'/img/favicon.jpg'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php print RUTA_APP.'/css/main.css'; ?>">
</head>
<body>
      <!-- background-image: url("C:\xampp\htdocs\CRUD_CSS\app\vistas\liranroll.png");-->
	    <!-- <body style="background-color: ;"> -->
    </body>
<body>
    

  <h1>PELICULAS</h1>
    <style>
      .tabla{
        width: 100%;
        table-layout: fixed;
        border-collapse: collapse;
        }
        th{
          width: 70px;
          height: 50x;
          text-align: center;
          overflow: hidden;
        }
    </style>

  <table class="tabla" BORDER="3">
    <thead>
      <th>id</th>
      <th>Titulo</th>
      <th>Año</th>
      <th>Genero</th>
      <th>Modificar</th>
      <th>Borrar</th>
    </thead>
    <tbody>
      <?php
      for ($i=0; $i < count($data); $i++) { 
        print "<tr>";
        print "<td>".$data[$i]["id"]."</td>";
        print "<td>".$data[$i]["titulo"]."</td>";
        print "<td>".$data[$i]["autor"]."</td>";
        print "<td>".$data[$i]["editorial"]."</td>";
        print "<td><a href='".RUTA_APP."libros/modificar/".$data[$i]["id"]."'>Modificar</a></td>";
        print "<td><a href='".RUTA_APP."libros/borrar/".$data[$i]["id"]."'>Borrar</a></td>";
        print "</tr>";
      }
    ?>
    </tbody>
  </table>
  <br>
 
  <a href='<?php print RUTA_APP."libros/alta/"; ?>'> <input type="button" id="DAR DE ALTA" value="DAR DE ALTA PELICULAS">  



 <a href="index.html"> <H3> INFO CRUD.</H3> </a> 

  </body>
<br> <br>

</html>
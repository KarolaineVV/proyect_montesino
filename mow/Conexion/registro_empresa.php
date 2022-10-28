<?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into empresa(Nic,Nombre,Direccion,Telefono) values 
                       ($_REQUEST[Nic],'$_REQUEST[Nombre]','$_REQUEST[Direccion]','$_REQUEST[Telefono]')")
    or die("Problemas en el select" . mysqli_error($conexion));
    

  mysqli_close($conexion);

  header('Location: http://localhost/ferreteria/mostrar.php');
  ?>
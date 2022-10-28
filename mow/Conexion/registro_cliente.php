<?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into cliente(id_cli,Nombre,Cedula,Telefono,Direccion,Correo) values 
                    ($_REQUEST[id_cli],'$_REQUEST[Nombre]','$_REQUEST[Cedula]','$_REQUEST[Telefono]','$_REQUEST[Direccion]','$_REQUEST[Correo]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  header('Location:http://localhost/ferreteriaadmin/mostrar_cliente.php')
  ?>
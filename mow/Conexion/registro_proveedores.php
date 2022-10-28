<?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into proveedores(Nic_pro ,RUT,Nic_empro,Nombre,Telefono,Correo,Direccion,Pag_web) values 
                    ($_REQUEST[Nic_pro],'$_REQUEST[RUT]','$_REQUEST[Nic_empro]','$_REQUEST[Nombre]','$_REQUEST[Telefono]','$_REQUEST[Correo]','$_REQUEST[Direccion]','$_REQUEST[Pag_web]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "Registro Exitoso.";
  ?>
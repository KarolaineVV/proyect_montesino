<?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into venta_producto(Idventa,nomcli,dian,trabajador,articulo,cantidad,fecha,valorventa) values 
                    ($_REQUEST[Idventa],'$_REQUEST[nomcli]',$_REQUEST[dian],$_REQUEST[trabajador],'$_REQUEST[articulo]',$_REQUEST[cantidad],'$_REQUEST[fecha]',$_REQUEST[valorventa])")
    or die("Problemas en el select" . mysqli_error($conexion));
  mysqli_close($conexion);  
    header('Location:http://localhost/ferreteriaadmin/mostrarventaproducto.php')

  ?>
  
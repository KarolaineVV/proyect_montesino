<?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into facturacion( Id_facturacion,Nombre,Cantidad,Precio,Descripcion,Articulo,Precio_total) values 
                    ($_REQUEST[Id_facturacion],'$_REQUEST[Nombre]','$_REQUEST[Cantidad]',$_REQUEST[Precio],'$_REQUEST[Descripcion]','$_REQUEST[Articulo]',$_REQUEST[Precio_total])")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "Registro Exitoso.";
  ?>
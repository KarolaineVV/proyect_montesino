<?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into producto(Id_produto,Id_pro_ven_Pt,Nombre,Descripcion,Categoria,Descuento,Precio,Stock) values 
                       ($_REQUEST[Id_produto],$_REQUEST[Id_pro_ven_Pt],'$_REQUEST[Nombre]','$_REQUEST[Descripcion]','$_REQUEST[Categoria]','$_REQUEST[Descuento]','$_REQUEST[Precio]','$_REQUEST[Stock]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "Registro Exitoso.";
  ?>
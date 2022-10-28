<?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into codigo_dian_factura(Id_codgn,Id_facturacion_cod,Estado_facturacion,Fecha_aprovado,Limite_inferior,Limite_superior) values 
                       ($_REQUEST[Id_codgn],$_REQUEST[Id_facturacion_cod],'$_REQUEST[Estado_facturacion]','$_REQUEST[Fecha_aprovado]','$_REQUEST[Limite_inferior]','$_REQUEST[Limite_superior]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "Registro Exitoso.";
  ?>
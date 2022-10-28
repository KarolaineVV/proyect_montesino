<?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into pedido_producto(Id_pedido,Id_producto_ped,Nic_pro_ped,Hora_recibido,Hora_pedido,Fecha_pedido,Fecha_recibido,Cantidad) values 
                       ($_REQUEST[Id_pedido],$_REQUEST[Id_producto_ped],$_REQUEST[Nic_pro_ped],'$_REQUEST[Hora_recibido]','$_REQUEST[Hora_pedido]','$_REQUEST[Fecha_pedido]','$_REQUEST[Fecha_recibido]','$_REQUEST[Cantidad]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "Registro Exitoso.";
  ?>
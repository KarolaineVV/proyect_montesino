<?php
header("content-Type: application/xls");
header("content-Disposition: attachment; filename=archivo.xls");

?>
<?php
require("conexion.php");
$conexion = retornarConexion();

$resultado = ("SELECT * FROM venta_producto");
?>
<table class="table table-striped table-bordered table-hover display" id="tablau">
    <thead>
      <tr>
        <th>ID de venta</th>
        <th>Nombre De Cliente</th>
        <th>Dian</th>
        <th>Trabajador</th>
        <th>Articulo</th>
        <th>Cantidad</th>
        <th>Fecha</th>
        <th>Valor De Venta</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($conexion->query($resultado) as $lista){ ?>
      <tr>
        <td><?php  echo $lista['Idventa'];?></td>
        <td><?php  echo $lista['nomcli'];?></td>
        <td><?php  echo $lista['dian'];?></td>
        <td><?php  echo $lista['trabajador'];?></td>
        <td><?php  echo $lista['articulo'];?></td>
        <td><?php  echo $lista['cantidad'];?></td>
        <td><?php  echo $lista['fecha'];?></td>
        <td><?php  echo $lista['valorventa'];?></td>

        

      </tr>
      
      <?php } ?>
    </tbody>
  </table>

  
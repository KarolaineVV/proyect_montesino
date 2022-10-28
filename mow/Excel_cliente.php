<?php
header("content-Type: application/xls");
header("content-Disposition: attachment; filename=archivo.xls");

?>
<?php
require("conexion.php");
$conexion = retornarConexion();

$resultado = ("SELECT * FROM cliente");
?>

  
</div>
<table class="table table-striped table-bordered table-hover display" id="tablau">
    <thead>
      <tr>
        <th>Id_cli</th>
        <th>Nombre</th>
        <th>Cedula</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Correo</th>
      
      </tr>
    </thead>
    <tbody>
    <?php foreach($conexion->query($resultado) as $lista){ ?>
      <tr>
        <td><?php  echo $lista['id_cli'];?></td>
        <td><?php  echo $lista['Nombre'];?></td>
        <td><?php  echo $lista['Cedula'];?></td>
        <td><?php  echo $lista['Telefono'];?></td>
        <td><?php  echo $lista['Direccion'];?></td>
        <td><?php  echo $lista['Correo'];?></td>
        
      </tr>
      
      <?php } ?>
    </tbody>
  </table>
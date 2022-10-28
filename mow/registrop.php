<?php include ("vista/cabecera.php");?>
<?php
require("conexion.php");
$conexion = retornarConexion();
if($_POST){
$Idproven=$_POST['Idproven'];
$Idcliven=$_POST['Idcliven'];
$Idcodgnven=$_POST['Idcodgnven'];
$Cantidad=$_POST['Cantidad'];
$Fecha=$_POST['Fecha'];

$respuesta = mysqli_query($conexion, "INSERT INTO `venta_producto`(`Idproven`, `Idcliven`, `Idcodgnven`, `Cantidad`, `Fecha`) VALUES ('$Idproven','$Idcliven','$Idcodgnven','$Cantidad','$Fecha')");

}

?>
<form action="" method="POST">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">ID Producto Venta</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="Idproven">
                  </div>
                </div>
<!-- <div class="form-group">
      <label for="">id producto venta:</label>
      <input type="number" class="form-control"   name="Idproven" required>
    </div> -->
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">ID Cliente</label>
                   <div class="col-sm-10">
                    <input type="number" class="form-control" name="Idcliven">
                   </div>
               </div>
  <!--  <div class="form-group">
      <label for="">id cliente ven:</label>
      <input type="number" class="form-control"   name="Idcliven" required>
    </div> -->
               <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Id Codigo Venta</label>
                   <div class="col-sm-10">
                    <input type="number" class="form-control" name="Idcodgnven">
                   </div>
               </div>
    <!--<div class="form-group">
      <label for="">id codigo venta:</label>
      <input type="number" class="form-control"   name="Idcodgnven" required>
    </div> -->
               <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Cantidad</label>
                   <div class="col-sm-10">
                    <input type="number" class="form-control" name="Cantidad">
                   </div>
               </div>
    <!--<div class="form-group">
      <label for="">Cantidad:</label>
      <input type="number" class="form-control"   name="Cantidad" required>
    </div> -->
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Fecha</label>
                   <div class="col-sm-10">
                    <input type="number" class="form-control" name="Fecha">
                   </div>
               </div>
  <!--  <div class="form-group">
      <label for="">Fecha:</label>
      <input type="date" class="form-control"   name="Fecha" required>
    </div> -->
    <br>    

    <a href="mostrar.php"></a><button onclick="mostrar()" type="submit" class="btn btn-primary">Guardar</button>
    <script> type="tect/javascript">
    function mostrar(){   
  swal("Good job!", "You clicked the button!", "success");
    }
  </script>
    <input style="width: 10%;" class="btn btn-primary" type="button" onclick="location.href ='mostrar.php'" value="Tabla">

  </form>

<?php include ("vista/pie.php");?>
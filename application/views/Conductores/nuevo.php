<legend class="text-center">
  <i class="glyphicon glyphicon-useer"></i><b>Agregar conductores</b>
</legend>
<form class="" action="<?php echo site_url("conductores/guardarConductores"); ?>" method="post">

   <div class="row">
   <div class="col-md-4 text-right">
   <label for="">Nombre:</label>
   </div>
   <div class="col-md-4">
   <input type="text" name="nombre_co" value="" class="form-control" placeholder="Ingresese su nombre" required>
   </div>
   </div>

  <div class="row">
  <div class="col-md-4 text-right">
  <label for="">Apellido:</label>
  </div>
  <div class="col-md-4">
  <input type="text" name="ape_co" value="" class="form-control" placeholder="Ingrese su apellido" required>
  </div>
  </div>

  <div class="row">
  <div class="col-md-4 text-right">
  <label for="">Cedula:</label>
  </div>
  <div class="col-md-4">
  <input type="number" name="ce_co" value="" class="form-control" placeholder="Ingrese su Cedula" required>
  </div>
  </div>

  <div class="row">
  <div class="col-md-4 text-right">
  <label for="">Telefono:</label>
  </div>
  <div class="col-md-4">
  <input type="number" name="tele_co" value="" class="form-control"placeholder="Ingrese su telefono" required>
  </div>
  </div>

  <div class="row">
  <div class="col-md-4 text-right">
  <label for="">Tipo licencia:</label>
  </div>
  <div class="col-md-4">
  <input type="text" name="ti_co" value="" class="form-control" placeholder="Ingrese su tipo de licencia" required>
  </div>
  </div>


  <div class="row">
  <div class="col-md-5">
  </div>
  <div class="col-md-7 ">
  <button type="submit" name="button" class="btn btn-primary"> <i class="glyphicon glyphicon-ok"> GUARDAR</i></button>
  <a href="<?php echo site_url("conductores/index") ?>" class="btn btn-danger"> <i class="glyphicon glyphicon-remove"></i> CANCELAR </a>
  </div>
  </div>

</form>

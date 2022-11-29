<legend class="text-center">
  <i class="glyphicon glyphicon-useer"></i><b>Agregar socios</b>
</legend>
<form class="" action="<?php echo site_url("socios/guardarSocios "); ?>" method="post">

  <div class="row">
  <div class="col-md-4 text-right">
  <label for="">Nombre:</label>
  </div>
  <div class="col-md-4">
  <input type="text" name="no_so" value="" class="form-control" placeholder="Ingrese su nombre" required>
  </div>
  </div>

  <div class="row">
  <div class="col-md-4 text-right">
  <label for="">Apellido:</label>
  </div>
  <div class="col-md-4">
  <input type="text" name="ap_so" value="" class="form-control" placeholder="Ingrese su apellido" required>
  </div>
  </div>

  <div class="row">
  <div class="col-md-4 text-right">
  <label for="">Numero de cedula:</label>
  </div>
  <div class="col-md-4">
  <input type="text" name="nc_so" value="" class="form-control" placeholder="Ingrese su numero de cedula" required>
  </div>
  </div>

  <div class="row">
  <div class="col-md-4 text-right">
  <label for="">Telefono:</label>
  </div>
  <div class="col-md-4">
  <input type="text" name="te_so" value="" class="form-control" placeholder="Ingrese numero de Telefono" required>
  </div>
  </div>

  <div class="row">
  <div class="col-md-4 text-right">
  <label for="">Correo electronico:</label>
  </div>
  <div class="col-md-4">
  <input type="text" name="co_so" value="" class="form-control" placeholder="Ingrese correro" required>
  </div>
  </div>


   <div class="row">
   <div class="col-md-5">
   </div>
   <div class="col-md-7 ">
    <button type="submit" name="button" class="btn btn-primary"> <i class="glyphicon glyphicon-ok"> GUARDAR</i></button>
    <a href="<?php echo site_url("viajes/index") ?>" class="btn btn-danger"> <i class="glyphicon glyphicon-remove"></i> CANCELAR </a>
   </div>
   </div>


</form>

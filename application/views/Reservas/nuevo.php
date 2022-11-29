<legend class="text-center">
  <i class="glyphicon glyphicon-useer"></i><b>Agregar Reservas</b>
</legend>
<form class="" action="<?php echo site_url("reservas/guardarReservas"); ?>" method="post">

  <div class="row">
  <div class="col-md-4 text-right">
  <label for="">Nombre de la reserva:</label>
  </div>
  <div class="col-md-4">
  <input type="text" name="no_re" value="" class="form-control" placeholder="Ingrese destino" required>
  </div>
  </div>

  <div class="row">
  <div class="col-md-4 text-right">
  <label for="">Numero de personas:</label>
  </div>
  <div class="col-md-4">
  <input type="text" name="nu_re" value="" class="form-control" placeholder="Ingrese retorno" required>
  </div>
  </div>

  <div class="row">
  <div class="col-md-4 text-right">
  <label for="">Origen de salida:</label>
  </div>
  <div class="col-md-4">
  <input type="text" name="or_re" value="" class="form-control" placeholder="Ingrese destino" required>
  </div>
  </div>

  <div class="row">
  <div class="col-md-4 text-right">
  <label for="">Origen de destino:</label>
  </div>
  <div class="col-md-4">
  <input type="text" name="od_re" value="" class="form-control" placeholder="Ingrese destino" required>
  </div>
  </div>

  <div class="row">
  <div class="col-md-4 text-right">
  <label for="">Origen de regreso:</label>
  </div>
  <div class="col-md-4">
  <input type="text" name="oe_re" value="" class="form-control" placeholder="Ingrese destino" required>
  </div>
  </div>

  <div class="row">
  <div class="col-md-4 text-right">
  <label for="">Fecha de salida:</label>
  </div>
  <div class="col-md-4">
  <input type="date" name="fe_re" value="" class="form-control" placeholder="Ingresese hora de salida" required>
  </div>
  </div>

  <div class="row">
  <div class="col-md-4 text-right">
  <label for="">Fecha de regreso:</label>
  </div>
  <div class="col-md-4">
  <input type="date" name="fs_re" value="" class="form-control" placeholder="Ingrese hora de llegada" required>
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

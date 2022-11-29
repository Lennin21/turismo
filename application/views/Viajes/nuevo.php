<legend class="text-center">
  <i class="glyphicon glyphicon-useer"></i><b>Agregar  Viajes</b>
</legend>
<form class="" action="<?php echo site_url("viajes/guardarViajes"); ?>" method="post">

  <div class="row">
  <div class="col-md-4 text-right">
  <label for="">Valor del viaje:</label>
  </div>
  <div class="col-md-4">
  <input type="number" name="vi_vi" value="" class="form-control" placeholder="Ingrese valor del viaje" required>
  </div>
  </div>

  <div class="row">
  <div class="col-md-4 text-right">
  <label for="">Lugar de Destino:</label>
  </div>
  <div class="col-md-4">
  <input type="text" name="de_vi" value="" class="form-control" placeholder="Ingrese destino" required>
  </div>
  </div>

  <div class="row">
  <div class="col-md-4 text-right">
  <label for="">Fecha de salida:</label>
  </div>
  <div class="col-md-4">
  <input type="date" name="ho_vi" value="" class="form-control" placeholder="Ingresese hora de salida" required>
  </div>
  </div>


  <div class="row">
  <div class="col-md-4 text-right">
  <label for="">Fecha de llegada:</label>
  </div>
  <div class="col-md-4">
  <input type="date" name="holl_vi" value="" class="form-control" placeholder="Ingrese hora de llegada" required>
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

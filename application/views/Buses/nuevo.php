<legend class="text-center">
  <i class="glyphicon glyphicon-useer"></i><b>Agregar  buses</b>
</legend>
<form class="" action="<?php echo site_url("buses/guardarBuses"); ?>" method="post">


  <div class="row">
    <div class="col-md-4  text-right">
    <label for="">Seleccione tipo de unidad: </label><br>
    </div>
    <div class="col-md-4">
        <select class="form-control" name="ti_bu" id="ti_bub" required>
              <option value="SELECCIONE">SELECCIONE</option>
              <option value="Bus">Bus</option>
              <option value="Buseta">Buseta</option>
              <option value="Micro-bus">Micro-bus</option>
            </select>
    </div>
    </div>

    <div class="row">
    <div class="col-md-4 text-right">
    <label for="">Numero de unidad</label>
    </div>
    <div class="col-md-4">
    <input type="number" name="nu_bu" value="" class="form-control" placeholder="Ingrese numero de unidad" required>
    </div>
    </div>

    <div class="row">
    <div class="col-md-4 text-right">
    <label for="">Capacidad:</label>
    </div>
    <div class="col-md-4">
    <input type="text" name="ca_bu" value="" class="form-control" placeholder="Ingrese capacidad" required>
    </div>
    </div>

    <div class="row">
    <div class="col-md-4 text-right">
    <label for="">Observaciones:</label>
    </div>
    <div class="col-md-4">
    <input type="text" name="ob_bu" value="" class="form-control" placeholder="Ingrese capacidad" required>
    </div>
    </div>


   <div class="row">
   <div class="col-md-5">
   </div>
   <div class="col-md-7 ">
    <button type="submit" name="button" class="btn btn-primary"> <i class="glyphicon glyphicon-ok"> GUARDAR</i></button>
    <a href="<?php echo site_url("buses/index") ?>" class="btn btn-danger"> <i class="glyphicon glyphicon-remove"></i> CANCELAR </a>
   </div>
   </div>


</form>

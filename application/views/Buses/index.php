<legend class="text-center"> <i class="glyphicon glyphicon-hand-right"></i> <b>Conductores agregados</b>
  <div class="row text-center">
    <div class="col-md-12">
    </div>
      </button>
   <a href="<?php echo site_url("buses/nuevo") ?>" class="btn btn-danger"> <i class="glyphicon glyphicon-screenshot"></i> Agregar </a>
    </div>
</legend>
<hr>
<?php if ($listadoBuses): ?>
  <table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th class="text-center">ID</th>
      <th class="text-center">Tipo de unidad</th>
      <th class="text-center">Numero de unidad</th>
      <th class="text-center">Capacidad</th>
      <th class="text-center">Observaciones</th>
      <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($listadoBuses->result() as $buseTemporal): ?>
      <tr>
        <td class="text-center"><?php echo $buseTemporal->id_bu ?></td>
        <td class="text-center"> <?php echo $buseTemporal->ti_bu ?></td>
        <td class="text-center"> <?php echo $buseTemporal->nu_bu ?></td>
        <td class="text-center"> <?php echo $buseTemporal->ca_bu ?></td>
        <td class="text-center"> <?php echo $buseTemporal->ob_bu ?></td>

        <td class="text-center">
        <a  href="<?php echo site_url("buses/actualizar");?>/<?php echo $buseTemporal->id_bu;?>"class="btn btn-warning">
        <i class="glyphicon glyphicon-edit"></i>Editar</a>
        <a  href="<?php echo site_url("buses/borrar");?>/<?php echo $buseTemporal->id_bu;?>"class="btn btn-danger" onclick="return confirm('Esta seguro de eliminar');">
        <i class="glyphicon glyphicon-trash" ></i>Elimiar</a>
      </tr>
    <?php endforeach; ?>
  </tbody>
  </table>
<?php else: ?>
  <h3><b>No existe buses</b></h3>
<?php endif; ?>

<legend class="text-center"> <i class="glyphicon glyphicon-hand-right"></i> <b>Conductores agregados</b>
  <div class="row text-center">
    <div class="col-md-12">
    </div>
      </button>
   <a href="<?php echo site_url("conductores/nuevo") ?>" class="btn btn-danger"> <i class="glyphicon glyphicon-screenshot"></i> Agregar </a>
    </div>
</legend>
<hr>
<?php if ($listadoConductores): ?>
  <table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th class="text-center">ID</th>
      <th class="text-center">Nombre</th>
      <th class="text-center">Apellido</th>
      <th class="text-center">Cedula</th>
      <th class="text-center">Telefono</th>
      <th class="text-center">Tipo licencia</th>
      <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($listadoConductores->result() as $conductoreTemporal): ?>
      <tr>
        <td class="text-center"><?php echo $conductoreTemporal->id_co ?></td>
        <td class="text-center"> <?php echo $conductoreTemporal->nombre_co ?></td>
        <td class="text-center"> <?php echo $conductoreTemporal->ape_co ?></td>
        <td class="text-center"> <?php echo $conductoreTemporal->ce_co ?></td>
        <td class="text-center"> <?php echo $conductoreTemporal->tele_co ?></td>
        <td class="text-center"> <?php echo $conductoreTemporal->ti_co ?></td>
        <td class="text-center">
        <a  href="<?php echo site_url("conductores/actualizar");?>/<?php echo $conductoreTemporal->id_co;?>"class="btn btn-warning">
        <i class="glyphicon glyphicon-edit"></i>Editar</a>
        <a  href="<?php echo site_url("conductores/borrar");?>/<?php echo $conductoreTemporal->id_co;?>"class="btn btn-danger" onclick="return confirm('Esta seguro de eliminar');">
        <i class="glyphicon glyphicon-trash" ></i>Elimiar</a>
      </tr>
    <?php endforeach; ?>
  </tbody>
  </table>
<?php else: ?>
  <h3><b>No existe conductores</b></h3>
<?php endif; ?>

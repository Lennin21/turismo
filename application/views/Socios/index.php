<legend class="text-center"> <i class="glyphicon glyphicon-hand-right"></i> <b>Socios agregados</b>
  <div class="row text-center">
    <div class="col-md-12">
    </div>
      </button>
   <a href="<?php echo site_url("socios/nuevo") ?>" class="btn btn-danger"> <i class="glyphicon glyphicon-screenshot"></i> Agregar </a>
    </div>
</legend>
<hr>
<?php if ($listadoSocios): ?>
  <table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th class="text-center">ID</th>
      <th class="text-center">Nombre</th>
      <th class="text-center">Apellido</th>
      <th class="text-center">Numero de cedula</th>
      <th class="text-center">Telefono</th>
      <th class="text-center">Correo electronico</th>
      <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($listadoSocios->result() as $socioTemporal): ?>
      <tr>
        <td class="text-center"><?php echo $socioTemporal->id_so ?></td>
        <td class="text-center"> <?php echo $socioTemporal->no_so ?></td>
        <td class="text-center"> <?php echo $socioTemporal->ap_so ?></td>
        <td class="text-center"> <?php echo $socioTemporal->nc_so ?></td>
        <td class="text-center"> <?php echo $socioTemporal->te_so ?></td>
        <td class="text-center"> <?php echo $socioTemporal->co_so ?></td>
        <td class="text-center">
        <a  href="<?php echo site_url("socios/actualizar");?>/<?php echo $socioTemporal->id_so;?>"class="btn btn-warning">
        <i class="glyphicon glyphicon-edit"></i>Editar</a>
        <a  href="<?php echo site_url("socios/borrar");?>/<?php echo $socioTemporal->id_so;?>"class="btn btn-danger" onclick="return confirm('Esta seguro de eliminar');">
        <i class="glyphicon glyphicon-trash" ></i>Elimiar</a>
      </tr>
    <?php endforeach; ?>
  </tbody>
  </table>
<?php else: ?>
  <h3><b>No existe reservas</b></h3>
<?php endif; ?>

<legend class="text-center"> <i class="glyphicon glyphicon-hand-right"></i> <b>Reservas agregadas</b>
  <div class="row text-center">
    <div class="col-md-12">
    </div>
      </button>
   <a href="<?php echo site_url("reservas/nuevo") ?>" class="btn btn-danger"> <i class="glyphicon glyphicon-screenshot"></i> Agregar </a>
    </div>
</legend>
<hr>
<?php if ($listadoReservas): ?>
  <table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th class="text-center">ID</th>
      <th class="text-center">Nombre de reserva</th>
      <th class="text-center">Numero de personas</th>
      <th class="text-center">Origen de salida</th>
      <th class="text-center">Origen de destino</th>
      <th class="text-center">Origen deregreso</th>
      <th class="text-center">Fecha salida</th>
      <th class="text-center">Fecha regreso</th>
      <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($listadoReservas->result() as $reservaTemporal): ?>
      <tr>
        <td class="text-center"><?php echo $reservaTemporal->id_re ?></td>
        <td class="text-center"> <?php echo $reservaTemporal->no_re ?></td>
        <td class="text-center"> <?php echo $reservaTemporal->nu_re ?></td>
        <td class="text-center"> <?php echo $reservaTemporal->or_re ?></td>
        <td class="text-center"> <?php echo $reservaTemporal->od_re ?></td>
        <td class="text-center"> <?php echo $reservaTemporal->oe_re ?></td>
        <td class="text-center"> <?php echo $reservaTemporal->fe_re ?></td>
        <td class="text-center"> <?php echo $reservaTemporal->fs_re ?></td>
        <td class="text-center">
        <a  href="<?php echo site_url("reservas/actualizar");?>/<?php echo $reservaTemporal->id_re;?>"class="btn btn-warning">
        <i class="glyphicon glyphicon-edit"></i>Editar</a>
        <a  href="<?php echo site_url("reservas/borrar");?>/<?php echo $reservaTemporal->id_re;?>"class="btn btn-danger" onclick="return confirm('Esta seguro de eliminar');">
        <i class="glyphicon glyphicon-trash" ></i>Elimiar</a>
      </tr>
    <?php endforeach; ?>
  </tbody>
  </table>
<?php else: ?>
  <h3><b>No existe reservas</b></h3>
<?php endif; ?>

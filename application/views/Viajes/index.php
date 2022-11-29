<legend class="text-center"> <i class="glyphicon glyphicon-hand-right"></i> <b> Viajes agregados</b>
  <div class="row text-center">
    <div class="col-md-12">
    </div>
      </button>
   <a href="<?php echo site_url("viajes/nuevo") ?>" class="btn btn-danger"> <i class="glyphicon glyphicon-screenshot"></i> Agregar </a>
    </div>
</legend>
<?php if ($listadoViajes): ?>
 <table class="table table-striped table-bordered table-hover">
<thead>
  <tr>
    <th class="text-center">ID</th>
    <th class="text-center">Valor del viaje</th>
    <th class="text-center">Lugar de Destino</th>
    <th class="text-center">Fecha de salida</th>
    <th class="text-center">Fecha de llegada</th>
    <th class="text-center">Acciones</th>
  </tr>
</thead>
<tbody>
  <?php foreach ($listadoViajes->result() as $viajeTemporal): ?>
    <tr>
      <td class="text-center"><?php echo $viajeTemporal->id_vi; ?></td>
      <td class="text-center"><?php echo $viajeTemporal->vi_vi; ?></td>
      <td class="text-center"><?php echo $viajeTemporal->de_vi; ?></td>
      <td class="text-center"><?php echo $viajeTemporal->ho_vi; ?></td>
      <td class="text-center"><?php echo $viajeTemporal->holl_vi; ?></td>
      <td class="text-center">
      <a  href="<?php echo site_url("viajes/actualizar");?>/<?php echo $viajeTemporal->id_vi;?>"class="btn btn-warning">
      <i class="glyphicon glyphicon-edit"></i>Editar</a>
      <a  href="<?php echo site_url("viajes/borrar");?>/<?php echo $viajeTemporal->id_vi;?>"class="btn btn-danger" onclick="return confirm('Esta seguro de eliminar');">
      <i class="glyphicon glyphicon-trash"></i>Elimiar</a>
    </tr>
  <?php endforeach; ?>
</tbody>
</table>
<?php else: ?>
<h2><b>No existe Viajes</b></h2>
<?php endif; ?>

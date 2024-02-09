<style>
  .card {
    border: 1px solid white;
  }
</style>

<?php
$totalImpuestos = 0;
$mostSeatsStadium = null;

if ($listadoImpuestos) {
    $totalImpuestos = sizeof($listadoImpuestos);
    $maxSeats = PHP_INT_MIN;

    foreach ($listadoImpuestos as $impuestoTemporal) {
    }
}
?>

<div class="row">
  <div class="col-md-12">
    <h1 class="text-center"><i class=""></i> LISTADO DE IMPUESTOS</h1>
  </div>
</div>
<center>
  <a href="<?php echo site_url('impuestos/nuevo'); ?>" class="btn btn-success">
    <i class="glyphicon glyphicon-plus"></i> Agregar Perfil</a>
</center>
<br>
</div>
<br>
<?php if ($listadoImpuestos): ?>

  <div class="table-responsive" style="margin: 2 120px">
    <table class="table table-striped table-bordered table-hover" id="tbl_perfiles">
      <thead>
        <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>DESCRIPCION</th>
          <th>PORCENTAJE</th>
          <th>RETENCION</th>
          <th>ESTADO</th>
          <th>CREACION</th>
          <th>ACTUALIZACION</th>
          <th>ACTIONS</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($listadoImpuestos as $impuestoTemporal): ?>
          <tr>
            <td><?php echo $impuestoTemporal->id_imp ?></td>
            <td><?php echo $impuestoTemporal->nombre_imp ?></td>
            <td><?php echo $impuestoTemporal->descripcion_imp ?></td>
            <td><?php echo $impuestoTemporal->porcentaje_imp ?></td>
            <td><?php echo $impuestoTemporal->retencion_imp ?></td>
            <td><?php echo $impuestoTemporal->estado_imp ?></td>
            <td><?php echo $impuestoTemporal->creacion_imp ?></td>
            <td><?php echo $impuestoTemporal->actualizacion_imp ?></td>

            <td class="text-center">
              <a href="<?php echo site_url(); ?>/impuestos/actualizar/<?php echo $impuestoTemporal->id_imp; ?>" title="Editar perfil">
                <button type="submit" name="button" class="btn btn-warning">
                  <i class="glyphicon glyphicon-pencil"></i>
                  Edit
                </button>
              </a>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo site_url(); ?>/impuestos/borrar/<?php echo $impuestoTemporal->id_imp; ?>" title="Eliminar perfil" onclick="return confirm('Are you sure to delete permanently?');" style="color: red;">
                <button type="submit" name="button" class="btn btn-danger">
                  <i class="glyphicon glyphicon-trash"></i>
                  Delete
                </button>
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php else: ?>
  <h1>There are no places</h1>
<?php endif; ?>

<br>
<div class="row" style="margin: 0 120px;">


  <div class="col-md-4">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">
          <img src="<?php echo base_url(); ?>/assets/image/kpi1.png" alt="" width="250" height="200">
          <?php echo $totalImpuestos; ?>
        </h5>
        <p class="card-text">Registro de Impuestos</p>
      </div>
    </div>
  </div>
</div>
<br>

<script type="text/javascript">
  $("#tbl_impuestos").DataTable();
</script>

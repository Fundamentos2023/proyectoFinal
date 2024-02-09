<style>
  .card {
    border: 1px solid white;
  }
</style>

<?php
$totalMedidores = 0;
$mostSeatsStadium = null;

if ($listadoMedidores) {
    $totalMedidores = sizeof($listadoMedidores);
    $maxSeats = PHP_INT_MIN;

    foreach ($listadoMedidores as $medidorTemporal) {
    }
}
?>

<div class="row">
  <div class="col-md-12">
    <h1 class="text-center"><i class=""></i> LISTADO DE MEDIDOR</h1>
  </div>
</div>
<center>
  <a href="<?php echo site_url('medidores/nuevo'); ?>" class="btn btn-success">
    <i class="glyphicon glyphicon-plus"></i> Agregar Medidor</a>
</center>
<br>
</div>
<br>
<?php if ($listadoMedidores): ?>

  <div class="table-responsive" style="margin: 2 120px">
    <table class="table table-striped table-bordered table-hover" id="tbl_medidores">
      <thead>
        <tr>
          <th>ID</th>
          <th>FK_ID_RUT</th>
          <th>FK_ID_TAR</th>
          <th>NUMERO</th>
          <th>SERIE</th>
          <th>MARCA</th>
          <th>OBSERVACION</th>
          <th>ESTADO</th>
          <th>FOTO</th>
          <th>CREACION</th>
          <th>ACTUALIZACION</th>
          <th>LECTURA INICIAL</th>
          <th>ACTIONS</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($listadoMedidores as $medidorTemporal): ?>
          <tr>
            <td><?php echo $medidorTemporal->id_med ?></td>
            <td><?php echo $medidorTemporal->fk_id_rut ?></td>
            <td><?php echo $medidorTemporal->fk_id_tar ?></td>
            <td><?php echo $medidorTemporal->numero_med ?></td>
            <td><?php echo $medidorTemporal->serie_med ?></td>
            <td><?php echo $medidorTemporal->marca_med ?></td>
            <td><?php echo $medidorTemporal->observacion_med ?></td>
            <td><?php echo $medidorTemporal->estado_med ?></td>
            <td><?php echo $medidorTemporal->foto_med ?></td>
            <td><?php echo $medidorTemporal->creacion_med ?></td>
            <td><?php echo $medidorTemporal->actualizacion_med ?></td>
            <td><?php echo $medidorTemporal->lectura_inicial_med ?></td>

            <td class="text-center">
              <a href="<?php echo site_url(); ?>/medidores/actualizar/<?php echo $medidorTemporal->id_med; ?>" title="Editar Medidor">
                <button type="submit" name="button" class="btn btn-warning">
                  <i class="glyphicon glyphicon-pencil"></i>
                  Edit
                </button>
              </a>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo site_url(); ?>/medidores/borrar/<?php echo $medidorTemporal->id_med; ?>" title="Eliminar perfil" onclick="return confirm('Are you sure to delete permanently?');" style="color: red;">
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
          <?php echo $totalMedidores; ?>
        </h5>
        <p class="card-text">Registro de Medidores</p>
      </div>
    </div>
  </div>
</div>
<br>

<script type="text/javascript">
  $("#tbl_medidores").DataTable();
</script>

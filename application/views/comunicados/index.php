<style>
  .card {
    border: 1px solid white;
  }
</style>

<?php
$totalComunicados = 0;
$mostSeatsStadium = null;

if ($listadoComunicados) {
    $totalComunicados = sizeof($listadoComunicados);
    $maxSeats = PHP_INT_MIN;

    foreach ($listadoComunicados as $comunicadoTemporal) {
    }
}
?>

<div class="row">
  <div class="col-md-12">
    <h1 class="text-center"><i class=""></i> LISTADO DE COMUNICADOS</h1>
  </div>
</div>
<center>
  <a href="<?php echo site_url('comunicados/nuevo'); ?>" class="btn btn-success">
    <i class="glyphicon glyphicon-plus"></i> Agregar Comunicado</a>
</center>
<br>
</div>
<br>
<?php if ($listadoComunicados): ?>

  <div class="table-responsive" style="margin: 2 120px">
    <table class="table table-striped table-bordered table-hover" id="tbl_comunicados">
      <thead>
        <tr>
          <th>ID</th>
          <th>FECHA</th>
          <th>MENSAJE</th>
          <th>ACTUALIZAR</th>
          <th>CREACION</th>
          <th>ACTIONS</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($listadoComunicados as $comunicadoTemporal): ?>
          <tr>
            <td><?php echo $comunicadoTemporal->id_com ?></td>
            <td><?php echo $comunicadoTemporal->fecha_com ?></td>
            <td><?php echo $comunicadoTemporal->mensaje_com ?></td>
            <td><?php echo $comunicadoTemporal->actualizacion_com ?></td>
            <td><?php echo $comunicadoTemporal->creacion_com ?></td>

            <td class="text-center">
              <a href="<?php echo site_url(); ?>/comunicados/actualizar/<?php echo $comunicadoTemporal->id_com; ?>" title="Editar comunicado">
                <button type="submit" name="button" class="btn btn-warning">
                  <i class="glyphicon glyphicon-pencil"></i>
                  Edit
                </button>
              </a>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo site_url(); ?>/comunicados/borrar/<?php echo $comunicadoTemporal->id_com; ?>" title="Eliminar comunicado" onclick="return confirm('Are you sure to delete permanently?');" style="color: red;">
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
  <h1>No hay ningun dato</h1>
<?php endif; ?>

<br>
<div class="row" style="margin: 0 120px;">


  <div class="col-md-4">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">
          <img src="<?php echo base_url(); ?>/assets/image/kpi1.png" alt="" width="250" height="200">
          <?php echo $totalComunicados; ?>
        </h5>
        <p class="card-text">Registro de Comunicado</p>
      </div>
    </div>
  </div>
</div>
<br>

<script type="text/javascript">
  $("#tbl_comunicados").DataTable();
</script>

<style>
  .card {
    border: 1px solid white;
  }
</style>

<?php
$totaltipo_Eventos = 0;
$mostSeatsStadium = null;

if ($listadotipo_Eventos) {
    $totaltipo_Eventos = sizeof($listadotipo_Eventos);
    $maxSeats = PHP_INT_MIN;

    foreach ($listadotipo_Eventos as $tipo_eventoTemporal) {
    }
}
?>

<div class="row">
  <div class="col-md-12">
    <h1 class="text-center"><i class=""></i> LISTADO DE EVENTOS</h1>
  </div>
</div>
<center>
  <a href="<?php echo site_url('tipo_eventos/nuevo'); ?>" class="btn btn-success">
    <i class="glyphicon glyphicon-plus"></i> Agregar evento</a>
</center>
<br>
</div>
<br>
<?php if ($listadotipo_Eventos): ?>

  <div class="table-responsive" style="margin: 2 120px">
    <table class="table table-striped table-bordered table-hover" id="tbl_tipo_eventos">
      <thead>
        <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>ESTADO</th>
          <th>CREACION</th>
          <th>ACTUALIZACION</th>
          <th>ACTIONS</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($listadotipo_Eventos as $tipo_eventoTemporal): ?>
          <tr>
            <td><?php echo $tipo_eventoTemporal->id_te ?></td>
            <td><?php echo $tipo_eventoTemporal->nombre_te ?></td>
            <td><?php echo $tipo_eventoTemporal->estado_te ?></td>
            <td><?php echo $tipo_eventoTemporal->creacion_te ?></td>
            <td><?php echo $tipo_eventoTemporal->actualizacion_te ?></td>

            <td class="text-center">
              <a href="<?php echo site_url(); ?>/tipo_eventos/actualizar/<?php echo $tipo_eventoTemporal->id_te; ?>" title="Editar evento">
                <button type="submit" name="button" class="btn btn-warning">
                  <i class="glyphicon glyphicon-pencil"></i>
                  Edit
                </button>
              </a>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo site_url(); ?>/tipo_eventos/borrar/<?php echo $tipo_eventoTemporal->id_te; ?>" title="Eliminar evento" onclick="return confirm('Are you sure to delete permanently?');" style="color: red;">
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
          <?php echo $totaltipo_Eventos; ?>
        </h5>
        <p class="card-text">Registro de evento</p>
      </div>
    </div>
  </div>
</div>
<br>

<script type="text/javascript">
  $("#tbl_tipo_eventos").DataTable();
</script>

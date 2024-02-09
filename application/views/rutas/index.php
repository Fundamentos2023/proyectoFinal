<style>
  .card {
    border: 1px solid white;
  }
</style>

<?php
$totalRutas = 0;
$mostSeatsStadium = null;

if ($listadoRutas) {
    $totalRutas = sizeof($listadoRutas);
    $maxSeats = PHP_INT_MIN;

    foreach ($listadoRutas as $rutaTemporal) {
    }
}
?>

<div class="row">
  <div class="col-md-12">
    <h1 class="text-center"><i class=""></i> LISTADO DE RUTAS</h1>
  </div>
</div>
<center>
  <a href="<?php echo site_url('rutas/nuevo'); ?>" class="btn btn-success">
    <i class="glyphicon glyphicon-plus"></i> Agregar Rutas</a>
</center>
<br>
</div>
<br>
<?php if ($listadoRutas): ?>

  <div class="table-responsive" style="margin: 2 120px">
    <table class="table table-striped table-bordered table-hover" id="tbl_rutas">
      <thead>
        <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>DESCRIPCION</th>
          <th>ESTADO</th>
          <th>ACTIONS</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($listadoRutas as $rutaTemporal): ?>
          <tr>
            <td><?php echo $rutaTemporal->id_rut ?></td>
            <td><?php echo $rutaTemporal->nombre_rut ?></td>
            <td><?php echo $rutaTemporal->descripcion_rut ?></td>
            <td><?php echo $rutaTemporal->estado_rut ?></td>

            <td class="text-center">
              <a href="<?php echo site_url(); ?>/rutas/actualizar/<?php echo $rutaTemporal->id_rut; ?>" title="Editar ruta">
                <button type="submit" name="button" class="btn btn-warning">
                  <i class="glyphicon glyphicon-pencil"></i>
                  Edit
                </button>
              </a>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo site_url(); ?>/rutas/borrar/<?php echo $rutaTemporal->id_rut; ?>" title="Eliminar perfil" onclick="return confirm('Are you sure to delete permanently?');" style="color: red;">
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
          <?php echo $totalRutas; ?>
        </h5>
        <p class="card-text">Registro de Rutas</p>
      </div>
    </div>
  </div>
</div>
<br>

<script type="text/javascript">
  $("#tbl_rutas").DataTable();
</script>

<style>
  .card {
    border: 1px solid white;
  }
</style>

<?php
$totalTarifas = 0;
$mostSeatsStadium = null;

if ($listadoTarifas) {
    $totalTarifas = sizeof($listadoTarifas);
    $maxSeats = PHP_INT_MIN;

    foreach ($listadoTarifas as $tarifaTemporal) {
    }
}
?>

<div class="row">
  <div class="col-md-12">
    <h1 class="text-center"><i class=""></i> LISTADO DE TARIFAS</h1>
  </div>
</div>
<center>
  <a href="<?php echo site_url('tarifas/nuevo'); ?>" class="btn btn-success">
    <i class="glyphicon glyphicon-plus"></i> Agregar Tarifa</a>
</center>
<br>
</div>
<br>
<?php if ($listadoTarifas): ?>

  <div class="table-responsive" style="margin: 2 120px">
    <table class="table table-striped table-bordered table-hover" id="tbl_tarifas">
      <thead>
        <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>DESCRIPCION</th>
          <th>ESTADO</th>
          <th>M3 MAXIMO</th>
          <th>TARIFA BASICA</th>
          <th>TARIFA EXCEDENTE</th>
          <th>VALOR MORA</th>
          <th>ACTIONS</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($listadoTarifas as $tarifaTemporal): ?>
          <tr>
            <td><?php echo $tarifaTemporal->id_tar ?></td>
            <td><?php echo $tarifaTemporal->nombre_tar ?></td>
            <td><?php echo $tarifaTemporal->descripcion_tar ?></td>
            <td><?php echo $tarifaTemporal->estado_tar ?></td>
            <td><?php echo $tarifaTemporal->m3_maximo_tar ?></td>
            <td><?php echo $tarifaTemporal->tarifa_basica_tar ?></td>
            <td><?php echo $tarifaTemporal->tarifa_excedente_tar ?></td>
            <td><?php echo $tarifaTemporal->valor_mora_tar ?></td>


            <td class="text-center">
              <a href="<?php echo site_url(); ?>/tarifas/actualizar/<?php echo $tarifaTemporal->id_tar; ?>" title="Editar tarifa">
                <button type="submit" name="button" class="btn btn-warning">
                  <i class="glyphicon glyphicon-pencil"></i>
                  Edit
                </button>
              </a>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo site_url(); ?>/tarifas/borrar/<?php echo $tarifaTemporal->id_tar; ?>" title="Eliminar tarifa" onclick="return confirm('Are you sure to delete permanently?');" style="color: red;">
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
          <?php echo $totalTarifas; ?>
        </h5>
        <p class="card-text">Registro de Tarifas</p>
      </div>
    </div>
  </div>
</div>
<br>

<script type="text/javascript">
  $("#tbl_tarifas").DataTable();
</script>

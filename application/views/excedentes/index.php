<style>
  .card {
    border: 1px solid white;
  }
</style>

<?php
$totalExcedentes = 0;
$mostSeatsStadium = null;

if ($listadoExcedentes) {
    $totalExcedentes = sizeof($listadoExcedentes);
    $maxSeats = PHP_INT_MIN;

    foreach ($listadoExcedentes as $excedenteTemporal) {
    }
}
?>

<div class="row">
  <div class="col-md-12">
    <h1 class="text-center"><i class=""></i> LISTADO DE EXCEDENTES</h1>
  </div>
</div>
<center>
  <a href="<?php echo site_url('excedentes/nuevo'); ?>" class="btn btn-success">
    <i class="glyphicon glyphicon-plus"></i> Agregar Excedente</a>
</center>
<br>
</div>
<br>
<?php if ($listadoExcedentes): ?>

  <div class="table-responsive" style="margin: 2 120px">
    <table class="table table-striped table-bordered table-hover" id="tbl_excedentes">
      <thead>
        <tr>
          <th>ID</th>
          <th>ID_TAR</th>
          <th>LIMITE MINIMO</th>
          <th>LIMITE MAXIMO</th>
          <th>TARIFA</th>
          <th>FECHA ACTUALIZACION</th>
          <th>FECHA CREACION</th>
          <th>ACTIONS</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($listadoExcedentes as $excedenteTemporal): ?>
          <tr>
            <td><?php echo $excedenteTemporal->id_ex ?></td>
            <td><?php echo $excedenteTemporal->id_tar ?></td>
            <td><?php echo $excedenteTemporal->limite_minimo_ex ?></td>
            <td><?php echo $excedenteTemporal->limite_maximo_ex ?></td>
            <td><?php echo $excedenteTemporal->tarifa_ex ?></td>
            <td><?php echo $excedenteTemporal->fecha_actualizacion_ex ?></td>
            <td><?php echo $excedenteTemporal->fecha_creacion_ex ?></td>

            <td class="text-center">
              <a href="<?php echo site_url(); ?>/excedentes/actualizar/<?php echo $excedenteTemporal->id_ex; ?>" title="Editar Excedente">
                <button type="submit" name="button" class="btn btn-warning">
                  <i class="glyphicon glyphicon-pencil"></i>
                  Edit
                </button>
              </a>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo site_url(); ?>/excedentes/borrar/<?php echo $excedenteTemporal->id_ex; ?>" title="Eliminar excedente" onclick="return confirm('Are you sure to delete permanently?');" style="color: red;">
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
          <?php echo $totalExcedentes; ?>
        </h5>
        <p class="card-text">Registro de Excedentes</p>
      </div>
    </div>
  </div>
</div>
<br>

<script type="text/javascript">
  $("#tbl_excedentes").DataTable();
</script>

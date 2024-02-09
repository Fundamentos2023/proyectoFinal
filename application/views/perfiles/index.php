<style>
  .card {
    border: 1px solid white;
  }
</style>

<?php
$totalPerfiles = 0;
$mostSeatsStadium = null;

if ($listadoPerfiles) {
    $totalPerfiles = sizeof($listadoPerfiles);
    $maxSeats = PHP_INT_MIN;

    foreach ($listadoPerfiles as $perfilTemporal) {
    }
}
?>

<div class="row">
  <div class="col-md-12">
    <h1 class="text-center"><i class=""></i> LISTADO DE PERFILES</h1>
  </div>
</div>
<center>
  <a href="<?php echo site_url('perfiles/nuevo'); ?>" class="btn btn-success">
    <i class="glyphicon glyphicon-plus"></i> Agregar Perfil</a>
</center>
<br>
</div>
<br>
<?php if ($listadoPerfiles): ?>

  <div class="table-responsive" style="margin: 2 120px">
    <table class="table table-striped table-bordered table-hover" id="tbl_perfiles">
      <thead>
        <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>DESCRIPCION</th>
          <th>ESTADO</th>
          <th>CREACION</th>
          <th>ACTUALIZACION</th>
          <th>ACTIONS</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($listadoPerfiles as $perfilTemporal): ?>
          <tr>
            <td><?php echo $perfilTemporal->id_per ?></td>
            <td><?php echo $perfilTemporal->nombre_per ?></td>
            <td><?php echo $perfilTemporal->descripcion_per ?></td>
            <td><?php echo $perfilTemporal->estado_per ?></td>
            <td><?php echo $perfilTemporal->creacion_per ?></td>
            <td><?php echo $perfilTemporal->actualizacion_per ?></td>

            <td class="text-center">
              <a href="<?php echo site_url(); ?>/perfiles/actualizar/<?php echo $perfilTemporal->id_per; ?>" title="Editar perfil">
                <button type="submit" name="button" class="btn btn-warning">
                  <i class="glyphicon glyphicon-pencil"></i>
                  Edit
                </button>
              </a>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo site_url(); ?>/perfiles/borrar/<?php echo $perfilTemporal->id_per; ?>" title="Eliminar perfil" onclick="return confirm('Are you sure to delete permanently?');" style="color: red;">
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
          <?php echo $totalPerfiles; ?>
        </h5>
        <p class="card-text">Registro de Perfil</p>
      </div>
    </div>
  </div>
</div>
<br>

<script type="text/javascript">
  $("#tbl_perfiles").DataTable();
</script>

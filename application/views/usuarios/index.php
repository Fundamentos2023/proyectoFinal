<style>
  .card {
    border: 1px solid white;
  }
</style>

<?php
$totalUsuarios = 0;
$mostSeatsStadium = null;

if ($listadoUsuarios) {
    $totalUsuarios = sizeof($listadoUsuarios);
    $maxSeats = PHP_INT_MIN;

    foreach ($listadoUsuarios as $usuarioTemporal) {
    }
}
?>

<div class="row">
  <div class="col-md-12">
    <h1 class="text-center"><i class=""></i> LISTADO DE USUARIOS</h1>
  </div>
</div>
<center>
  <a href="<?php echo site_url('usuarios/nuevo'); ?>" class="btn btn-success">
    <i class="glyphicon glyphicon-plus"></i> Agregar Usuario</a>
</center>
<br>
</div>
<br>
<?php if ($listadoUsuarios): ?>

  <div class="table-responsive" style="margin: 2 120px">
    <table class="table table-striped table-bordered table-hover" id="tbl_usuarios">
      <thead>
        <tr>
          <th>ID</th>
          <th>APELLIDO</th>
          <th>NOMBRE</th>
          <th>EMAIL</th>
          <th>PASSWORD</th>
          <th>ESTADO</th>
          <th>FK_ID_PER</th>
          <th>ACTIONS</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($listadoUsuarios as $usuarioTemporal): ?>
          <tr>
            <td><?php echo $usuarioTemporal->id_usu ?></td>
            <td><?php echo $usuarioTemporal->apellido_usu ?></td>
            <td><?php echo $usuarioTemporal->nombre_usu ?></td>
            <td><?php echo $usuarioTemporal->email_usu ?></td>
            <td><?php echo $usuarioTemporal->password_usu ?></td>
            <td><?php echo $usuarioTemporal->estado_usu ?></td>
            <td><?php echo $usuarioTemporal->fk_id_per ?></td>

            <td class="text-center">
              <a href="<?php echo site_url(); ?>/usuarios/actualizar/<?php echo $usuarioTemporal->id_usu; ?>" title="Editar Usuario">
                <button type="submit" name="button" class="btn btn-warning">
                  <i class="glyphicon glyphicon-pencil"></i>
                  Edit
                </button>
              </a>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo site_url(); ?>/usuarios/borrar/<?php echo $usuarioTemporal->id_usu; ?>" title="Eliminar perfil" onclick="return confirm('Are you sure to delete permanently?');" style="color: red;">
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
          <?php echo $totalUsuarios; ?>
        </h5>
        <p class="card-text">Registro de Usuario</p>
      </div>
    </div>
  </div>
</div>
<br>

<script type="text/javascript">
  $("#tbl_usuarios").DataTable();
</script>

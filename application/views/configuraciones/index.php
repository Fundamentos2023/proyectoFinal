<style>
  .card {
    border: 1px solid white;
  }
</style>

<?php
$totalConfiguraciones = 0;
$mostSeatsStadium = null;

if ($listadoConfiguraciones) {
    $totalConfiguraciones = sizeof($listadoConfiguraciones);
    $maxSeats = PHP_INT_MIN;

    foreach ($listadoConfiguraciones as $configuracionTemporal) {
    }
}
?>

<div class="row">
  <div class="col-md-12">
    <h1 class="text-center"><i class=""></i> LISTADO DE CONFIGURACION</h1>
  </div>
</div>
<center>
  <a href="<?php echo site_url('configuraciones/nuevo'); ?>" class="btn btn-success">
    <i class="glyphicon glyphicon-plus"></i> Agregar Configuracion</a>
</center>
<br>
</div>
<br>
<?php if ($listadoConfiguraciones): ?>

  <div class="table-responsive" style="margin: 2 120px">
    <table class="table table-striped table-bordered table-hover" id="tbl_configuraciones">
      <thead>
        <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>RUC</th>
          <th>LOGO</th>
          <th>TELEFONO</th>
          <th>DIRECCION</th>
          <th>EMAIL</th>
          <th>SERVIDOR</th>
          <th>PUERTO</th>
          <th>PASSWORD</th>
          <th>CREACION</th>
          <th>ACTUALIZACION</th>
          <th>AÑO_INICIAL</th>
          <th>MES_INICIAL</th>
          <th>ACTIONS</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($listadoConfiguraciones as $configuracionTemporal): ?>
          <tr>
            <td><?php echo $configuracionTemporal->id_con ?></td>
            <td><?php echo $configuracionTemporal->nombre_con ?></td>
            <td><?php echo $configuracionTemporal->ruc_con ?></td>
            <td><?php echo $configuracionTemporal->logo_con ?></td>
            <td><?php echo $configuracionTemporal->telefono_con ?></td>
            <td><?php echo $configuracionTemporal->direccion_con ?></td>
            <td><?php echo $configuracionTemporal->email_con ?></td>
            <td><?php echo $configuracionTemporal->servidor_con ?></td>
            <td><?php echo $configuracionTemporal->puerto_con ?></td>
            <td><?php echo $configuracionTemporal->password_con ?></td>
            <td><?php echo $configuracionTemporal->creacion_con ?></td>
            <td><?php echo $configuracionTemporal->actualizacion_con ?></td>
            <td><?php echo $configuracionTemporal->anio_inicial_con?></td>
            <td><?php echo $configuracionTemporal->mes_inicial_con?></td>

            <td class="text-center">
              <a href="<?php echo site_url(); ?>/configuraciones/actualizar/<?php echo $configuracionTemporal->id_con; ?>" title="Editar Configuracion">
                <button type="submit" name="button" class="btn btn-warning">
                  <i class="glyphicon glyphicon-pencil"></i>
                  Edit
                </button>
              </a>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo site_url(); ?>/configuraciones/borrar/<?php echo $configuracionTemporal->id_con; ?>" title="Eliminar Configuracion" onclick="return confirm('Are you sure to delete permanently?');" style="color: red;">
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
          <?php echo $totalConfiguraciones; ?>
        </h5>
        <p class="card-text">Registro de Configuracion</p>
      </div>
    </div>
  </div>
</div>
<br>

<script type="text/javascript">
  $("#tbl_configuraciones").DataTable();
</script>

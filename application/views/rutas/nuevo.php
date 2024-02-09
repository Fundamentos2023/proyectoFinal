<h1 class="text-center"><i class="glyphicon glyphicon-plus"></i> NUEVO PERFIL</h1>
<form class="" id="frm_nuevo_ruta" action="<?php echo site_url('rutas/guardarRuta'); ?>" method="post" enctype="multipart/form-data">

<center>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="nombre_rut">NOMBRES:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="nombre_rut" id="nombre_rut">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="descripcion_rut">DESCRIPCIÓN:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="descripcion_rut" id="descripcion_rut">
            </div>
        </div>
    </div>
</center>
<br>
<center>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="estado_rut">ESTADO:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="estado_rut" id="estado_rut">
            </div>
        </div>
        <div class="col-md-1">
        </div>
    </div>
</center>
<br>
    <div class="row">
        <div class="col-md-12 text-center">
            <br><br>
            <button type="submit" name="button" class="btn btn-success">
                <i class="glyphicon glyphicon-check"></i> Guardar
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/rutas/index" class="btn btn-danger">
                <i class="glyphicon glyphicon-ban-circle"></i> Cancelar
            </a>
        </div>
    </div>
</form>

<script type="text/javascript">
$("#frm_nuevo_ruta").validate({
    rules:{
        nombre_rut:{
            required:true,
        },
        descripcion_rut:{
          required:true,
        },
        estado_rut:{
          required:true,
        }
    },
    messages:{
        nombre_rut:{
            required:"Porfavor, ingrese el nombre",
        },
        descripcion_rut:{
            required:"Porfavor, ingrese la descripcion",
        },
        estado_rut:{
          required:"Porfavor, ingrese el estado",
        }
      }
});
</script>

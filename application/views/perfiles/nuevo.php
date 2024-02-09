<h1 class="text-center"><i class="glyphicon glyphicon-plus"></i> NUEVO PERFIL</h1>
<form class="" id="frm_nuevo_perfil" action="<?php echo site_url('perfiles/guardarPerfil'); ?>" method="post" enctype="multipart/form-data">

<center>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="nombre_per">NOMBRES:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="nombre_per" id="nombre_per">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="descripcion_per">DESCRIPCIÓN:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="descripcion_per" id="descripcion_per">
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
                <label for="estado_per">ESTADO:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="estado_per" id="estado_per">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="creacion_per">CREACIÓN:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="creacion_per" id="creacion_per">
            </div>
        </div>
    </div>
</center>
<br>
<center>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-9">
            <div class="form-group">
                <label for="actualizacion_per">ACTUALIZACIÓN:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="actualizacion_per" id="actualizacion_per">
            </div>
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
            <a href="<?php echo site_url(); ?>/registros/index" class="btn btn-danger">
                <i class="glyphicon glyphicon-ban-circle"></i> Cancelar
            </a>
        </div>
    </div>
</form>

<script type="text/javascript">
$("#frm_nuevo_registro").validate({
    rules:{
        nombre_per:{
            required:true,
        },
        descripcion_per:{
          required:true,
        },
        estado_per:{
          required:true,
        },
        creacion_per:{
          required:true,
        },
        actualizacion_per:{
          required:true,
        }
    },
    messages:{
        nombre_per:{
            required:"Porfavor, ingrese el nombre",
        },
        descripcion_per:{
            required:"Porfavor, ingrese el apellido",
        },
        estado_per:{
          required:"Porfavor, ingrese la edad",
        },
        creacion_per:{
          required:"Porfavor, ingrese el género",
        },
        actualizacion_per:{
          required:"Porfavor, ingrese el estado civil",
        }
      }
});
</script>

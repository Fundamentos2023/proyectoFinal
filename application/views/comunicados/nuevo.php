<h1 class="text-center"><i class="glyphicon glyphicon-plus"></i> NUEVO COMUNICADO</h1>
<form class="" id="frm_nuevo_comunicado" action="<?php echo site_url('comunicados/guardarComunicado'); ?>" method="post" enctype="multipart/form-data">

<center>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="fecha_com">FECHA:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="fecha_com" id="fecha_com">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="mensaje_com">MENSAJE:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="mensaje_com" id="mensaje_com">
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
                <label for="actualizacion_com">ACTUALIZACION:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="actualizacion_com" id="actualizacion_com">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="creacion_com">CREACIÓN:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="creacion_com" id="creacion_com">
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
            <a href="<?php echo site_url(); ?>/comunicados/index" class="btn btn-danger">
                <i class="glyphicon glyphicon-ban-circle"></i> Cancelar
            </a>
        </div>
    </div>
</form>

<script type="text/javascript">
$("#frm_nuevo_registro").validate({
    rules:{
        fecha_com:{
            required:true,
        },
        mensaje_com:{
          required:true,
        },
        actualizacion_com:{
          required:true,
        },
        creacion_com:{
          required:true,
        }
    },
    messages:{
        fecha_com:{
            required:"Porfavor, ingrese el nombre",
        },
        mensaje_com:{
            required:"Porfavor, ingrese el apellido",
        },
        actualizacion_com:{
          required:"Porfavor, ingrese la edad",
        },
        creacion_com:{
          required:"Porfavor, ingrese el género",
        }
      }
});
</script>

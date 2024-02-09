<h1 class="text-center"><i class="glyphicon glyphicon-plus"></i> NUEVO PERFIL</h1>
<form class="" id="frm_nuevo_impuesto" action="<?php echo site_url('impuestos/guardarImpuesto'); ?>" method="post" enctype="multipart/form-data">

<center>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="nombre_imp">NOMBRES:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="nombre_imp" id="nombre_imp">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="descripcion_imp">DESCRIPCIÓN:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="descripcion_imp" id="descripcion_imp">
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
                <label for="porcentaje_imp">PORCENTAJE:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="porcentaje_imp" id="porcentaje_imp">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="retencion_imp">RETENCION:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="retencion_imp" id="retencion_imp">
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
                <label for="estado_imp">ESTADO:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="estado_imp" id="estado_imp">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="creacion_imp">CREACION:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="creacion_imp" id="creacion_imp">
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
                <label for="actualizacion_imp">ACTUALIZACIÓN:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="actualizacion_imp" id="actualizacion_imp">
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
            <a href="<?php echo site_url(); ?>/impuestos/index" class="btn btn-danger">
                <i class="glyphicon glyphicon-ban-circle"></i> Cancelar
            </a>
        </div>
    </div>
</form>

<script type="text/javascript">
$("#frm_nuevo_impuesto").validate({
    rules:{
        nombre_imp:{
            required:true,
        },
        descripcion_imp:{
          required:true,
        },
        porcentaje_imp:{
          required:true,
        },
        retencion_imp:{
          required:true,
        },
        estado_imp:{
          required:true,
        },
        creacion_imp:{
          required:true,
        },
        actualizacion_imp:{
          required:true,
        }
    },
    messages:{
        nombre_imp:{
            required:"Porfavor, ingrese el nombre",
        },
        descripcion_imp:{
            required:"Porfavor, ingrese el apellido",
        },
        porcentaje_imp:{
          required:"Porfavor, ingrese la edad",
        },
        retencion_imp:{
          required:"Porfavor, ingrese el género",
        },
        estado_imp:{
          required:"Porfavor, ingrese el género",
        },
        creacion_imp:{
          required:"Porfavor, ingrese el género",
        },
        actualizacion_per:{
          required:"Porfavor, ingrese el estado civil",
        }
      }
});
</script>

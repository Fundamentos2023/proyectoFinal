<h1 class="text-center"><i class="glyphicon glyphicon-plus"></i> NUEVO EXCEDENTE</h1>
<form class="" id="frm_nuevo_excedente" action="<?php echo site_url('excedentes/guardarExcedente'); ?>" method="post" enctype="multipart/form-data">

<center>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="id_tar">ID_TAR:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese el apellido" class="form-control" required name="id_tar" id="id_tar">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="limite_minimo_ex">LIMITE MINIMO:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese el nombre" class="form-control" required name="limite_minimo_ex" id="limite_minimo_ex">
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
                <label for="limite_maximo_ex">LIMITE MAXIMO:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese el email" class="form-control" required name="limite_maximo_ex" id="limite_maximo_ex">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="tarifa_ex">TARIFA:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese la contraseña" class="form-control" required name="tarifa_ex" id="tarifa_ex">
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
                <label for="fecha_actualizacion_ex">FECHA ACTUALIZACION:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese el estado" class="form-control" required name="fecha_actualizacion_ex" id="fecha_actualizacion_ex">
            </div>
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="fecha_creacion_ex">FECHA CREACION:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese el id de perfil" class="form-control" required name="fecha_creacion_ex" id="fecha_creacion_ex">
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
            <a href="<?php echo site_url(); ?>/excedentes/index" class="btn btn-danger">
                <i class="glyphicon glyphicon-ban-circle"></i> Cancelar
            </a>
        </div>
    </div>
</form>

<script type="text/javascript">
$("#frm_nuevo_excedente").validate({
    rules:{
        id_tar:{
            required:true,
        },
        limite_minimo_ex:{
            required:true,
        },
        limite_maximo_ex:{
          required:true,
        },
        tarifa_ex:{
          required:true,
        },
        fecha_actualizacion_ex:{
          required:true,
        },
        fecha_creacion_ex:{
          required:true,
        }
    },
    messages:{
        id_tar:{
            required:"Porfavor, ingrese el apellido",
        },
        limite_minimo_ex:{
            required:"Porfavor, ingrese el nombre",
        },
        limite_maximo_ex:{
          required:"Porfavor, ingrese su email",
        },
        tarifa_ex:{
          required:"Porfavor, ingrese el password",
        },
        fecha_actualizacion_ex:{
          required:"Porfavor, ingrese el estado",
        },
        fecha_creacion_ex:{
          required:"Porfavor, ingreso id_per",
        }
      }
});
</script>

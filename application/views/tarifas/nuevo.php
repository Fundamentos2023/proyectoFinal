<h1 class="text-center"><i class="glyphicon glyphicon-plus"></i> NUEVA TARIFA</h1>
<form class="" id="frm_nuevo_tarifa" action="<?php echo site_url('tarifas/guardarTarifa'); ?>" method="post" enctype="multipart/form-data">

<center>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="nombre_tar">NOMBRES:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="nombre_tar" id="nombre_tar">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="descripcion_tar">DESCRIPCIÓN:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="descripcion_tar" id="descripcion_tar">
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
                <label for="estado_tar">ESTADO:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="estado_tar" id="estado_tar">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="m3_maximo_tar">M3 MAXIMO:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="m3_maximo_tar" id="m3_maximo_tar">
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
                <label for="tarifa_basica_tar">TARIFA BASICA:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="tarifa_basica_tar" id="tarifa_basica_tar">
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
                <label for="tarifa_excedente_tar">TARIFA EXCEDENTE:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="tarifa_excedente_tar" id="tarifa_excedente_tar">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="valor_mora_tar">VALOR MORA:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="valor_mora_tar" id="valor_mora_tar">
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
$("#frm_nuevo_tarifa").validate({
    rules:{
        nombre_tar:{
            required:true,
        },
        descripcion_tar:{
          required:true,
        },
        estado_tar:{
          required:true,
        },
        m3_maximo_tar:{
          required:true,
        },
        tarifa_basica_tar:{
          required:true,
        },
        tarifa_excedente_tar:{
          required:true,
        },
        valor_mora_tar:{
          required:true,
        }
    },
    messages:{
        nombre_tar:{
            required:"Porfavor, ingrese el nombre",
        },
        descripcion_tar:{
            required:"Porfavor, ingrese el apellido",
        },
        estado_tar:{
          required:"Porfavor, ingrese la edad",
        },
        m3_maximo_tar:{
          required:"Porfavor, ingrese el género",
        },
        tarifa_basica_tar:{
          required:"Porfavor, ingrese el género",
        },
        tarifa_excedente_tar:{
          required:"Porfavor, ingrese el género",
        },
        valor_mora_tar:{
          required:"Porfavor, ingrese el estado civil",
        }
      }
});
</script>

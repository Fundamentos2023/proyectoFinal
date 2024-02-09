<h1 class="text-center"><i class=""></i> ACTUALIZAR DATOS</h1>
<form class=""
id="frm_actualizar_tarifa"
action="<?php echo site_url('tarifas/procesarActualizacion'); ?>"
method="post"
enctype="multipart/form-data">
<center>
    <div class="row">
        <div class="col-md-1">
        </div>
          <div class="col-md-4">
            <input type="hidden" name="id_tar" id="id_tar" value="<?php echo $tarifaEditar->id_tar; ?>">
              <label for="">NOMBRE:
                <span class="obligatorio">(Required)</span>
              </label>
              <br>
              <input type="text"
              placeholder="Enter the name of the place"
              class="form-control"
              required
              name="nombre_tar" value="<?php echo $tarifaEditar->nombre_tar; ?>"
              id="nombre_tar">
              </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="descripcion_tar">DESCRIPCIÓN:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese la descripcion" class="form-control" required name="descripcion_tar"  value="<?php echo $tarifaEditar->descripcion_tar; ?>" id="descripcion_tar">
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
                <input type="text" placeholder="Ingrese el estado" class="form-control" required name="estado_tar" value="<?php echo $tarifaEditar->estado_tar; ?>" id="estado_tar">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="m3_maximo_tar">M3 MAXIMO:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="m3_maximo_tar" value="<?php echo $tarifaEditar->m3_maximo_tar; ?>" id="m3_maximo_tar">
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
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="tarifa_basica_tar" value="<?php echo $tarifaEditar->tarifa_basica_tar; ?>" id="tarifa_basica_tar">
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
                <input type="text" placeholder="Ingrese el estado" class="form-control" required name="tarifa_excedente_tar" value="<?php echo $tarifaEditar->tarifa_excedente_tar; ?>" id="tarifa_excedente_tar">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="valor_mora_tar">VALOR MORA:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="valor_mora_tar" value="<?php echo $tarifaEditar->valor_mora_tar; ?>" id="valor_mora_tar">
            </div>
        </div>
    </div>
</center>
<br>
<center>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
          <br><br>
            <button type="submit" name="button"
            class="btn btn-success">
            <i class="glyphicon glyphicon-check"></i>
              Guardar
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/tarifas/index"
              class="btn btn-danger">
              <i class="glyphicon glyphicon-ban-circle"></i>
              Cancelar
            </a>
        </div>
    </div>
</form>

 <script type="text/javascript">
 $("#frm_actualizar_tarifas").validate({
   rules:{
     nombre_tar:{
       required:true
     },
     descripcion_tar:{
       required:true
     },
     estado_tar:{
       required:true
     },
     m3_maximo_tar:{
       required:true
     },
     tarifa_basica_tar:{
       required:true
     },
     tarifa_excedente_tar:{
       required:true
     },
     valor_mora_tar:{
       required:true
     }
   },
   messages:{
    nombre_tar:{
    required: "Please enter the name of the place"
    },
    descripcion_tar:{
    required: "Please enter the name of the place"
    },
    estado_tar:{
    required: "Please enter the name of the place"
    },
    m3_maximo_tar:{
    required: "Please enter the name of the place"
    },
    tarifa_basica_tar:{
    required: "Please enter the name of the place"
    },
    tarifa_excedente_tar:{
    required: "Please enter the name of the place"
    },
    valor_mora_tar:{
    required: "Please enter the name of the place"
    }
   }
 });

 </script>

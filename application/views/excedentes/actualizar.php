<h1 class="text-center"><i class=""></i> ACTUALIZAR DATOS</h1>
<form class=""
id="frm_actualizar_excedente"
action="<?php echo site_url('excedentes/procesarActualizacion'); ?>"
method="post"
enctype="multipart/form-data">
<center>
    <div class="row">
        <div class="col-md-1">
        </div>
          <div class="col-md-4">
            <input type="hidden" name="id_" id="id_ex" value="<?php echo $excedenteEditar->id_ex; ?>">
              <label for="">ID_TAR:
                <span class="obligatorio">(Required)</span>
              </label>
              <br>
              <input type="text"
              placeholder="Enter the name of the place"
              class="form-control"
              required
              name="id_tar" value="<?php echo $excedenteEditar->id_tar; ?>"
              id="id_tar">
              </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="limite_minimo_ex">LIMITE MINIMO:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese la descripcion" class="form-control" required name="limite_minimo_ex"  value="<?php echo $excedenteEditar->limite_minimo_ex; ?>" id="limite_minimo_ex">
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
                <input type="text" placeholder="Ingrese el estado" class="form-control" required name="limite_maximo_ex" value="<?php echo $excedenteEditar->limite_maximo_ex; ?>" id="limite_maximo_ex">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="tarifa_ex">TARIFA:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="tarifa_ex" value="<?php echo $excedenteEditar->tarifa_ex; ?>" id="tarifa_ex">
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
                <label for="fecha_actualizacion_ex">FECHA ACTUALIZACION:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="fecha_actualizacion_ex" value="<?php echo $excedenteEditar->fecha_actualizacion_ex; ?>" id="fecha_actualizacion_ex">
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
                <label for="fecha_creacion_ex">FECHA CREACION:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="fecha_creacion_ex" value="<?php echo $excedenteEditar->fecha_creacion_ex; ?>" id="fecha_creacion_ex">
            </div>
        </div>
    </div>
</center>
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
            <a href="<?php echo site_url(); ?>/excedentes/index"
              class="btn btn-danger">
              <i class="glyphicon glyphicon-ban-circle"></i>
              Cancelar
            </a>
        </div>
    </div>
</form>

 <script type="text/javascript">
 $("#frm_actualizar_excedentes").validate({
   rules:{
     id_tar:{
       required:true
     },
     limite_minimo_ex:{
       required:true
     },
     limite_maximo_ex:{
       required:true
     },
     tarifa_ex:{
       required:true
     },
     fecha_actualizacion_ex:{
       required:true
     },
     fecha_creacion_ex:{
       required:true
     }
   },
   messages:{
    id_tar:{
    required: "Please enter the name of the place"
    },
    limite_minimo_ex:{
    required: "Please enter the name of the place"
    },
    limite_maximo_ex:{
    required: "Please enter the name of the place"
    },
    tarifa_ex:{
    required: "Please enter the name of the place"
    },
    fecha_actualizacion_ex:{
    required: "Please enter the name of the place"
    },
    tarifa_ex:{
    required: "Please enter the name of the place"
    }
   }
 });

 </script>

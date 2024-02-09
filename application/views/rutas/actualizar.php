<h1 class="text-center"><i class=""></i> ACTUALIZAR DATOS</h1>
<form class=""
id="frm_actualizar_ruta"
action="<?php echo site_url('rutas/procesarActualizacion'); ?>"
method="post"
enctype="multipart/form-data">
<center>
    <div class="row">
        <div class="col-md-1">
        </div>
          <div class="col-md-4">
            <input type="hidden" name="id_rut" id="id_rut" value="<?php echo $rutaEditar->id_rut; ?>">
              <label for="">NOMBRE:
                <span class="obligatorio">(Required)</span>
              </label>
              <br>
              <input type="text"
              placeholder="Enter the name of the place"
              class="form-control"
              required
              name="nombre_rut" value="<?php echo $rutaEditar->nombre_rut; ?>"
              id="nombre_rut">
              </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="descripcion_rut">DESCRIPCIÓN:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese la descripcion" class="form-control" required name="descripcion_rut"  value="<?php echo $rutaEditar->descripcion_rut; ?>" id="descripcion_rut">
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
                <input type="text" placeholder="Ingrese el estado" class="form-control" required name="estado_rut" value="<?php echo $rutaEditar->estado_rut; ?>" id="estado_rut">
            </div>
        </div>
        <div class="col-md-1">
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
            <a href="<?php echo site_url(); ?>/rutas/index"
              class="btn btn-danger">
              <i class="glyphicon glyphicon-ban-circle"></i>
              Cancelar
            </a>
        </div>
    </div>
</form>

 <script type="text/javascript">
 $("#frm_actualizar_rutas").validate({
   rules:{
     nombre_rut:{
       required:true
     },
     descripcion_rut:{
       required:true
     },
     estado_rut:{
       required:true
     }
   },
   messages:{
    nombre_rut:{
    required: "Please enter the name of the place"
    },
    descripcion_rut:{
    required: "Please enter the name of the place"
    },
    estado_rut:{
    required: "Please enter the name of the place"
    }
   }
 });

 </script>

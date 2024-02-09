<h1 class="text-center"><i class=""></i> ACTUALIZAR DATOS</h1>
<form class=""
id="frm_actualizar_perfil"
action="<?php echo site_url('perfiles/procesarActualizacion'); ?>"
method="post"
enctype="multipart/form-data">
<center>
    <div class="row">
        <div class="col-md-1">
        </div>
          <div class="col-md-4">
            <input type="hidden" name="id_per" id="id_per" value="<?php echo $perfilEditar->id_per; ?>">
              <label for="">NOMBRE:
                <span class="obligatorio">(Required)</span>
              </label>
              <br>
              <input type="text"
              placeholder="Enter the name of the place"
              class="form-control"
              required
              name="nombre_per" value="<?php echo $perfilEditar->nombre_per; ?>"
              id="nombre_per">
              </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="descripcion_per">DESCRIPCIÓN:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese la descripcion" class="form-control" required name="descripcion_per"  value="<?php echo $perfilEditar->descripcion_per; ?>" id="descripcion_per">
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
                <input type="text" placeholder="Ingrese el estado" class="form-control" required name="estado_per" value="<?php echo $perfilEditar->estado_per; ?>" id="estado_per">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="creacion_per">CREACIÓN:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="creacion_per" value="<?php echo $perfilEditar->creacion_per; ?>" id="creacion_per">
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
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="actualizacion_per" value="<?php echo $perfilEditar->actualizacion_per; ?>" id="actualizacion_per">
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
            <a href="<?php echo site_url(); ?>/perfiles/index"
              class="btn btn-danger">
              <i class="glyphicon glyphicon-ban-circle"></i>
              Cancelar
            </a>
        </div>
    </div>
</form>

 <script type="text/javascript">
 $("#frm_actualizar_perfiles").validate({
   rules:{
     nombre_per:{
       required:true
     },
     descripcion_per:{
       required:true
     },
     estado_per:{
       required:true
     },
     creacion_per:{
       required:true
     },
     actualizacion_per:{
       required:true
     }
   },
   messages:{
    nombre_per:{
    required: "Please enter the name of the place"
    },
    descripcion_per:{
    required: "Please enter the name of the place"
    },
    estado_per:{
    required: "Please enter the name of the place"
    },
    creacion_per:{
    required: "Please enter the name of the place"
    },
    actualizacion_per:{
    required: "Please enter the name of the place"
    }
   }
 });

 </script>

<h1 class="text-center"><i class=""></i> ACTUALIZAR DATOS</h1>
<form class=""
id="frm_actualizar_impuesto"
action="<?php echo site_url('impuestos/procesarActualizacion'); ?>"
method="post"
enctype="multipart/form-data">
<center>
    <div class="row">
        <div class="col-md-1">
        </div>
          <div class="col-md-4">
            <input type="hidden" name="id_imp" id="id_imp" value="<?php echo $impuestoEditar->id_imp; ?>">
              <label for="">NOMBRE:
                <span class="obligatorio">(Required)</span>
              </label>
              <br>
              <input type="text"
              placeholder="Enter the name of the place"
              class="form-control"
              required
              name="nombre_imp" value="<?php echo $impuestoEditar->nombre_imp; ?>"
              id="nombre_imp">
              </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="descripcion_imp">DESCRIPCIÓN:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese la descripcion" class="form-control" required name="descripcion_imp"  value="<?php echo $impuestoEditar->descripcion_imp; ?>" id="descripcion_imp">
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
                <input type="text" placeholder="Ingrese el estado" class="form-control" required name="porcentaje_imp" value="<?php echo $impuestoEditar->porcentaje_imp; ?>" id="porcentaje_imp">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="retencion_imp">RETENCION:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="retencion_imp" value="<?php echo $impuestoEditar->retencion_imp; ?>" id="retencion_imp">
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
                <input type="text" placeholder="Ingrese el estado" class="form-control" required name="estado_imp" value="<?php echo $impuestoEditar->estado_imp; ?>" id="estado_imp">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="creacion_imp">CREACION:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="creacion_imp" value="<?php echo $impuestoEditar->creacion_imp; ?>" id="creacion_imp">
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
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="actualizacion_imp" value="<?php echo $impuestoEditar->actualizacion_imp; ?>" id="actualizacion_imp">
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
            <a href="<?php echo site_url(); ?>/impuestos/index"
              class="btn btn-danger">
              <i class="glyphicon glyphicon-ban-circle"></i>
              Cancelar
            </a>
        </div>
    </div>
</form>

 <script type="text/javascript">
 $("#frm_actualizar_impuestos").validate({
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
     actualizacion_imp:{
       required:"Porfavor, ingrese el estado civil",
     }
   }
 });

 </script>

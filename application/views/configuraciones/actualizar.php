<h1 class="text-center"><i class=""></i> ACTUALIZAR DATOS</h1>
<form class=""
id="frm_actualizar_configuracion"
action="<?php echo site_url('configuraciones/procesarActualizacion'); ?>"
method="post"
enctype="multipart/form-data">
<center>
    <div class="row">
        <div class="col-md-1">
        </div>
          <div class="col-md-4">
            <input type="hidden" name="id_con" id="id_con" value="<?php echo $configuracionEditar->id_con; ?>">
              <label for="">NOMBRE:
                <span class="obligatorio">(Required)</span>
              </label>
              <br>
              <input type="text"
              placeholder="Enter the name of the place"
              class="form-control"
              required
              name="nombre_con" value="<?php echo $configuracionEditar->nombre_con; ?>"
              id="nombre_con">
              </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="ruc_con">RUC:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese la descripcion" class="form-control" required name="ruc_con"  value="<?php echo $configuracionEditar->ruc_con; ?>" id="ruc_con">
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
                <label for="logo_con">LOGO:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese el estado" class="form-control" required name="logo_con" value="<?php echo $configuracionEditar->logo_con; ?>" id="logo_con">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="telefono_con">TELEFONO:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="telefono_con" value="<?php echo $configuracionEditar->telefono_con; ?>" id="telefono_con">
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
                <label for="direccion_con">DIRECCION:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="direccion_con" value="<?php echo $configuracionEditar->direccion_con; ?>" id="direccion_con">
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
                    <label for="email_con">EMAIL:
                        <span class="obligatorio">(Required)</span>
                    </label>
                    <input type="text" placeholder="Ingrese el estado" class="form-control" required name="email_con" value="<?php echo $configuracionEditar->email_con; ?>" id="email_con">
                </div>
            </div>
            <div class="col-md-1">
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="servidor_con">SERVIDOR:
                        <span class="obligatorio">(Required)</span>
                    </label>
                    <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="servidor_con" value="<?php echo $configuracionEditar->servidor_con; ?>" id="servidor_con">
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
                    <label for="puerto_con">PUERTO:
                        <span class="obligatorio">(Required)</span>
                    </label>
                    <input type="text" placeholder="Ingrese el estado" class="form-control" required name="puerto_con" value="<?php echo $configuracionEditar->puerto_con; ?>" id="puerto_con">
                </div>
            </div>
            <div class="col-md-1">
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="password_con">PASSWORD:
                        <span class="obligatorio">(Required)</span>
                    </label>
                    <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="password_con" value="<?php echo $configuracionEditar->password_con; ?>" id="password_con">
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
                    <label for="creacion_con">CREACION:
                        <span class="obligatorio">(Required)</span>
                    </label>
                    <input type="text" placeholder="Ingrese el estado" class="form-control" required name="creacion_con" value="<?php echo $configuracionEditar->creacion_con; ?>" id="creacion_con">
                </div>
            </div>
            <div class="col-md-1">
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="actualizacion_con">ACTUALIZACION:
                        <span class="obligatorio">(Required)</span>
                    </label>
                    <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="actualizacion_con" value="<?php echo $configuracionEditar->actualizacion_con; ?>" id="actualizacion_con">
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
                <label for="anio_inicial_con">AÑO INICIAL:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese el estado" class="form-control" required name="anio_inicial_con" value="<?php echo $configuracionEditar->anio_inicial_con; ?>" id="anio_inicial_con">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="mes_inicial_con">MES INICIAL:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="mes_inicial_con" value="<?php echo $configuracionEditar->mes_inicial_con; ?>" id="mes_inicial_con">
            </div>
        </div>
    </div>
</center>
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
            <a href="<?php echo site_url(); ?>/configuraciones/index"
              class="btn btn-danger">
              <i class="glyphicon glyphicon-ban-circle"></i>
              Cancelar
            </a>
        </div>
    </div>
</form>

 <script type="text/javascript">
 $("#frm_actualizar_configuraciones").validate({
   rules:{
     nombre_con:{
       required:true
     },
     ruc_con:{
       required:true
     },
     logo_con:{
       required:true
     },
     telefono_con:{
       required:true
     },
     direccion_con:{
       required:true
     },
     email_con:{
       required:true
     },
     servidor_con:{
       required:true
     },
     puerto_con:{
       required:true
     },
     password_con:{
       required:true
     },
     creacion_con:{
       required:true
     },
     actualizacion_con:{
       required:true
     },
     anio_inicial_con:{
       required:true
     },
     mes_inicial_con:{
       required:true
     }
   },
   messages:{
    nombre_con:{
    required: "Please enter the name of the place"
    },
    ruc_con:{
    required: "Please enter the name of the place"
    },
    logo_con:{
    required: "Please enter the name of the place"
    },
    telefono_con:{
    required: "Please enter the name of the place"
    },
    direccion_con:{
    required: "Please enter the name of the place"
    },
    email_con:{
    required: "Please enter the name of the place"
    },
    servidor_con:{
    required: "Please enter the name of the place"
    },
    puerto_con:{
    required: "Please enter the name of the place"
    },
    password_con:{
    required: "Please enter the name of the place"
    },
    creacion_con:{
    required: "Please enter the name of the place"
    },
    actualizacion_con:{
    required: "Please enter the name of the place"
    },
    anio_inicial_con:{
    required: "Please enter the name of the place"
    },
    mes_inicial_con:{
    required: "Please enter the name of the place"
    }
   }
 });

 </script>

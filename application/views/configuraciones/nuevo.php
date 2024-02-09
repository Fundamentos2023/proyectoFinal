<h1 class="text-center"><i class="glyphicon glyphicon-plus"></i> NUEVA CONFIGURACION</h1>
<form class="" id="frm_nuevo_configuracion" action="<?php echo site_url('configuraciones/guardarConfiguracion'); ?>" method="post" enctype="multipart/form-data">

<center>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="nombre_con">NOMBRES:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="nombre_con" id="nombre_con">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="ruc_con">RUC:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="ruc_con" id="ruc_con">
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
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="logo_con" id="logo_con">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="telefono_con">TELEFONO:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="telefono_con" id="telefono_con">
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
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="direccion_con" id="direccion_con">
            </div>
        </div>
    </div>
</center>

<center>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="email_con">EMAIL:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="email_con" id="email_con">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="servidor_con">SERVIDOR:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="servidor_con" id="servidor_con">
            </div>
        </div>
    </div>
</center>

<center>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="puerto_con">PUERTO:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="puerto_con" id="puerto_con">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="password_con">PASSWORD:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="password_con" id="password_con">
            </div>
        </div>
    </div>
</center>


<center>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="creacion_con">CREACION:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="creacion_con" id="creacion_con">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="actualizacion_con">ACTUALIZACION:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="actualizacion_con" id="actualizacion_con">
            </div>
        </div>
    </div>
</center>

<center>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="anio_inicial_con">AÑO INICIAL:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="anio_inicial_con" id="anio_inicial_con">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="mes_inicial_con">MES INICIAL:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="mes_inicial_con" id="mes_inicial_con">
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
            <a href="<?php echo site_url(); ?>/configuraciones/index" class="btn btn-danger">
                <i class="glyphicon glyphicon-ban-circle"></i> Cancelar
            </a>
        </div>
    </div>
</form>

<script type="text/javascript">
$("#frm_nuevo_configuracion").validate({
    rules:{
        nombre_con:{
            required:true,
        },
        ruc_con:{
          required:true,
        },
        logo_con:{
          required:true,
        },
        telefono_con:{
          required:true,
        },
        direccion_con:{
          required:true,
        },
        email_con:{
          required:true,
        },
        servidor_con:{
          required:true,
        },
        puerto_con:{
          required:true,
        },
        password_con:{
          required:true,
        },
        creacion_con:{
          required:true,
        },
        actualizacion_con:{
          required:true,
        },
        anio_inicial_con:{
          required:true,
        },
        mes_inicial_con:{
          required:true,
        }
    },
    messages:{
        nombre_con:{
            required:"Porfavor, ingrese el nombre",
        },
        ruc_con:{
            required:"Porfavor, ingrese el apellido",
        },
        logo_con:{
          required:"Porfavor, ingrese la edad",
        },
        telefono_con:{
          required:"Porfavor, ingrese el género",
        },
        direccion_con:{
          required:"Porfavor, ingrese el estado civil",
        },
        email_con:{
          required:"Porfavor, ingrese el estado civil",
        },
        servidor_con:{
          required:"Porfavor, ingrese el estado civil",
        },
        puerto_con:{
          required:"Porfavor, ingrese el estado civil",
        },
        password_con:{
          required:"Porfavor, ingrese el estado civil",
        },
        creacion_con:{
          required:"Porfavor, ingrese el estado civil",
        },
        actualizacion_con:{
          required:"Porfavor, ingrese el estado civil",
        },
        anio_inicial_con:{
          required:"Porfavor, ingrese el estado civil",
        },
        mes_inicial_con:{
          required:"Porfavor, ingrese el estado civil",
        }
      }
});
</script>

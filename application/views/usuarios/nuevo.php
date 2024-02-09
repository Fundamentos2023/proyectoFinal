<h1 class="text-center"><i class="glyphicon glyphicon-plus"></i> NUEVO USUARIO</h1>
<form class="" id="frm_nuevo_usuario" action="<?php echo site_url('usuarios/guardarUsuario'); ?>" method="post" enctype="multipart/form-data">

<center>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="apellido_usu">APELLIDOS:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese el apellido" class="form-control" required name="apellido_usu" id="apellido_usu">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="nombre_usu">NOMBRES:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese el nombre" class="form-control" required name="nombre_usu" id="nombre_usu">
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
                <label for="email_usu">EMAIL:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese el email" class="form-control" required name="email_usu" id="email_usu">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="password_usu">PASSWORD:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese la contraseña" class="form-control" required name="password_usu" id="password_usu">
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
                <label for="estado_usu">ESTADO:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese el estado" class="form-control" required name="estado_usu" id="estado_usu">
            </div>
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="fk_id_per">fk_id_per:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese el id de perfil" class="form-control" required name="fk_id_per" id="fk_id_per">
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
$("#frm_nuevo_usuario").validate({
    rules:{
        apellido_usu:{
            required:true,
        },
        nombre_usu:{
            required:true,
        },
        email_usu:{
          required:true,
        },
        password_usu:{
          required:true,
        },
        estado_usu:{
          required:true,
        },
        fk_id_per:{
          required:true,
        }
    },
    messages:{
        apellido_usu:{
            required:"Porfavor, ingrese el apellido",
        },
        nombre_usu:{
            required:"Porfavor, ingrese el nombre",
        },
        email_usu:{
          required:"Porfavor, ingrese su email",
        },
        password_usu:{
          required:"Porfavor, ingrese el password",
        },
        estado_usu:{
          required:"Porfavor, ingrese el estado",
        },
        fk_id_per:{
          required:"Porfavor, ingreso id_per",
        }
      }
});
</script>

<h1 class="text-center"><i class=""></i> ACTUALIZAR DATOS</h1>
<form class=""
id="frm_actualizar_usuario"
action="<?php echo site_url('usuarios/procesarActualizacion'); ?>"
method="post"
enctype="multipart/form-data">
<center>
    <div class="row">
        <div class="col-md-1">
        </div>
          <div class="col-md-4">
            <input type="hidden" name="id_usu" id="id_usu" value="<?php echo $usuarioEditar->id_usu; ?>">
              <label for="">APELLIDOS:
                <span class="obligatorio">(Required)</span>
              </label>
              <br>
              <input type="text"
              placeholder="Enter the name of the place"
              class="form-control"
              required
              name="apellido_usu" value="<?php echo $usuarioEditar->apellido_usu; ?>"
              id="apellido_usu">
              </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="nombre_usu">NOMBRES:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese la descripcion" class="form-control" required name="nombre_usu"  value="<?php echo $usuarioEditar->nombre_usu; ?>" id="nombre_usu">
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
                <input type="text" placeholder="Ingrese el estado" class="form-control" required name="email_usu" value="<?php echo $usuarioEditar->email_usu; ?>" id="email_usu">
            </div>
        </div>
        <div class="col-md-1">
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="password_usu">PASSWORD:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese apellidos completos" class="form-control" required name="password_usu" value="<?php echo $usuarioEditar->password_usu; ?>" id="password_usu">
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
                <label for="estado_usu">ESTADO:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="estado_usu" value="<?php echo $usuarioEditar->estado_usu; ?>" id="estado_usu">
            </div>
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-9">
            <div class="form-group">
                <label for="fk_id_per">Id Perfil:
                    <span class="obligatorio">(Required)</span>
                </label>
                <input type="text" placeholder="Ingrese nombres completos" class="form-control" required name="fk_id_per" value="<?php echo $usuarioEditar->fk_id_per; ?>" id="fk_id_per">
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
            <a href="<?php echo site_url(); ?>/usuarios/index"
              class="btn btn-danger">
              <i class="glyphicon glyphicon-ban-circle"></i>
              Cancelar
            </a>
        </div>
    </div>
</form>

 <script type="text/javascript">
 $("#frm_actualizar_usuarios").validate({
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
    required: "Porfavor ingrese el apellido"
    },
    nombre_usu:{
    required: "Porfavor ingrese el nombre"
    },
    email_usu:{
    required: "Porfavor ingrese el email"
    },
    password_usu:{
    required: "Porfavor ingrese su passqord"
    },
    estado_usu:{
    required: "Porfavor ingrese el estado"
    },
    fk_id_per:{
    required: "Porfavor ingrese el apellido",
    }
   }
 });

 </script>

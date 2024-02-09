<?php
   class Usuario extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
        return $this->db->insert("usuario",$datos);
     }
     //Funcion que consulta todos los registros de la bdd
     public function obtenerTodos(){
        $this->db->order_by("id_usu","asc");
        $result=$this->db->get("usuario");
        if ($result->num_rows()>0) {
          return $result->result();
        } else {
          return false;//cuando no hay datos
        }
     }
     //funcion para eliminar un registro se recibe el id
     public function eliminarPorId($id){
        $this->db->where("id_usu",$id);
        return $this->db->delete("usuario");
     }
     //Consultando el registro por su id
     public function obtenerPorId($id){
        $this->db->where("id_usu",$id);
        $usuario=$this->db->get("usuario");
        if($usuario->num_rows()>0){
          return $usuario->row();//xq solo hay uno
        }else{
          return false;
        }
     }
     //Proceso de actualizacion de registro
     public function actualizar($id,$datos){
       $this->db->where("id_usu",$id);
       return $this->db->update("usuario",$datos);
     }

   }//Cierre de la clase (No borrar)














//

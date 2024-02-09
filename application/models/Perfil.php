<?php
   class Perfil extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
        return $this->db->insert("perfil",$datos);
     }
     //Funcion que consulta todos los perfil de la bdd
     public function obtenerTodos(){
        $this->db->order_by("id_per","asc");
        $result=$this->db->get("perfil");
        if ($result->num_rows()>0) {
          return $result->result();
        } else {
          return false;//cuando no hay datos
        }
     }
     //funcion para eliminar un perfil se recibe el id
     public function eliminarPorId($id){
        $this->db->where("id_per",$id);
        return $this->db->delete("perfil");
     }
     //Consultando el perfil por su id
     public function obtenerPorId($id){
        $this->db->where("id_per",$id);
        $perfil=$this->db->get("perfil");
        if($perfil->num_rows()>0){
          return $perfil->row();//xq solo hay uno
        }else{
          return false;
        }
     }
     //Proceso de actualizacion de perfil
     public function actualizar($id,$datos){
       $this->db->where("id_per",$id);
       return $this->db->update("perfil",$datos);
     }

   }//Cierre de la clase (No borrar)














//

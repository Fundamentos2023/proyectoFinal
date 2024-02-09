<?php
   class Impuesto extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
        return $this->db->insert("impuesto",$datos);
     }
     //Funcion que consulta todos los perfil de la bdd
     public function obtenerTodos(){
        $this->db->order_by("id_imp","asc");
        $result=$this->db->get("impuesto");
        if ($result->num_rows()>0) {
          return $result->result();
        } else {
          return false;//cuando no hay datos
        }
     }
     //funcion para eliminar un perfil se recibe el id
     public function eliminarPorId($id){
        $this->db->where("id_imp",$id);
        return $this->db->delete("impuesto");
     }
     //Consultando el perfil por su id
     public function obtenerPorId($id){
        $this->db->where("id_imp",$id);
        $impuesto=$this->db->get("impuesto");
        if($impuesto->num_rows()>0){
          return $impuesto->row();//xq solo hay uno
        }else{
          return false;
        }
     }
     //Proceso de actualizacion de perfil
     public function actualizar($id,$datos){
       $this->db->where("id_imp",$id);
       return $this->db->update("impuesto",$datos);
     }

   }//Cierre de la clase (No borrar)














//

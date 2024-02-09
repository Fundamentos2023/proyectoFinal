<?php
   class Ruta extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
        return $this->db->insert("ruta",$datos);
     }
     //Funcion que consulta todos los registros de la bdd
     public function obtenerTodos(){
        $this->db->order_by("id_rut","asc");
        $result=$this->db->get("ruta");
        if ($result->num_rows()>0) {
          return $result->result();
        } else {
          return false;//cuando no hay datos
        }
     }
     //funcion para eliminar un registro se recibe el id
     public function eliminarPorId($id){
        $this->db->where("id_rut",$id);
        return $this->db->delete("ruta");
     }
     //Consultando el registro por su id
     public function obtenerPorId($id){
        $this->db->where("id_rut",$id);
        $ruta=$this->db->get("ruta");
        if($ruta->num_rows()>0){
          return $ruta->row();//xq solo hay uno
        }else{
          return false;
        }
     }
     //Proceso de actualizacion de registro
     public function actualizar($id,$datos){
       $this->db->where("id_rut",$id);
       return $this->db->update("ruta",$datos);
     }

   }//Cierre de la clase (No borrar)














//

<?php
   class Medidor extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
        return $this->db->insert("medidor",$datos);
     }
     //Funcion que consulta todos los registros de la bdd
     public function obtenerTodos(){
        $this->db->order_by("id_med","asc");
        $result=$this->db->get("medidor");
        if ($result->num_rows()>0) {
          return $result->result();
        } else {
          return false;//cuando no hay datos
        }
     }
     //funcion para eliminar un registro se recibe el id
     public function eliminarPorId($id){
        $this->db->where("id_med",$id);
        return $this->db->delete("medidor");
     }
     //Consultando el registro por su id
     public function obtenerPorId($id){
        $this->db->where("id_med",$id);
        $medidor=$this->db->get("medidor");
        if($medidor->num_rows()>0){
          return $medidor->row();//xq solo hay uno
        }else{
          return false;
        }
     }
     //Proceso de actualizacion de registro
     public function actualizar($id,$datos){
       $this->db->where("id_med",$id);
       return $this->db->update("medidor",$datos);
     }

   }//Cierre de la clase (No borrar)














//

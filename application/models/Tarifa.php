<?php
   class Tarifa extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
        return $this->db->insert("tarifa",$datos);
     }
     //Funcion que consulta todos los tarifa de la bdd
     public function obtenerTodos(){
        $this->db->order_by("id_tar","asc");
        $result=$this->db->get("tarifa");
        if ($result->num_rows()>0) {
          return $result->result();
        } else {
          return false;//cuando no hay datos
        }
     }
     //funcion para eliminar un tarifa se recibe el id
     public function eliminarPorId($id){
        $this->db->where("id_tar",$id);
        return $this->db->delete("tarifa");
     }
     //Consultando el tarifa por su id
     public function obtenerPorId($id){
        $this->db->where("id_tar",$id);
        $tarifa=$this->db->get("tarifa");
        if($tarifa->num_rows()>0){
          return $tarifa->row();//xq solo hay uno
        }else{
          return false;
        }
     }
     //Proceso de actualizacion de tarifa
     public function actualizar($id,$datos){
       $this->db->where("id_tar",$id);
       return $this->db->update("tarifa",$datos);
     }

   }//Cierre de la clase (No borrar)














//

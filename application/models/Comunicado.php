<?php
   class Comunicado extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
        return $this->db->insert("comunicado",$datos);
     }
     //Funcion que consulta todos los comunicado de la bdd
     public function obtenerTodos(){
        $this->db->order_by("id_com","asc");
        $result=$this->db->get("comunicado");
        if ($result->num_rows()>0) {
          return $result->result();
        } else {
          return false;//cuando no hay datos
        }
     }
     //funcion para eliminar un comunicado se recibe el id
     public function eliminarPorId($id){
        $this->db->where("id_com",$id);
        return $this->db->delete("comunicado");
     }
     //Consultando el comunicado por su id
     public function obtenerPorId($id){
        $this->db->where("id_com",$id);
        $comunicado=$this->db->get("comunicado");
        if($comunicado->num_rows()>0){
          return $comunicado->row();//xq solo hay uno
        }else{
          return false;
        }
     }
     //Proceso de actualizacion de comunicado
     public function actualizar($id,$datos){
       $this->db->where("id_com",$id);
       return $this->db->update("comunicado",$datos);
     }

   }//Cierre de la clase (No borrar)














//

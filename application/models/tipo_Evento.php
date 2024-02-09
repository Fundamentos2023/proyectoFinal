<?php
   class tipo_Evento extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
        return $this->db->insert("tipo_evento",$datos);
     }
     //Funcion que consulta todos los tipo_evento de la bdd
     public function obtenerTodos(){
        $this->db->order_by("id_te","asc");
        $result=$this->db->get("tipo_evento");
        if ($result->num_rows()>0) {
          return $result->result();
        } else {
          return false;//cuando no hay datos
        }
     }
     //funcion para eliminar un tipo_evento se recibe el id
     public function eliminarPorId($id){
        $this->db->where("id_te",$id);
        return $this->db->delete("tipo_evento");
     }
     //Consultando el tipo_evento por su id
     public function obtenerPorId($id){
        $this->db->where("id_te",$id);
        $tipo_evento=$this->db->get("tipo_evento");
        if($tipo_evento->num_rows()>0){
          return $tipo_evento->row();//xq solo hay uno
        }else{
          return false;
        }
     }
     //Proceso de actualizacion de tipo_evento
     public function actualizar($id,$datos){
       $this->db->where("id_te",$id);
       return $this->db->update("tipo_evento",$datos);
     }

   }//Cierre de la clase (No borrar)














//

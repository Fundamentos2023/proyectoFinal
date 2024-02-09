<?php
   class Configuracion extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
        return $this->db->insert("configuracion",$datos);
     }
     //Funcion que consulta todos los configuracion de la bdd
     public function obtenerTodos(){
        $this->db->order_by("id_con","asc");
        $result=$this->db->get("configuracion");
        if ($result->num_rows()>0) {
          return $result->result();
        } else {
          return false;//cuando no hay datos
        }
     }
     //funcion para eliminar un configuracion se recibe el id
     public function eliminarPorId($id){
        $this->db->where("id_con",$id);
        return $this->db->delete("configuracion");
     }
     //Consultando el configuracion por su id
     public function obtenerPorId($id){
        $this->db->where("id_con",$id);
        $configuracion=$this->db->get("configuracion");
        if($configuracion->num_rows()>0){
          return $configuracion->row();//xq solo hay uno
        }else{
          return false;
        }
     }
     //Proceso de actualizacion de configuracion
     public function actualizar($id,$datos){
       $this->db->where("id_con",$id);
       return $this->db->update("configuracion",$datos);
     }

   }//Cierre de la clase (No borrar)














//

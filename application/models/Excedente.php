<?php
   class Excedente extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
        return $this->db->insert("excedente",$datos);
     }
     //Funcion que consulta todos los registros de la bdd
     public function obtenerTodos(){
        $this->db->order_by("id_ex","asc");
        $result=$this->db->get("excedente");
        if ($result->num_rows()>0) {
          return $result->result();
        } else {
          return false;//cuando no hay datos
        }
     }
     //funcion para eliminar un registro se recibe el id
     public function eliminarPorId($id){
        $this->db->where("id_ex",$id);
        return $this->db->delete("excedente");
     }
     //Consultando el registro por su id
     public function obtenerPorId($id){
        $this->db->where("id_ex",$id);
        $excedente=$this->db->get("excedente");
        if($excedente->num_rows()>0){
          return $excedente->row();//xq solo hay uno
        }else{
          return false;
        }
     }
     //Proceso de actualizacion de registro
     public function actualizar($id,$datos){
       $this->db->where("id_ex",$id);
       return $this->db->update("excedente",$datos);
     }

   }//Cierre de la clase (No borrar)














//

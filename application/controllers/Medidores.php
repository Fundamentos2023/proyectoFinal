<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medidores extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("medidor");
	}
	//renderiza la vista index de registros
	public function index()
	{
		$data["listadoMedidores"]=
		$this->medidor->obtenerTodos();
		$this->load->view('header');
		$this->load->view('medidores/index',$data);
		$this->load->view('footer');
	}
 //renderiza la vista nuevo de registros
	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('medidores/nuevo');
		$this->load->view('footer');
	}
	//funcion para capturar los valores del
	//formulario nuevo
	public function guardarMedidor(){
		$datosNuevoMedidor=array(
      "fk_id_rut"=>$this->input->post('fk_id_rut'),
			"fk_id_tar"=>$this->input->post('fk_id_tar'),
			"numero_med"=>$this->input->post('numero_med'),
      "serie_med"=>$this->input->post('serie_med'),
      "marca_med"=>$this->input->post('marca_med'),
      "observacion_med"=>$this->input->post('observacion_med'),
      "estado_med"=>$this->input->post('estado_med'),
      "foto_med"=>$this->input->post('foto_med'),
      "creacion_med"=>$this->input->post('creacion_med'),
      "actualizacion_med"=>$this->input->post('actualizacion_med'),
      "lectura_inicial_med"=>$this->input->post('lectura_inicial_med')
		);
    if($this->medidor->insertar($datosNuevoMedidor)){
				$this->session
				->set_flashdata('confirmacion',
			 'Medidor insertado exitosamente');
		}else{
			$this->session
			->set_flashdata('error',
		 'Error al insertar, verifique e intente de nuevo');
		}
		redirect('medidores/index');
	}
	//funcion para eliminar registros
	public function borrar($id_med){
		if ($this->medidor->eliminarPorId($id_med)){
			$this->session
			->set_flashdata('confirmacion',
		 'Medidor ELIMINADO exitosamente');
		} else {
			$this->session
			->set_flashdata('error',
		 'Error al ELIMINAR, verifique e intente de nuevo');
		}
		redirect('medidores/index');
	}
	//Funcion para renderizar el formulario de
	//actualizacion
	public function actualizar($id){
		  $data["medidorEditar"]=
			$this->medidor->obtenerPorId($id);
			$this->load->view("header");
			$this->load->view("medidores/actualizar",$data);
			$this->load->view("footer");
	}

	public function procesarActualizacion(){
		$datosMedidorEditado=array(
      "fk_id_rut"=>$this->input->post('fk_id_rut'),
			"fk_id_tar"=>$this->input->post('fk_id_tar'),
			"numero_med"=>$this->input->post('numero_med'),
      "serie_med"=>$this->input->post('serie_med'),
      "marca_med"=>$this->input->post('marca_med'),
      "observacion_med"=>$this->input->post('observacion_med'),
      "estado_med"=>$this->input->post('estado_med'),
      "foto_med"=>$this->input->post('foto_med'),
      "creacion_med"=>$this->input->post('creacion_med'),
      "actualizacion_med"=>$this->input->post('actualizacion_med'),
      "lectura_inicial_med"=>$this->input->post('lectura_inicial_med')
		);
	 $id=$this->input->post("id_med");
		if($this->medidor->actualizar($id,$datosMedidorEditado)){
			redirect('medidores/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

}// cierre de la clase (No borrar)




//

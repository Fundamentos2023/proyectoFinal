<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excedentes extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("excedente");
	}
	//renderiza la vista index de registros
	public function index()
	{
		$data["listadoExcedentes"]=
		$this->excedente->obtenerTodos();
		$this->load->view('header');
		$this->load->view('excedentes/index',$data);
		$this->load->view('footer');
	}
 //renderiza la vista nuevo de registros
	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('excedentes/nuevo');
		$this->load->view('footer');
	}
	//funcion para capturar los valores del
	//formulario nuevo
	public function guardarExcedente(){
		$datosNuevoExcedente=array(
      "id_tar"=>$this->input->post('id_tar'),
      "limite_minimo_ex"=>$this->input->post('limite_minimo_ex'),
			"limite_maximo_ex"=>$this->input->post('limite_maximo_ex'),
			"tarifa_ex"=>$this->input->post('tarifa_ex'),
      "fecha_actualizacion_ex"=>$this->input->post('fecha_actualizacion_ex'),
      "fecha_creacion_ex"=>$this->input->post('fecha_creacion_ex')
		);
    if($this->excedente->insertar($datosNuevoExcedente)){
				$this->session
				->set_flashdata('confirmacion',
			 'Excedente insertado exitosamente');
		}else{
			$this->session
			->set_flashdata('error',
		 'Error al insertar, verifique e intente de nuevo');
		}
		redirect('excedentes/index');
	}
	//funcion para eliminar registros
	public function borrar($id_ex){
		if ($this->excedente->eliminarPorId($id_ex)){
			$this->session
			->set_flashdata('confirmacion',
		 'Excedente ELIMINADO exitosamente');
		} else {
			$this->session
			->set_flashdata('error',
		 'Error al ELIMINAR, verifique e intente de nuevo');
		}
		redirect('excedentes/index');
	}
	//Funcion para renderizar el formulario de
	//actualizacion
	public function actualizar($id){
		  $data["excedenteEditar"]=
			$this->excedente->obtenerPorId($id);
			$this->load->view("header");
			$this->load->view("excedentes/actualizar",$data);
			$this->load->view("footer");
	}

	public function procesarActualizacion(){
		$datosExcedenteEditado=array(
      "id_tar"=>$this->input->post('id_tar'),
      "limite_minimo_ex"=>$this->input->post('limite_minimo_ex'),
			"limite_maximo_ex"=>$this->input->post('limite_maximo_ex'),
			"tarifa_ex"=>$this->input->post('tarifa_ex'),
      "fecha_actualizacion_ex"=>$this->input->post('fecha_actualizacion_ex'),
      "fecha_creacion_ex"=>$this->input->post('fecha_creacion_ex')
		);
	 $id=$this->input->post("id_ex");
		if($this->excedente->actualizar($id,$datosExcedenteEditado)){
			redirect('excedentes/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

}// cierre de la clase (No borrar)




//

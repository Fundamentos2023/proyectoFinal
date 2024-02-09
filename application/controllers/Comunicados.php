<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comunicados extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("comunicado");
	}
	//renderiza la vista index de perfil
	public function index()
	{
		$data["listadoComunicados"]=
		$this->comunicado->obtenerTodos();
		$this->load->view('header');
		$this->load->view('comunicados/index',$data);
		$this->load->view('footer');
	}
 //renderiza la vista nuevo de perfil
	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('comunicados/nuevo');
		$this->load->view('footer');
	}
	//funcion para capturar los valores del
	//formulario nuevo
	public function guardarComunicado(){
		$datosNuevoComunicado=array(
			"fecha_com"=>$this->input->post('fecha_com'),
			"mensaje_com"=>$this->input->post('mensaje_com'),
      "actualizacion_com"=>$this->input->post('actualizacion_com'),
			"creacion_com"=>$this->input->post('creacion_com')
		);
    if($this->comunicado->insertar($datosNuevoComunicado)){
				$this->session
				->set_flashdata('confirmacion',
			 'Comunicado insertado exitosamente');
		}else{
			$this->session
			->set_flashdata('error',
		 'Error al insertar, verifique e intente de nuevo');
		}
		redirect('comunicados/index');
	}
	//funcion para eliminar perfil
	public function borrar($id_com){
		if ($this->comunicado->eliminarPorId($id_com)){
			$this->session
			->set_flashdata('confirmacion',
		 'Comunicado ELIMINADO exitosamente');
		} else {
			$this->session
			->set_flashdata('error',
		 'Error al ELIMINAR, verifique e intente de nuevo');
		}
		redirect('comunicados/index');
	}
	//Funcion para renderizar el formulario de
	//actualizacion
	public function actualizar($id){
		  $data["comunicadoEditar"]=
			$this->comunicado->obtenerPorId($id);
			$this->load->view("header");
			$this->load->view("comunicados/actualizar",$data);
			$this->load->view("footer");
	}

	public function procesarActualizacion(){
		$datosComunicadoEditado=array(
      "fecha_com"=>$this->input->post('fecha_com'),
			"mensaje_com"=>$this->input->post('mensaje_com'),
      "actualizacion_com"=>$this->input->post('actualizacion_com'),
			"creacion_com"=>$this->input->post('creacion_com')
		);
	 $id=$this->input->post("id_com");
		if($this->comunicado->actualizar($id,$datosComunicadoEditado)){
			redirect('comunicados/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

}// cierre de la clase (No borrar)




//

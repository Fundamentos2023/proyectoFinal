<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfiles extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("perfil");
	}
	//renderiza la vista index de perfil
	public function index()
	{
		$data["listadoPerfiles"]=
		$this->perfil->obtenerTodos();
		$this->load->view('header');
		$this->load->view('perfiles/index',$data);
		$this->load->view('footer');
	}
 //renderiza la vista nuevo de perfil
	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('perfiles/nuevo');
		$this->load->view('footer');
	}
	//funcion para capturar los valores del
	//formulario nuevo
	public function guardarPerfil(){
		$datosNuevoPerfil=array(
			"nombre_per"=>$this->input->post('nombre_per'),
			"descripcion_per"=>$this->input->post('descripcion_per'),
      "estado_per"=>$this->input->post('estado_per'),
			"creacion_per"=>$this->input->post('creacion_per'),
      "actualizacion_per"=>$this->input->post('actualizacion_per')
		);
    if($this->perfil->insertar($datosNuevoPerfil)){
				$this->session
				->set_flashdata('confirmacion',
			 'Perfil insertado exitosamente');
		}else{
			$this->session
			->set_flashdata('error',
		 'Error al insertar, verifique e intente de nuevo');
		}
		redirect('perfiles/index');
	}
	//funcion para eliminar perfil
	public function borrar($id_per){
		if ($this->perfil->eliminarPorId($id_per)){
			$this->session
			->set_flashdata('confirmacion',
		 'Perfil ELIMINADO exitosamente');
		} else {
			$this->session
			->set_flashdata('error',
		 'Error al ELIMINAR, verifique e intente de nuevo');
		}
		redirect('perfiles/index');
	}
	//Funcion para renderizar el formulario de
	//actualizacion
	public function actualizar($id){
		  $data["perfilEditar"]=
			$this->perfil->obtenerPorId($id);
			$this->load->view("header");
			$this->load->view("perfiles/actualizar",$data);
			$this->load->view("footer");
	}

	public function procesarActualizacion(){
		$datosPerfilEditado=array(
      "nombre_per"=>$this->input->post('nombre_per'),
			"descripcion_per"=>$this->input->post('descripcion_per'),
      "estado_per"=>$this->input->post('estado_per'),
			"creacion_per"=>$this->input->post('creacion_per'),
      "actualizacion_per"=>$this->input->post('actualizacion_per')
		);
	 $id=$this->input->post("id_per");
		if($this->perfil->actualizar($id,$datosPerfilEditado)){
			redirect('perfiles/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

}// cierre de la clase (No borrar)




//

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tipo_Eventos extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("tipo_evento");
	}
	//renderiza la vista index de tipo_evento
	public function index()
	{
		$data["listadotipo_Eventos"]=
		$this->tipo_evento->obtenerTodos();
		$this->load->view('header');
		$this->load->view('tipo_eventos/index',$data);
		$this->load->view('footer');
	}
 //renderiza la vista nuevo de tipo_evento
	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('tipo_eventos/nuevo');
		$this->load->view('footer');
	}
	//funcion para capturar los valores del
	//formulario nuevo
	public function guardartipo_Evento(){
		$datosNuevotipo_Evento=array(
			"nombre_te"=>$this->input->post('nombre_te'),
      "estado_te"=>$this->input->post('estado_te'),
			"creacion_te"=>$this->input->post('creacion_te'),
      "actualizacion_te"=>$this->input->post('actualizacion_te')
		);
    if($this->tipo_evento->insertar($datosNuevotipo_Evento)){
				$this->session
				->set_flashdata('confirmacion',
			 'Evento insertado exitosamente');
		}else{
			$this->session
			->set_flashdata('error',
		 'Error al insertar, verifique e intente de nuevo');
		}
		redirect('tipo_eventos/index');
	}
	//funcion para eliminar tipo_evento
	public function borrar($id_te){
		if ($this->tipo_evento->eliminarPorId($id_te)){
			$this->session
			->set_flashdata('confirmacion',
		 'Evento ELIMINADO exitosamente');
		} else {
			$this->session
			->set_flashdata('error',
		 'Error al ELIMINAR, verifique e intente de nuevo');
		}
		redirect('tipo_eventos/index');
	}
	//Funcion para renderizar el formulario de
	//actualizacion
	public function actualizar($id){
		  $data["tipo_eventoEditar"]=
			$this->tipo_evento->obtenerPorId($id);
			$this->load->view("header");
			$this->load->view("tipo_eventos/actualizar",$data);
			$this->load->view("footer");
	}

	public function procesarActualizacion(){
		$datostipo_EventoEditado=array(
      "nombre_te"=>$this->input->post('nombre_te'),
      "estado_te"=>$this->input->post('estado_te'),
			"creacion_te"=>$this->input->post('creacion_te'),
      "actualizacion_te"=>$this->input->post('actualizacion_te')
		);
	 $id=$this->input->post("id_te");
		if($this->tipo_evento->actualizar($id,$datostipo_EventoEditado)){
			redirect('tipo_eventos/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

}// cierre de la clase (No borrar)




//

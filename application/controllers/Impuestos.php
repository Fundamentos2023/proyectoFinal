<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Impuestos extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("impuesto");
	}
	//renderiza la vista index de perfil
	public function index()
	{
		$data["listadoImpuestos"]=
		$this->impuesto->obtenerTodos();
		$this->load->view('header');
		$this->load->view('impuestos/index',$data);
		$this->load->view('footer');
	}
 //renderiza la vista nuevo de perfil
	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('impuestos/nuevo');
		$this->load->view('footer');
	}
	//funcion para capturar los valores del
	//formulario nuevo
	public function guardarImpuesto(){
		$datosNuevoImpuesto=array(
			"nombre_imp"=>$this->input->post('nombre_imp'),
			"descripcion_imp"=>$this->input->post('descripcion_imp'),
      "porcentaje_imp"=>$this->input->post('porcentaje_imp'),
			"retencion_imp"=>$this->input->post('retencion_imp'),
      "estado_imp"=>$this->input->post('estado_imp'),
      "creacion_imp"=>$this->input->post('creacion_imp'),
      "actualizacion_imp"=>$this->input->post('actualizacion_imp')
		);
    if($this->impuesto->insertar($datosNuevoImpuesto)){
				$this->session
				->set_flashdata('confirmacion',
			 'Impuesto insertado exitosamente');
		}else{
			$this->session
			->set_flashdata('error',
		 'Error al insertar, verifique e intente de nuevo');
		}
		redirect('impuestos/index');
	}
	//funcion para eliminar perfil
	public function borrar($id_imp){
		if ($this->impuesto->eliminarPorId($id_imp)){
			$this->session
			->set_flashdata('confirmacion',
		 'Impuesto ELIMINADO exitosamente');
		} else {
			$this->session
			->set_flashdata('error',
		 'Error al ELIMINAR, verifique e intente de nuevo');
		}
		redirect('impuestos/index');
	}
	//Funcion para renderizar el formulario de
	//actualizacion
	public function actualizar($id){
		  $data["impuestoEditar"]=
			$this->impuesto->obtenerPorId($id);
			$this->load->view("header");
			$this->load->view("impuestos/actualizar",$data);
			$this->load->view("footer");
	}

	public function procesarActualizacion(){
		$datosImpuestoEditado=array(
      "nombre_imp"=>$this->input->post('nombre_imp'),
			"descripcion_imp"=>$this->input->post('descripcion_imp'),
      "porcentaje_imp"=>$this->input->post('porcentaje_imp'),
			"retencion_imp"=>$this->input->post('retencion_imp'),
      "estado_imp"=>$this->input->post('estado_imp'),
      "creacion_imp"=>$this->input->post('creacion_imp'),
      "actualizacion_imp"=>$this->input->post('actualizacion_imp')
		);
	 $id=$this->input->post("id_imp");
		if($this->impuesto->actualizar($id,$datosImpuestoEditado)){
			redirect('impuestos/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

}// cierre de la clase (No borrar)




//

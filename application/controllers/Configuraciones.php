<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuraciones extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("configuracion");
	}
	//renderiza la vista index de configuracion
	public function index()
	{
		$data["listadoConfiguraciones"]=
		$this->configuracion->obtenerTodos();
		$this->load->view('header');
		$this->load->view('configuraciones/index',$data);
		$this->load->view('footer');
	}
 //renderiza la vista nuevo de configuracion
	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('configuraciones/nuevo');
		$this->load->view('footer');
	}
	//funcion para capturar los valores del
	//formulario nuevo
	public function guardarConfiguracion(){
		$datosNuevoConfiguracion=array(
			"nombre_con"=>$this->input->post('nombre_con'),
			"ruc_con"=>$this->input->post('ruc_con'),
      "logo_con"=>$this->input->post('logo_con'),
			"telefono_con"=>$this->input->post('telefono_con'),
      "direccion_con"=>$this->input->post('direccion_con'),
      "email_con"=>$this->input->post('email_con'),
      "servidor_con"=>$this->input->post('servidor_con'),
      "puerto_con"=>$this->input->post('puerto_con'),
      "password_con"=>$this->input->post('password_con'),
      "creacion_con"=>$this->input->post('creacion_con'),
      "actualizacion_con"=>$this->input->post('actualizacion_con'),
      "anio_inicial_con"=>$this->input->post('anio_inicial_con'),
      "mes_inicial_con"=>$this->input->post('mes_inicial_con')
		);
    if($this->configuracion->insertar($datosNuevoConfiguracion)){
				$this->session
				->set_flashdata('confirmacion',
			 'Configuracion insertado exitosamente');
		}else{
			$this->session
			->set_flashdata('error',
		 'Error al insertar, verifique e intente de nuevo');
		}
		redirect('configuraciones/index');
	}
	//funcion para eliminar configuracion
	public function borrar($id_con){
		if ($this->configuracion->eliminarPorId($id_con)){
			$this->session
			->set_flashdata('confirmacion',
		 'Configuracion ELIMINADO exitosamente');
		} else {
			$this->session
			->set_flashdata('error',
		 'Error al ELIMINAR, verifique e intente de nuevo');
		}
		redirect('configuraciones/index');
	}
	//Funcion para renderizar el formulario de
	//actualizacion
	public function actualizar($id){
		  $data["configuracionEditar"]=
			$this->configuracion->obtenerPorId($id);
			$this->load->view("header");
			$this->load->view("configuraciones/actualizar",$data);
			$this->load->view("footer");
	}

	public function procesarActualizacion(){
		$datosConfiguracionEditado=array(
      "nombre_con"=>$this->input->post('nombre_con'),
			"ruc_con"=>$this->input->post('ruc_con'),
      "logo_con"=>$this->input->post('logo_con'),
			"telefono_con"=>$this->input->post('telefono_con'),
      "direccion_con"=>$this->input->post('direccion_con'),
      "email_con"=>$this->input->post('email_con'),
      "servidor_con"=>$this->input->post('servidor_con'),
      "puerto_con"=>$this->input->post('puerto_con'),
      "password_con"=>$this->input->post('password_con'),
      "creacion_con"=>$this->input->post('creacion_con'),
      "actualizacion_con"=>$this->input->post('actualizacion_con'),
      "anio_inicial_con"=>$this->input->post('anio_inicial_con'),
      "mes_inicial_con"=>$this->input->post('mes_inicial_con')
		);
	 $id=$this->input->post("id_con");
		if($this->configuracion->actualizar($id,$datosConfiguracionEditado)){
			redirect('configuraciones/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

}// cierre de la clase (No borrar)




//

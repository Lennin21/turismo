<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viajes extends CI_Controller{
	// define contructor de la clase
  public function __construct(){
		parent::  __construct();
		$this->load->model("viaje");
	}
//renderisa vista index estudiantes
	public function index()
	{
    $data["listadoViajes"]=$this->viaje->obtenerTodos();

		$this->load->view('header');
		$this->load->view('viajes/index',$data);
		$this->load->view('footer');
	}
	//renderis vista index nuevo
  public function nuevo()  {
  $this->load->view('header');
  $this->load->view('viajes/nuevo');
  $this->load->view('footer');
  }

  // funcionn> para capturar los valores formulario Nuevo
  //formilario Nuevo
  public function guardarViajes(){
      $datosNuevoViajes=array(
    		 "vi_vi"=>$this->input->post("vi_vi"),
    		 "de_vi"=>$this->input->post("de_vi"),
    		 "ho_vi"=>$this->input->post("ho_vi"),
    		 "holl_vi"=>$this->input->post("holl_vi")
    	);
    print_r($datosNuevoViajes);
    if ($this->viaje->insertar($datosNuevoViajes)) {
    	redirect("viajes/index");
    }else{
      echo "<h1>NO SE GUARDO LA INFORMACIÓN<h1>";
    }
  }
  // generear una funcion  para eliminar Estudiantes
  public function borrar($id_vi){
    if ($this->viaje->eliminarPorId($id_vi)) {
      redirect("viajes/index");
      }else {
      echo "<h1>Error al eliminar<h1>";
    }
  }
  //funcion para renderizar actualizacion formulario
  public function actualizar($id){
    $data["viajeEditar"]=$this->viaje->obtenerPorId($id);
    $this->load->view("header");
    $this->load->view("viajes/actualizar",$data);
    $this->load->view("footer");
  }

  public function procesarActualizacion(){
      $datosViajesEditado=array(
        "vi_vi"=>$this->input->post("vi_vi"),
        "de_vi"=>$this->input->post("de_vi"),
        "ho_vi"=>$this->input->post("ho_vi"),
        "holl_vi"=>$this->input->post("holl_vi")

      );
    $id=$this->input->post("id_vi");
    if ($this->viaje->actualizar($id,$datosViajesEditado)) {
      redirect("viajes/index");
    }else{
      echo "<h1>NO SE ACTUALIZO<h1>";
    }
  }
}// cierre de la clase

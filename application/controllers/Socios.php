<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socios extends CI_Controller{
	// define contructor de la clase
  public function __construct(){
		parent::  __construct();
		$this->load->model("socio");
	}
//renderisa vista index estudiantes
	public function index()
	{
    $data["listadoSocios"]=$this->socio->obtenerTodos();

		$this->load->view('header');
		$this->load->view('socios/index',$data);
		$this->load->view('footer');
	}
	//renderis vista index nuevo
  public function nuevo()  {
  $this->load->view('header');
  $this->load->view('socios/nuevo');
  $this->load->view('footer');
  }

  // funcionn> para capturar los valores formulario Nuevo
  //formilario Nuevo
  public function guardarSocios(){
      $datosNuevoSocios=array(
    		 "no_so"=>$this->input->post("no_so"),
    		 "ap_so"=>$this->input->post("ap_so"),
    		 "nc_so"=>$this->input->post("nc_so"),
         "te_so"=>$this->input->post("te_so"),
    		 "co_so"=>$this->input->post("co_so")
    	);
    print_r($datosNuevoSocios);
    if ($this->socio->insertar($datosNuevoSocios)) {
    	redirect("socios/index");
    }else{
      echo "<h1>NO SE GUARDO LA INFORMACIÓN<h1>";
    }
  }
  // generear una funcion  para eliminar Estudiantes
  public function borrar($id_so){
    if ($this->socio->eliminarPorId($id_so)) {
      redirect("socios/index");
      }else {
      echo "<h1>Error al eliminar<h1>";
    }
  }
  //funcion para renderizar actualizacion formulario
  public function actualizar($id){
    $data["socioEditar"]=$this->reserva->obtenerPorId($id);
    $this->load->view("header");
    $this->load->view("socios/actualizar",$data);
    $this->load->view("footer");
  }

  public function procesarActualizacion(){
      $datosSociosEditado=array(
        "no_so"=>$this->input->post("no_so"),
        "ap_so"=>$this->input->post("ap_so"),
        "nc_so"=>$this->input->post("nc_so"),
        "te_so"=>$this->input->post("te_so"),
        "co_so"=>$this->input->post("co_so")

      );
    $id=$this->input->post("id_so");
    if ($this->socio->actualizar($id,$datosSociosEditado)) {
      redirect("socios/index");
    }else{
      echo "<h1>NO SE ACTUALIZO<h1>";
    }
  }
}// cierre de la clase

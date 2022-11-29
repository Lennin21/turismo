<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buses extends CI_Controller{
	// define contructor de la clase
  public function __construct(){
		parent::  __construct();
		$this->load->model("buse");
	}
//renderisa vista index estudiantes
	public function index()
	{
    $data["listadoBuses"]=$this->buse->obtenerTodos();

		$this->load->view('header');
		$this->load->view('buses/index',$data);
		$this->load->view('footer');
	}
	//renderis vista index nuevo
  public function nuevo()  {
  $this->load->view('header');
  $this->load->view('buses/nuevo');
  $this->load->view('footer');
  }

  // funcionn> para capturar los valores formulario Nuevo
  //formilario Nuevo
  public function guardarBuses(){
      $datosNuevoBuses=array(
    		 "ti_bu"=>$this->input->post("ti_bu"),
    		 "nu_bu"=>$this->input->post("nu_bu"),
    		 "ca_bu"=>$this->input->post("ca_bu"),
    		 "ob_bu"=>$this->input->post("ob_bu")
    	);
    print_r($datosNuevoBuses);
    if ($this->buse->insertar($datosNuevoBuses)) {
    	redirect("buses/index");
    }else{
      echo "<h1>NO SE GUARDO LA INFORMACIÓN<h1>";
    }
  }
  // generear una funcion  para eliminar Estudiantes
  public function borrar($id_bu){
    if ($this->buse->eliminarPorId($id_bu)) {
      redirect("buses/index");
      }else {
      echo "<h1>Error al eliminar<h1>";
    }
  }
  //funcion para renderizar actualizacion formulario
  public function actualizar($id){
    $data["buseEditar"]=$this->buse->obtenerPorId($id);
    $this->load->view("header");
    $this->load->view("buses/actualizar",$data);
    $this->load->view("footer");
  }

  public function procesarActualizacion(){
      $datosBusesEditado=array(
        "ti_bu"=>$this->input->post("ti_bu"),
        "nu_bu"=>$this->input->post("nu_bu"),
        "ca_bu"=>$this->input->post("ca_bu"),
        "ob_bu"=>$this->input->post("ob_bu")

      );
    $id=$this->input->post("id_bu");
    if ($this->buse->actualizar($id,$datosBusesEditado)) {
      redirect("buses/index");
    }else{
      echo "<h1>NO SE ACTUALIZO<h1>";
    }
  }
}// cierre de la clase

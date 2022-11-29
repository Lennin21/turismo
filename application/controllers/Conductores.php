<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conductores extends CI_Controller{
	// define contructor de la clase
  public function __construct(){
		parent::  __construct();
		$this->load->model("conductore");
	}
//renderisa vista index estudiantes
	public function index()
	{
    $data["listadoConductores"]=$this->conductore->obtenerTodos();

		$this->load->view('header');
		$this->load->view('conductores/index',$data);
		$this->load->view('footer');
	}
	//renderis vista index nuevo
  public function nuevo()  {
  $this->load->view('header');
  $this->load->view('conductores/nuevo');
  $this->load->view('footer');
  }

  // funcionn> para capturar los valores formulario Nuevo
  //formilario Nuevo
  public function guardarConductores(){
      $datosNuevoConductores=array(
    		 "nombre_co"=>$this->input->post("nombre_co"),
    		 "ape_co"=>$this->input->post("ape_co"),
    		 "ce_co"=>$this->input->post("ce_co"),
    		 "tele_co"=>$this->input->post("tele_co"),
    		 "ti_co"=>$this->input->post("ti_co")
    	);
    print_r($datosNuevoConductores);
    if ($this->conductore->insertar($datosNuevoConductores)) {
    	redirect("conductores/index");
    }else{
      echo "<h1>NO SE GUARDO LA INFORMACIÓN<h1>";
    }
  }
  // generear una funcion  para eliminar Estudiantes
  public function borrar($id_co){
    if ($this->conductore->eliminarPorId($id_co)) {
      redirect("conductores/index");
      }else {
      echo "<h1>Error al eliminar<h1>";
    }
  }
  //funcion para renderizar actualizacion formulario
  public function actualizar($id){
    $data["conductoreEditar"]=$this->conductore->obtenerPorId($id);
    $this->load->view("header");
    $this->load->view("conductores/actualizar",$data);
    $this->load->view("footer");
  }

  public function procesarActualizacion(){
      $datosConductoresEditado=array(
         "nombre_co"=>$this->input->post("nombre_co"),
         "ape_co"=>$this->input->post("ape_co"),
         "ce_co"=>$this->input->post("ce_co"),
         "tele_co"=>$this->input->post("tele_co"),
         "ti_co"=>$this->input->post("ti_co")

      );
    $id=$this->input->post("id_co");
    if ($this->conductore->actualizar($id,$datosConductoresEditado)) {
      redirect("estudiantes/index");
    }else{
      echo "<h1>NO SE ACTUALIZO<h1>";
    }
  }
}// cierre de la clase

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservas extends CI_Controller{
	// define contructor de la clase
  public function __construct(){
		parent::  __construct();
		$this->load->model("reserva");
	}
//renderisa vista index estudiantes
	public function index()
	{
    $data["listadoReservas"]=$this->reserva->obtenerTodos();

		$this->load->view('header');
		$this->load->view('reservas/index',$data);
		$this->load->view('footer');
	}
	//renderis vista index nuevo
  public function nuevo()  {
  $this->load->view('header');
  $this->load->view('reservas/nuevo');
  $this->load->view('footer');
  }

  // funcionn> para capturar los valores formulario Nuevo
  //formilario Nuevo
  public function guardarReservas(){
      $datosNuevoReservas=array(
    		 "no_re"=>$this->input->post("no_re"),
    		 "nu_re"=>$this->input->post("nu_re"),
    		 "or_re"=>$this->input->post("or_re"),
         "od_re"=>$this->input->post("od_re"),
    		 "oe_re"=>$this->input->post("oe_re"),
    		 "fe_re"=>$this->input->post("fe_re"),
    		 "fs_re"=>$this->input->post("fs_re")
    	);
    print_r($datosNuevoReservas);
    if ($this->reserva->insertar($datosNuevoReservas)) {
    	redirect("reservas/index");
    }else{
      echo "<h1>NO SE GUARDO LA INFORMACIÓN<h1>";
    }
  }
  // generear una funcion  para eliminar Estudiantes
  public function borrar($id_re){
    if ($this->reserva->eliminarPorId($id_re)) {
      redirect("reservas/index");
      }else {
      echo "<h1>Error al eliminar<h1>";
    }
  }
  //funcion para renderizar actualizacion formulario
  public function actualizar($id){
    $data["reservaEditar"]=$this->reserva->obtenerPorId($id);
    $this->load->view("header");
    $this->load->view("reservas/actualizar",$data);
    $this->load->view("footer");
  }

  public function procesarActualizacion(){
      $datosReservasEditado=array(
        "no_re"=>$this->input->post("no_re"),
        "nu_re"=>$this->input->post("nu_re"),
        "or_re"=>$this->input->post("or_re"),
        "od_re"=>$this->input->post("od_re"),
        "oe_re"=>$this->input->post("oe_re"),
        "fe_re"=>$this->input->post("fe_re"),
        "fs_re"=>$this->input->post("fs_re")

      );
    $id=$this->input->post("id_re");
    if ($this->reserva->actualizar($id,$datosReservasEditado)) {
      redirect("reservas/index");
    }else{
      echo "<h1>NO SE ACTUALIZO<h1>";
    }
  }
}// cierre de la clase

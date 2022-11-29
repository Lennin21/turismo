<?php
class Reserva extends CI_Model
{

  function __construct()
  {
    parent:: __construct();

  }
   public function insertar($datos){
     return $this->db->insert("reservas",$datos);
   }
   //consutla estudiantes base de datos
   public function obtenerTodos(){
     $reservas=$this->db->get("reservas");
     if ($reservas->num_rows()>0) {
      return $reservas;  // cuando hay datos
     } else {
       return false;//cuando no hay datos
     }
      }
      //funcion eliminar estudiante si recibe id

      public function eliminarPorId($id){
        $this->db->where("id_re",$id);
      return $this->db->delete("reservas");
      }
      //consultando el estudiante por su id
      public function obtenerPorId($id){
        $this->db->where("id_re",$id);
        $reservas=$this->db->get("reservas");
          if ($reservas->num_rows()>0) {
            return $reservas->row();
          } else {
            return false;
          }
        }

        // proceso actualizacion estudiantes
        public function actualizar($id,$datos){
        $this->db->where("id_re",$id);
        return $this->db->update("reservas",$datos);
        }

    }//cierre de la clase no borrar

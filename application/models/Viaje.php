<?php
class Viaje extends CI_Model
{

  function __construct()
  {
    parent:: __construct();

  }
   public function insertar($datos){
     return $this->db->insert("viajes",$datos);
   }
   //consutla estudiantes base de datos
   public function obtenerTodos(){
     $viajes=$this->db->get("viajes");
     if ($viajes->num_rows()>0) {
      return $viajes;  // cuando hay datos
     } else {
       return false;//cuando no hay datos
     }
      }
      //funcion eliminar estudiante si recibe id

      public function eliminarPorId($id){
        $this->db->where("id_vi",$id);
      return $this->db->delete("viajes");
      }
      //consultando el estudiante por su id
      public function obtenerPorId($id){
        $this->db->where("id_vi",$id);
        $viajes=$this->db->get("viajes");
          if ($viajes->num_rows()>0) {
            return $viajes->row();
          } else {
            return false;
          }
        }

        // proceso actualizacion estudiantes
        public function actualizar($id,$datos){
        $this->db->where("id_vi",$id);
        return $this->db->update("viajes",$datos);
        }

    }//cierre de la clase no borrar

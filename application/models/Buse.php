<?php
class Buse extends CI_Model
{

  function __construct()
  {
    parent:: __construct();

  }
   public function insertar($datos){
     return $this->db->insert("buses",$datos);
   }
   //consutla estudiantes base de datos
   public function obtenerTodos(){
     $buses=$this->db->get("buses");
     if ($buses->num_rows()>0) {
      return $buses;  // cuando hay datos
     } else {
       return false;//cuando no hay datos
     }
      }
      //funcion eliminar estudiante si recibe id

      public function eliminarPorId($id){
        $this->db->where("id_bu",$id);
      return $this->db->delete("buses");
      }
      //consultando el estudiante por su id
      public function obtenerPorId($id){
        $this->db->where("id_bu",$id);
        $buses=$this->db->get("buses");
          if ($buses->num_rows()>0) {
            return $buses->row();
          } else {
            return false;
          }
        }

        // proceso actualizacion estudiantes
        public function actualizar($id,$datos){
        $this->db->where("id_bu",$id);
        return $this->db->update("buses",$datos);
        }

    }//cierre de la clase no borrar

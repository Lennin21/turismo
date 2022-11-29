<?php
class Socio extends CI_Model
{

  function __construct()
  {
    parent:: __construct();

  }
   public function insertar($datos){
     return $this->db->insert("socios",$datos);
   }
   //consutla estudiantes base de datos
   public function obtenerTodos(){
     $socios=$this->db->get("socios");
     if ($socios->num_rows()>0) {
      return $socios;  // cuando hay datos
     } else {
       return false;//cuando no hay datos
     }
      }
      //funcion eliminar estudiante si recibe id

      public function eliminarPorId($id){
        $this->db->where("id_so",$id);
      return $this->db->delete("socios");
      }
      //consultando el estudiante por su id
      public function obtenerPorId($id){
        $this->db->where("id_re",$id);
        $socios=$this->db->get("socios");
          if ($socios->num_rows()>0) {
            return $socios->row();
          } else {
            return false;
          }
        }

        // proceso actualizacion estudiantes
        public function actualizar($id,$datos){
        $this->db->where("id_so",$id);
        return $this->db->update("socios",$datos);
        }

    }//cierre de la clase no borrar

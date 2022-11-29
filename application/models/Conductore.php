<?php
class Conductore extends CI_Model
{

  function __construct()
  {
    parent:: __construct();

  }
   public function insertar($datos){
     return $this->db->insert("conductores",$datos);
   }
   //consutla estudiantes base de datos
   public function obtenerTodos(){
     $conductores=$this->db->get("conductores");
     if ($conductores->num_rows()>0) {
      return $conductores;  // cuando hay datos
     } else {
       return false;//cuando no hay datos
     }
      }
      //funcion eliminar estudiante si recibe id

      public function eliminarPorId($id){
        $this->db->where("id_co",$id);
      return $this->db->delete("conductores");
      }
      //consultando el estudiante por su id
      public function obtenerPorId($id){
        $this->db->where("id_co",$id);
        $conductores=$this->db->get("conductores");
          if ($conductores->num_rows()>0) {
            return $conductores->row();
          } else {
            return false;
          }
        }

        // proceso actualizacion estudiantes
        public function actualizar($id,$datos){
        $this->db->where("id_co",$id);
        return $this->db->update("conductores",$datos);
        }

    }//cierre de la clase no borrar

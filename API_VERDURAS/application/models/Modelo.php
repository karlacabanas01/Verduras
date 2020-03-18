<?php

class Modelo extends CI_Model{
    public $table_name;

    public function __construct(){
        parent::__construct();
        $this -> table_name = "verdura";
    }

    public function insert($datos){
        return json_encode($this->db->insert($this->table_name, $datos));
    }
  //Delete from verdura where ID = ****
    public function delete($condicion){
        return json_encode($this->db->where($condicion)->delete($this->table_name));
    }
  // update verdura set nombre precio unidad
    public function update($condicion, $datos){
        return json_encode($this->db->where($condicion)->update($this->table_name, $datos));
    }

    public function get_all(){
        return json_encode($this->db->get($this->table_name)->result());
    }
}
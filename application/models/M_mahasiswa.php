<?php

class M_mahasiswa extends CI_Model{
    public $table = 'tb_mahasiswa';

    public function get(){
        try {
            $query = $this->db->get($this->table);
            $data = $query->result_array();
            return $data;
        } catch (Exception $e) {
            return $e;
        }
    }
    public function create($record){
        try {
            $this->db->insert($this->table, $record);
            return $this->db->insert_id();
        } catch (Exception $e) {
            return $e;
        }
    }
    public function delete($id){
        try {
            $this->db->where("id", $id);
            $this->db->delete($this->table);
            return $this->db->insert_id();
        } catch (Exception $e) {
            return $e;
        }
    }
}

?>
<?php

class Model_barang extends CI_Model{

    // function untuk get tb_barang
    public function tampil_data(){
        return $this->db->get('tb_barang');
    }

    // function untuk tambah ke tb_barang
    public function tambah_barang($data, $table){
        $this->db->insert($table,$data);
    }

    // function untuk edit ke tb_barang
    public function edit_barang($where, $table){
        return $this->db->get_where($table, $where);
    }

    // function untuk update ke tb_barang
    public function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    // function untuk hapus ke tb_barang
    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    // function untuk find ke tb_barang
    public function find($id){
        $result = $this->db->where('id_barang', $id)
                       ->limit(1)
                       ->get('tb_barang');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    // function untuk detail barang ke tb_barang
    public function detail_barang($id_barang){
        $result = $this->db->where('id_barang', $id_barang)->get('tb_barang');
        if($result->num_rows() > 0 ){
            return $result->result();
        }else{
            return false;
        }
    }

}

?>
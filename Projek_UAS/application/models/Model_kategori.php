<?php

class Model_kategori extends CI_Model{

    // function menghubungkan database tb_barang ke kategori
    public function data_headphone_dan_headset(){
        return $this->db->get_where("tb_barang", array('kategori' => 'headphone dan headset'));
    }

    // function menghubungkan database tb_barang ke kategori
    public function data_earphone(){
        return $this->db->get_where("tb_barang", array('kategori' => 'earphone'));
    }

    // function menghubungkan database tb_barang ke kategori
    public function data_speaker(){
        return $this->db->get_where("tb_barang", array('kategori' => 'speaker'));
    }

    // function menghubungkan database tb_barang ke kategori
    public function data_kabel_dan_konektor_audio(){
        return $this->db->get_where("tb_barang", array('kategori' => 'kabel dan konektor audio'));
    }
    
    // function menghubungkan database tb_barang ke kategori
    public function data_mic_audio(){
        return $this->db->get_where("tb_barang", array('kategori' => 'mic audio'));
    }

}

?>
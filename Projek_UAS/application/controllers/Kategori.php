<?php

class Kategori extends CI_Controller{

    // function kategori/headphone_dan_headset 
    public function headphone_dan_headset(){
        $data['headphone_dan_headset'] = $this->model_kategori->data_headphone_dan_headset()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('headphone_dan_headset', $data);
        $this->load->view('templates/footer');
    } 

    // function kategori/earphone 
    public function earphone(){
        $data['earphone'] = $this->model_kategori->data_earphone()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('earphone', $data);
        $this->load->view('templates/footer');
    } 

    // function kategori/speaker
    public function speaker(){
        $data['speaker'] = $this->model_kategori->data_speaker()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('speaker', $data);
        $this->load->view('templates/footer');
    } 

    // function kategori/kabel_dan_audio
    public function kabel_dan_konektor_audio(){
        $data['kabel_dan_konektor_audio'] = $this->model_kategori->data_kabel_dan_konektor_audio()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('kabel_dan_konektor_audio', $data);
        $this->load->view('templates/footer');
    } 

    // function kategori/mic_audio
    public function mic_audio(){
        $data['mic_audio'] = $this->model_kategori->data_mic_audio()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('mic_audio', $data);
        $this->load->view('templates/footer');
    } 

}



?>
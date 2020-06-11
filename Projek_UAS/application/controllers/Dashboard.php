<?php

class Dashboard extends CI_Controller{

    // function untuk pengalihan agar user harus login dulu
    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '2'){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login! 
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>');
           redirect('auth/login');
        }
    }

    //function tambah_keranjang
    public function tambah_keranjang($id){
        $barang = $this->model_barang->find($id);

        $data = array(
            'id'      => $barang->id_barang,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_barang,
        );
    
        $this->cart->insert($data);
        redirect('welcome');
    }

    // function untuk detail keranjang
    public function detail_keranjang(){
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('keranjang');
        $this->load->view('templates/footer.php');
    }

    //function untuk hapus
    public function hapus_keranjang(){
        $this->cart->destroy();
        redirect('welcome');
    }

    //function untuk pembayaran
    public function pembayaran(){
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer.php');
    }

    //function untuk proses pesanan
    public function proses_pesanan(){
        $is_processed = $this->model_invoice->index();
        if($is_processed){
        $this->cart->destroy();
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('proses_pesanan');
        $this->load->view('templates/footer.php');                
        }else{
            echo "Maaf, Pesanan Anda Gagal diProses";
        }
    }

    //function untuk detail barang
    public function detail($id_barang){
        $data['barang'] = $this->model_barang->detail_barang($id_barang);
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('detail_barang', $data);
        $this->load->view('templates/footer.php'); 
    }

}

?>
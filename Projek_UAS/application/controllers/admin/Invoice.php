<?php
    class Invoice extends CI_Controller{

        // function untuk pengalihan agar user harus login dulu
        public function __construct(){
            parent::__construct();
    
            if($this->session->userdata('role_id') != '1'){
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Belum Login! 
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>');
               redirect('auth/login');
            }
        }

        //function tampil data dari tb_pesanan
        public function index(){
            $data['invoice'] = $this->model_invoice->tampil_data();
            $this->load->view('templates_admin/header.php');
            $this->load->view('templates_admin/sidebar.php');
            $this->load->view('admin/invoice', $data);
            $this->load->view('templates_admin/footer.php');
        }

        //function tampil data detail dari tb_pesanan, tb_invoice
        public function detail($id_invoice){
            $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
            $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
            $this->load->view('templates_admin/header.php');
            $this->load->view('templates_admin/sidebar.php');
            $this->load->view('admin/detail_invoice', $data);
            $this->load->view('templates_admin/footer.php');
        }
    }
?>  
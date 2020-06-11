<?php
    class Model_invoice extends CI_Model{

        //function menambahkan data ke tb_pesanan, tb_invoice
        public function index(){
            date_default_timezone_set('Asia/Jakarta');
            $nama       = $this->input->post('nama');
            $alamat     = $this->input->post('alamat');
            $no_telp    = $this->input->post('no_telp');
            $jasa_kirim = $this->input->post('jasa_kirim');

            $invoice   = array(
                'nama'          => $nama,
                'alamat'        => $alamat,
                'no_telp'       => $no_telp,
                'jasa_kirim'    => $jasa_kirim,
                'tgl_pesan'     => date('Y-m-d H:i:s'),
                'batas_bayar'   => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))
                ),
            );

            $this->db->insert('tb_invoice', $invoice);
            $id_invoice = $this->db->insert_id();

            foreach($this->cart->contents() as $item){
                $data = array(
                    'id_invoice'        => $id_invoice,
                    'id_barang'         => $item['id'],
                    'nama_barang'       => $item['name'],
                    'jumlah'            => $item['qty'],
                    'harga'             => $item['price'],
                );
                $this->db->insert('tb_pesanan', $data);
            }

            return true;
        }

        //function tampil data dari tb_invoice
        public function tampil_data(){
            $result = $this->db->get('tb_invoice');
            if($result->num_rows() > 0){
                return $result->result();
            }else{
                return false;
            }
        }

        //function ambil id invoice
        public function ambil_id_invoice($id_invoice){
            $result = $this->db->where('id', $id_invoice)->limit(1)->get('tb_invoice');
            if($result->num_rows() > 0){
                return $result->row();
            }else{
                return false;       
            }
        }

        //function ambil id invoice ke tb_pesanan
        public function ambil_id_pesanan($id_invoice){
            $result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
            if($result->num_rows() > 0){
                return $result->result();
            }else{
                return false;      
            }
        }

    }
?>
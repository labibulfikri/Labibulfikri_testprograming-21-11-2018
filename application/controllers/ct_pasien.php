<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ct_pasien extends CI_Controller {


public function index()
	{
		 $this->load->model('md_pasien');
        $data['get_pasien']=$this->md_pasien->data_pasien();
        
		$this->load->view('pasien/data_pasien',$data);
	}
public function tambah()
	{

		$this->load->model('md_pasien');
        $data['get_max_pasien']=$this->md_pasien->data_max_pasien();
        $this->load->view('pasien/tambah_data_pasien',$data);
	}

	  public function tambah_data(){
        $this->load->model('md_pasien');

        $data=array(
            'id_pasien'=> $this->input->post('id_pasien'),
            'kode_pasien'=> $this->input->post('kode_pasien'),
            'nama_pasien'=> $this->input->post('nama_pasien'),
            'alamat_pasien'=> $this->input->post('alamat_pasien'),
            'no_tlp'=> $this->input->post('no_tlp')
            
            );
// 
        if ($data>=1){
            $result = $this->md_pasien->tambah_pasien($data);
            echo $this->session->set_flashdata('pesan', "<div class='alert alert-success alert-dismissable' style='margin-top:20px'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
            <h4><i class='icon glyphicon glyphicon-remove'></i> Sukses !</h4> Data Berhasil Ditambahkan
            </div>");
            redirect('ct_pasien');
        }
        
    }

    public function update(){
        $this->load->model('md_pasien');
        $id = $this->input->post('id_pasien');

        $data=array(
            'kode_pasien'=> $this->input->post('kode_pasien'),
            'nama_pasien'=> $this->input->post('nama_pasien'),
            'alamat_pasien'=> $this->input->post('alamat_pasien'),
            'no_tlp'=> $this->input->post('no_tlp')
            
            );
        if ($data >=1){

            $result = $this->md_pasien->update_data('id_pasien','pasien', $data, $id);
            echo $this->session->set_flashdata('pesan', "<div class='alert alert-success alert-dismissable' style='margin-top:20px'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
            <h4><i class='icon glyphicon glyphicon-remove'></i> Sukses !</h4> Data Berhasil Di Update
            </div>");
            redirect('ct_pasien');

        }
    }

     public function delete(){
        $this->load->model('md_pasien');
        $id = $this->input->post('id_pasien');


         if ($id>=1){
       $result = $this->md_pasien->hapus_data('id_pasien','pasien',$id);
        echo $this->session->set_flashdata('pesan', "<div class='alert alert-danger alert-dismissable' style='margin-top:20px'>
             <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
             <h4><i class='icon glyphicon glyphicon-remove'></i> Sukses !</h4> Data Berhasil Di hapus
             </div>");
         redirect('ct_pasien');
        
        }
    }



}

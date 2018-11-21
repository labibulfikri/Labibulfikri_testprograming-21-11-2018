 <?php 
class Md_pasien_rawat extends CI_Model {

	function tambah_pasien($data){
		
	$sql=$this->db->query("INSERT INTO pasien_rawat_jalan (id_pasien,id_pasien_rawat_jalan,kode_pasien,nama_pasien,jam,tgl_daftar,pembayaran,kelas,paket,no_asuransi) values('$data[id_pasien]','$data[id_pasien_rawat_jalan]','$data[kode_pasien]','$data[nama_pasien]','$data[jam]','$data[tgl_daftar]','$data[pembayaran]','$data[kelas]','$data[paket]','$data[no_asuransi]')");

	return $sql;
    }

    public function data_pasien (){
	$sql=$this->db->query("select * from pasien")->result();
	return $sql;
	}

    public function data_pasien_rwt (){
	$sql=$this->db->query("select * from pasien_rawat_jalan ")->result();
	return $sql;
	}
	public function data_max (){
	$sql=$this->db->query("select max(id_pasien_rawat_jalan)+1 as res from pasien_rawat_jalan")->result();
	return $sql;
	}

	public function update_data($kolom,$table, $data, $id)
 	// UPDATE DATA 
 	{
 	$this->db->where($kolom, $id);
	$this->db->update($table,$data);
	}	

	public function hapus_data($kolom,$table,$id)
 	{//DELETE DATA 
 	$this->db->where($kolom, $id);
	$this->db->delete($table);
	}	

}
 
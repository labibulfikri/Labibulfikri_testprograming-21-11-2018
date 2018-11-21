 <?php 
class Md_pasien extends CI_Model {

	function tambah_pasien($data){
		
	$sql=$this->db->query("INSERT INTO pasien (id_pasien,kode_pasien,nama_pasien,alamat_pasien,no_tlp) values('$data[id_pasien]','$data[kode_pasien]','$data[nama_pasien]','$data[alamat_pasien]','$data[no_tlp]')");
	return $sql;
    }

    public function data_pasien (){
	$sql=$this->db->query("select * from pasien ")->result();
	return $sql;
	}

	public function data_max_pasien (){
	$sql=$this->db->query("select max(id_pasien)+1 as res from pasien")->result();
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
 
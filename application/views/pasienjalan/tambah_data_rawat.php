<?php
 error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

?>
<!DOCTYPE html>
<html>
<head>

<?php $this->load->view('css_index');?> 

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 
<?php $this->load->view('header'); ?> 

     
<?php $this->load->view('sidebar'); ?>
 


  <!-- Content Wrapper. Contains page content -->
  
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content-header">

  <h1>
        Advanced Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>



<section class="content">


      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Form Tambah Data</h3>
             <form class="form-horizontal" action="<?php echo base_url('Ct_pasien_rawat/tambah_data');?>" method="post" enctype="multipart/form-data" role="form">

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>ID Pasien</label>

                <?php foreach ($get_max as $key ) { ?>
                
                <input type="text" name="id_pasien_rawat_jalan" value="<?php echo $key->res;?>" readonly >
                <?php } ?>
                
                <input type="text" name="id_pasien" data-toggle="modal" readonly class="form-control" data-target="#modal_pasien_id" id="id_pasien">

              </div>
              <div class="form-group">
                <label>Kode Pasien</label>
                <input type="text" name="kode_pasien" readonly id="kode_pasien" class="form-control">
              </div>

              <div class="form-group">
                <label> Nama Pasien</label>
                <input type="text" name="nama_pasien" readonly id="nama_pasien" class="form-control">
              </div>
              <!-- /.form-group -->
             </div>

            <!-- /.col -->
            <div class="col-md-4">
              <div class="form-group">
                 <div class="form-group">
                <label> Tanggal Daftar</label>
                <input type="date" name="tgl_daftar" class="form-control">
              </div>

              <div class="form-group">
                <label> jam </label>
                <input type="time" class="form-control" name="jam_daftar" placeholder="input Data">
              </div>
            
            <div class="form-group">
                <label> Kelas</label>
                <select name="kelas" class="form-control select2" data-placeholder="Identitas"
                        style="width: 100%;">
                  <option value="Kelas 1">Kelas 1</option>
                  <option value="Kelas 2">Kelas 2</option>
                </select>
              </div>
            </div>
          </div>
              <!-- /.form-group -->

              <div class="col-md-4">
               <div class="form-group">
                <label> Pembayaran</label>
                <select name="pembayaran" class="form-control">
                  <option value="BPJS">BPJS</option>
                  <option value="Mandiri">Mandiri</option>
                </select>
              </div>
          

                <div class="form-group">
                <label> no asuransi</label>
                <input type="text" name="no_asuransi" class="form-control">
              </div>
              

              <div class="form-group">
                <label> Paket </label>
               <select name="paket" class="form-control select2" data-placeholder="Identitas"
                        style="width: 100%;">
                  <option value="Paket A"> Paket A</option>
                  <option value="Paket B"> Paket B</option>
                </select>
               
               </div>

              <div class="box-footer pull-right">
                <button class="btn btn-primary"> simpan</button>

                <button class="btn btn-danger"> Batal</button>
              </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
    </form>
</section>
</div>


<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
</footer>





</div>

<?php $this->load->view('js_index');?>


  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal_pasien_id" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
          <h4 class="modal-title">Detail Data Admin </h4>
        </div>
          <div class="modal-body">
            <table class="table example1 table-bordered table-striped">
              <thead>
                <tr>
                  <th>Id Pasien </th>
                  <th>Kode Pasien </th> 
                  <th>Nama Pasien </th>
                  <th>aksi </th>
                </tr>
              </thead>

              <!-- <tbody id="modal_tabel_lp"> -->
              <tbody>
                <?php 
                $no = 1;
                foreach ($get_pasien as $dt ) {
                  ?>
                  <tr>

                    <td> <?php echo $dt->id_pasien;?> </td>
                    <td><center><?php echo $dt->kode_pasien;?></center> </td> 
                    <td><center><?php echo $dt->nama_pasien;?></center></td>
                    <td>
                     <button id-pasien="<?php echo $dt->id_pasien;?>" kode-pasien="<?php echo $dt->kode_pasien;?>" nama-pasien="<?php echo $dt->nama_pasien;?>" onclick="ambilId(this);" class="btn btn-primary">Ambil</button> 
                    
                    </td>
                  </tr>
                  <?php
                  $no++;                
                  }
                  ?>
              </tbody>
            </table>
          </div>
      </div>
    </div>
  </div>
<script type="text/javascript">

function ambilId(btn_user){


  var id = btn_user.getAttribute("id-pasien");
  var nama = btn_user.getAttribute("nama-pasien");
  var kode = btn_user.getAttribute("kode-pasien");


  document.getElementById("nama_pasien").value = nama ; 
  document.getElementById("id_pasien").value = id ;
  document.getElementById("kode_pasien").value = kode ;
   $("#modal_pasien_id").modal("hide");
  }	
</script>

 

</body>
</html>

































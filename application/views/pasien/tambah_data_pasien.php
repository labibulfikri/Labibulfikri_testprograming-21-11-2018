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
             <form class="form-horizontal" action="<?php echo base_url('Ct_pasien/tambah_data');?>" method="post" enctype="multipart/form-data" role="form">

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
                <?php foreach ($get_max_pasien as $key) { ?>

                <input type="text" readonly name="id_pasien" class="form-control" value="<?php echo $key->res;?>" placeholder="Auto">
             <?php }  ?>
                
              </div>
              <div class="form-group">
                <label>Kode Pasien</label>
                <input type="text" name="kode_pasien" class="form-control">
              </div>

              <div class="form-group">
                <label> Nama Pasien</label>
                <input type="text" name="nama_pasien" class="form-control">
              </div>
              <!-- /.form-group -->
             </div>

            <!-- /.col -->
            <div class="col-md-4">
              <div class="form-group">
                 <div class="form-group">
                <label> Alamat</label>
                <input type="text" name="alamat_pasien" class="form-control">
              </div>

              <div class="form-group">
                <label> No Identitas</label>
                <select name="type_identitas" class="form-control select2" data-placeholder="Identitas"
                        style="width: 100%;">
                  <option value="KTP">KTP</option>
                  <option value="SIM">SIM</option>
                </select>
                <input type="text" class="form-control" name="no_identitas" placeholder="input Data">
              </div>
            
            <div class="form-group">
                <label> Jenis Kelamin</label>
                <select name="no_identitas" class="form-control select2" data-placeholder="Identitas"
                        style="width: 100%;">
                  <option>Laki Laki</option>
                  <option>Perempuan</option>
                </select>
              </div>
            </div>
          </div>
              <!-- /.form-group -->

              <div class="col-md-4">
               <div class="form-group">
                <label>No telp</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" name="no_tlp" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                </div>
              </div>

              <div class="form-group">
                <label>Tanggal Lahir </label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" name="tgl_lahir">
                </div>
              </div>

              <div class="form-group">
                <label> Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control">
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





<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">


      
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      
</div>
</aside>
</div>

<?php $this->load->view('js_index');?>

</body>
</html>

































<?php
 error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

?>
<!DOCTYPE html>
<html>
<head>


<!-- <?php $this->load->view('css_index');?>  -->

 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Trust Medis</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">

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
        Data Pasien
        <small> Form Data Pasien</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data Pasien</li>
      </ol>

</section>




<section class="content">  
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Pasien </th>
                  <th>Nama </th>
                  <th>Alamat</th>
                  <th>Telphone </th>
                  <th>Agama</th>
                  <th>Status Menikah</th>
                  <th> Aksi </th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($get_pasien as $key) { ?>
                   
                <tr>
                  <td> <?php echo $key->id_pasien;?></td>
                  <td> <?php echo $key->nama_pasien;?></td>
                  <td> <?php echo $key->alamat_pasien;?></td>
                  <td> <?php echo $key->no_tlp;?></td>
                  <td> <?php echo $key->agama;?></td>
                  <td> <?php echo $key->status_menikah;?></td>
<td>


<a data-toggle="modal" data-target="#modal_edit<?php echo $key->id_pasien; ?>" data-id="<?php echo $key->id_pasien; ?> " class="btn btn-warning pull-right" style="margin-left: 10px">edit </a>

<a data-toggle="modal" data-target="#modal_hapus<?php echo $key->id_pasien; ?>" data-id="<?php echo $key->id_pasien; ?> " class="btn btn-danger pull-right" style="margin-left: 10px">hapus </a>

            

           </td>
                  </tr>
              <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
</section>



<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
</footer>




</div>

<?php foreach ($get_pasien as $key) { ?>

 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal_hapus<?php echo $key->id_pasien; ?>" class="modal fade">
   <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
            <h4 class="modal-title">Hapus </h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url('ct_pasien/delete');?>" method="post" enctype="multipart/form-data" role="form">

            <div class="modal-body">

              <input type="hidden" value="<?php echo $key->id_pasien; ?>" class="form-control" name="id_pasien" placeholder="Tuliskan Nama">
              <div class="form-group">
               <div class="col-lg-10">
                <center><label class="control-label">Apakah Anda Yakin Menghapus Data ID Pasien = <?php echo $key->id_pasien;?> dengan nama =<?php echo $key->nama_pasien; ?> </label></center>
              </div>        
            </div>

          </div>

          <div class="modal-footer">
            <button class="btn btn-danger" type="submit"> YA </button>
            <button type="button" class="btn btn-info" data-dismiss="modal"> Tidak</button>
          </div>
        </form>
      </div>
    </div>
          <!-- /.modal-dialog -->
        </div>
      <?php } ?>
        <!-- /.modal -->





<?php foreach ($get_pasien as $key) { ?>

 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal_edit<?php echo $key->id_pasien; ?>" class="modal fade">
   <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
            <h4 class="modal-title">Hapus </h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url('ct_pasien/update');?>" method="post" enctype="multipart/form-data" role="form">

            <div class="modal-body">
              <label class="control-label"> id Pasien</label>
              <input type="text" value="<?php echo $key->id_pasien; ?>" class="form-control" name="id_pasien" placeholder="Tuliskan Nama">
              
             <label class="control-label"> Nama Pasien</label>
              <input type="text" value="<?php echo $key->nama_pasien; ?>" class="form-control" name="nama_pasien" placeholder="Tuliskan Nama">
               <label class="control-label"> Alamat Pasien</label>
              <input type="text" value="<?php echo $key->alamat_pasien; ?>" class="form-control" name="alamat_pasien" placeholder="Tuliskan Nama">

              
             </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="simpan">
              </div>
           </form>
        </form>
      </div>
    </div>
          <!-- /.modal-dialog -->
        </div>
      <?php } ?>

<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>


</body>
</html>
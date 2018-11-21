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

  <h2>Hallo</h2>
    
    
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

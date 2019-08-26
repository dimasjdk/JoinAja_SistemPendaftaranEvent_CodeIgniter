<!DOCTYPE html>



<html>



<head>







  <meta charset="utf-8">



  <meta http-equiv="X-UA-Compatible" content="IE=edge">



  <title>Admin | Dashboard</title>



  <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/images/join/logo.png" >



  <!-- Tell the browser to be responsive to screen width -->



  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">



  <!-- Bootstrap 3.3.6 -->



  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">



  <!-- Font Awesome -->



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">



  <!-- Ionicons -->



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">



  <!-- Theme style -->



  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">



  <!-- AdminLTE Skins. Choose a skin from the css/skins



       folder instead of downloading all of them to reduce the load. -->



  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">



  <script>



  $('form[name="form-lunas"]').on('submit', function() {



    $('#submit').prop('disabled', true);



});



  </script>



</head>



<body class="hold-transition skin-blue sidebar-mini">



<div class="wrapper">







  <header class="main-header">



    <!-- Logo -->



    <a href="{{route('admin.index" class="logo">



      <!-- mini logo for sidebar mini 50x50 pixels -->



      <span class="logo-mini">HMTI</span>



      <!-- logo for regular state and mobile devices -->



      <span class="logo-lg"><b>Admin</b> | Join Aja</span>



    </a>



    <!-- Header Navbar: style can be found in header.less -->



    <nav class="navbar navbar-static-top">



      <!-- Sidebar toggle button-->



      <!-- <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">



        <span class="sr-only">Toggle navigation</span>



      </a> -->







      <div class="navbar-custom-menu">



        <ul class="nav navbar-nav">



          <!-- User Account: style can be found in dropdown.less -->



          <li class="dropdown user user-menu">



            <a href="#" class="dropdown-toggle" data-toggle="dropdown">



              <img src="<?php echo base_url();?>assets/images/join/logo.png" class="user-image" alt="User Image">



              <span class="hidden-xs"><?php echo $_SESSION["name"]?></span>



            </a>



            <ul class="dropdown-menu">



              <!-- User image -->



              <li class="user-header">



              <img src="<?php echo base_url();?>assets/images/join/logo.png" class="img-circle" alt="User Image">



                <p><?php echo $_SESSION["name"]?>



                </p>



              </li>



              <!-- Menu Footer-->



              <li class="user-footer">



                <!-- <div class="pull-left">



                  <a href="#" class="btn btn-default btn-flat">Profile</a>



                </div> -->



                <div class="pull-right">



                  <a href="<?php echo site_url('login/logout');?>" class="btn btn-default btn-flat">Sign out</a>



                </div>



              </li>



            </ul>



          </li>



        </ul>



      </div>



    </nav>



  </header>



  <!-- Left side column. contains the logo and sidebar -->



  <aside class="main-sidebar">



    <!-- sidebar: style can be found in sidebar.less -->



    <section class="sidebar">



      <!-- Sidebar user panel -->



      <div class="user-panel">



        <div class="pull-left image">



          <img src="<?php echo base_url();?>assets/images/join/logo.png"  alt="User Image">



        </div>



        <div class="pull-left info">



          <p><?php echo $_SESSION["name"]?></p>



          



        </div>



      </div>



      <!-- sidebar menu: : style can be found in sidebar.less -->



      <ul class="sidebar-menu">



        <li class="header">MAIN NAVIGATION</li>



          <li><a href="<?php echo base_url('admin/peserta');?>"><i class="fa fa-users"></i> <span>Peserta</span></a></li>



          <li><a href="<?php echo base_url('admin/lunas');?>"><i class="fa fa-check-square-o"></i> <span>Lunas</span></a></li>



          <li><a href="<?php echo base_url('admin/confirm');?>"><i class="fa fa-qrcode"></i> <span>Konfirmasi</span></a></li>



          <li><a href="<?php echo base_url('admin/hadir');?>"><i class="fa fa-calendar-check-o"></i> <span>Hadir</span></a></li>



      </ul>



    </section>



    <!-- /.sidebar -->



  </aside>







  <!-- Content Wrapper. Contains page content -->



  <div class="content-wrapper">

      

      <?php echo $contents;?>



  <!-- /.content-wrapper -->



  </div>







  <footer class="main-footer">



    <div class="pull-right hidden-xs">



      <b>Version</b> 2.3.8



    </div>



    <strong>Copyright &copy; 2019 <a href="http://hmti.dinus.ac.id">Joinaja.com </a>.</strong> All rights



    reserved.



  </footer>



  <div class="control-sidebar-bg"></div>



<!-- ./wrapper -->







<!-- jQuery 2.2.3 -->



<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>



<!-- jQuery UI 1.11.4 -->



<!-- <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script> -->



<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->



<script>



  $.widget.bridge('uibutton', $.ui.button);



</script>



<!-- Bootstrap 3.3.6 -->



<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>



<!-- FastClick -->



<script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.js"></script>



<!-- AdminLTE App -->



<script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>



<!-- AdminLTE dashboard demo (This is only for demo purposes) -->



<script src="<?php echo base_url();?>assets/dist/js/pages/dashboard.js"></script>



<!-- AdminLTE for demo purposes -->



<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>







<script src="<?php echo base_url();?>assets/js/jquery.js"></script>



<script src="<?php echo base_url();?>assets/js/jquery.smooth-scroll.min.js"></script>



<script>



  $(function(){



    $('input[name="kategori"]').on('click',function(){



      if($(this).val()=='mhs'){



        $('#instansi').show();



        $('#jurusan').show();



        $('#alamat').hide();



      }



      else{



        $('#alamat').show();



        $('#instansi').hide();



        $('#jurusan').hide();



      }



    });



  });



</script>



</body>



</html>




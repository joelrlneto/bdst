<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>BDST | 2016</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('/assets/dist/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('/assets/dist/css/ionicons.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('/assets/dist/css/AdminLTE.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('/assets/dist/css/skins/_all-skins.min.css') ?>" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url('/assets/plugins/jQuery/jQuery-2.1.3.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
  </head>
  <body class="skin-blue">
    <!-- Site wrapper -->
    <div class="wrapper">
      
      <header class="main-header">
        <a href="../../index2.html" class="logo"><b>BDST</b>2016</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url('/assets/dist/img/user2-160x160.jpg');?>" class="user-image" alt="User Image"/>
                  <!--<span class="hidden-xs"><?php echo $this->session->userdata('login'); ?></span>-->
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url('/assets/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $this->session->userdata('nome'); ?>
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="<?php echo base_url('/index.php/autenticacao/sair'); ?>" class="btn btn-danger btn-flat">Sair</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url('/assets/dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $this->session->userdata('login'); ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li><a href="<?php echo base_url('/index.php/perfil');?>"><i class="fa fa-user"></i><span>Perfil</span></a></li>
            <li><a href="<?php echo base_url('/index.php/forum');?>"><i class="fa fa-comments"></i><span>Fórum</span></a></li>
            <li><a href="<?php echo base_url('/index.php/experiencias');?>"><i class="fa fa-briefcase"></i><span>Experiências</span></a></li>
            <li><a href="<?php echo base_url('/index.php/documentos');?>"><i class="fa fa-file"></i><span>Documentos</span></a></li>
            <li><a href="<?php echo base_url('/index.php/cat');?>"><i class="fa fa-file-text"></i><span>CAT</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <?php echo $contents; ?>
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <script src="<?php echo base_url('/assets/plugins/slimScroll/jquery.slimScroll.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/plugins/fastclick/fastclick.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/dist/js/app.min.js'); ?>"></script>
  </body>
</html>
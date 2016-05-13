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
        <script src="../../https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="../../https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="skin-blue layout-top-nav">
    <div class="wrapper">
      
      <header class="main-header">               
        <nav class="navbar navbar-static-top">
          <div class="container-fluid">
          <div class="navbar-header">
            <a href="../../index2.html" class="navbar-brand"><b>BDST</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo base_url('/index.php/home/cadastro'); ?>">Cadastre-se</a></li>
              <li><a href="<?php echo base_url('/index.php/home/login'); ?>">Login</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container-fluid">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Base de Dados para Segurança no Trabalho
              <small>Beta</small>
            </h1>
          </section>

          <!-- Main content -->
          <section class="content">
              <div class="row">
                  <div class="col-md-12">
                      <div class="box box-primary">
                          <div class="box-body">
                              A Base de Dados para Segurança no Trabalho - BDST - é uma plataforma colaborativa, feita para engenheiros, médicos, técnicos, enfermeiros e outros profissionais da área de Segurança no Trabalho.
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-4">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">Fórum</h3>
                        </div>
                        <div class="box-body">
                            Participe do fórum, tire suas dúvidas e contribua com sua experiência, respondendo perguntas e avaliando respostas.
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->  
                  </div>
                  <div class="col-md-4">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">Plataforma colaborativa</h3>
                        </div>
                        <div class="box-body">
                            Acesse documentos, NRs e relatos de profissionais que podem lhe ajudar no exercício da profissão. Compartilhe também suas experiências e ajude colegas.
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->  
                  </div>
                  <div class="col-md-4">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">Emissão de documentos</h3>
                        </div>
                        <div class="box-body">
                            Vários modelos de documentos, como o CAT, para emitir rapidamente a partir de um formulário de fácil preenchimento.
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->  
                  </div>
              </div>
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="pull-right hidden-xs">
            <b>Version</b> 2.0
          </div>
          <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
        </div><!-- /.container -->
      </footer>
    </div><!-- ./wrapper -->

    <script src="<?php echo base_url('/assets/plugins/jQuery/jQuery-2.1.3.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/plugins/slimScroll/jquery.slimScroll.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/plugins/fastclick/fastclick.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/dist/js/app.min.js'); ?>"></script>
  </body>
</html>
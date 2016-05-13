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
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="<?php echo base_url(''); ?>"><b>BDST</b>2016</a> 
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Cadastre-se e participe</p>
        <form action="<?php echo base_url('/index.php/cadastro/cadastrar'); ?>" method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="E-mail" name="email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Usuário" name="login"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Senha" name="senha"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-md-4 col-md-offset-8">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Acessar</button>
            </div><!-- /.col -->
          </div>
        </form>

        <a href="<?php echo base_url('/index.php/home/login'); ?>" class="text-center">Já sou cadastrado.</a>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <script src="<?php echo base_url('/assets/plugins/jQuery/jQuery-2.1.3.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/bootstrap/js/bootstrap.min.js'); ?>'"></script>
    <script src="<?php echo base_url('/assets/plugins/iCheck/icheck.min.js'); ?>"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
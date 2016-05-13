<section class="content-header">
    <h1> Meu perfil <small>Atualize seus dados pessoais</small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Painel</a></li>
        <li><a href="#">Perfil</a></li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Bem vindo(a)!</h3>
        </div>
        <div class="box-body">
           <?php echo $this->session->userdata('tipo'); ?>
        </div>
    </div>
</section>
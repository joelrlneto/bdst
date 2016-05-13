<section class="content-header">
    <h1> Experiências <small>Compartilhe e conheça</small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Painel</a></li>
        <li><a href="#">Experiências</a></li>
        <li><a href="#">Adicionar nova</a></li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Cadastrar nova experiência</h3>
        </div>
        <div class="box-body">
            <form action="<?php echo base_url('/index.php/experiencias/gravar')?>" method="post">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" name="titulo" placeholder="Informe um título que identifique o registro"/>
                </div> 
                <div class="form-group">
                    <label for="data_realizacao">Data de realização</label>
                    <input type="date" class="form-control" name="data_realizacao"/>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" name="descricao"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Gravar"/>
                </div>
            </form>
        </div>
    </div>
</section>
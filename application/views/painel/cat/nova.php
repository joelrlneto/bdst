<section class="content-header">
    <h1> Emitir CAT <small>Comunicação de Acidente do Trabalho</small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Painel</a></li>
        <li><a href="#">CAT</a></li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Cadastrar nova experiência</h3>
        </div>
        <div class="box-body">
            <form action="<?php echo base_url('/index.php/cat/gravar')?>" method="post">
                <div class="form-group">
                    <label for="nome_funcionario">Nome do funcionário</label>
                    <input type="text" class="form-control" name="nome_funcionario" placeholder="Nome do funcionário que sofreu o acidente"/>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="data_ocorrencia">Data do acidente</label>
                            <input type="date" class="form-control" name="data_ocorrencia"/>
                        </div>        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="dias_afastado">Dias de afastamento</label>
                            <input type="number" min="0" class="form-control" name="dias_afastado"/>
                        </div>        
                    </div>
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
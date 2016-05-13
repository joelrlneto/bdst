<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CAT | BDST 2016</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('/assets/dist/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('/assets/dist/css/ionicons.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('/assets/dist/css/AdminLTE.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('/assets/dist/css/skins/_all-skins.min.css') ?>" rel="stylesheet" type="text/css" />
    <style>
        input{
            background-color:white;
        }
    </style>
</head>
<body>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Comunicação de Acidente no Trabalho</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label for="">Nome do funcionário</label>
                    <input type="text" readonly value="<?php echo $cat->nome_funcionario; ?>" class="form-control"/>    
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-6 col-sm-6">
                        <div class="form-group">
                            <label for="">Data do acidente</label>
                            <input type="text" readonly value="<?php echo $cat->data_ocorrencia; ?>" class="form-control"/>    
                        </div>                        
                    </div>
                    <div class="col-md-6 col-xs-6 col-sm-6">
                        <div class="form-group">
                            <label for="">Dias de afastamento</label>
                            <input type="text" readonly value="<?php echo $cat->dias_afastado; ?>" class="form-control"/>    
                        </div>                        
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="">Descrição</label>
                    <textarea readonly class="form-control"><?php echo $cat->descricao; ?></textarea>    
                </div>
            </div>
        </div>
    </section>
    
    <script>
        window.print();
    </script>
</body>
</html>
<section class="content-header">
    <h1> CAT <small>Comunicação de Acidente no Trabalho</small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Painel</a></li>
        <li><a href="#">CAT</a></li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <a href="<?php echo base_url('/index.php/cat/nova'); ?>" class="btn btn-primary pull-right">Cadastrar nova</a>
        </div>
        <div class="box-body">
           <table class="table table-hover table-striped">
               <thead>
                   <tr>
                       <th>Data do acidente</th>
                       <th>Funcionário</th>
                       <th></th>
                   </tr>
               </thead>
               <tbody>
                <?php
                    foreach ($cats as $cat) {
                        echo '<tr>';
                        echo '<td>'.$cat->data_ocorrencia.'</td>';
                        echo '<td>'.$cat->nome_funcionario.'</td>';
                        echo '<td>';
                        echo '<a href='.base_url('/index.php/cat/imprimir/'.$cat->id).' title="Imprimir CAT" class="btn btn-primary pull-right" target="_blank"><i class="fa fa-print"></i></a>';
                        echo '<a href='.base_url('/index.php/cat/excluir/'.$cat->id).' title="Excluir CAT" class="btn btn-danger pull-right"><i class="fa fa-trash"></i></a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                ?>    
               </tbody>               
           </table>
        </div>
    </div>
</section>
<section class="content-header">
    <h1> Experiências <small>Compartilhe e conheça</small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Painel</a></li>
        <li><a href="#">Experiências</a></li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <a href="<?php echo base_url('/index.php/experiencias/minhas_experiencias'); ?>" class="btn btn-default ">Meus registros</a>
            <a href="<?php echo base_url('/index.php/experiencias/nova'); ?>" class="btn btn-primary pull-right">Cadastrar nova</a>
        </div>
        <div class="box-body">
           <table class="table table-hover table-striped">
               <thead>
                   <tr>
                       <th>Título</th>
                       <th>Data de realização</th>
                       <th>Usuário</th>
                   </tr>
               </thead>
               <tbody>
                <?php
                    foreach ($experiencias as $exp) {
                        echo '<tr>';
                        echo '<td><a href="#">'.$exp->titulo.'</a></td>';
                        echo '<td>'.$exp->data_realizacao.'</td>';
                        echo '<td>'.$exp->usuario.'</td>';
                        echo '</tr>';
                    }
                ?>    
               </tbody>               
           </table>
        </div>
    </div>
</section>
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
            <h3 class="box-title">Tipo de usuário</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                Você é um(a):
                <input type="radio" name="tipo" value="profissional" <?php echo $this->session->userdata('tipo') == 'profissional'?'checked':''; ?>/>Profissional
                <input type="radio" name="tipo" value="empresa" <?php echo $this->session->userdata('tipo') == 'empresa'?'checked':''; ?>/>Empresa
                <hr/>    
            </div>
            
            <div id="div-profissional" <?php echo $this->session->userdata('tipo') == 'empresa'?'style="display:none"':''; ?>>
                <form action="<?php echo base_url('/index.php/perfil/gravar_profissional'); ?>" method="post">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" placeholder="Seu nome" value="<?php echo $profissional?$profissional->nome:''; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="profissao">Profissão</label>
                        <select name="profissao" class="form-control">
                            <option value="Eng. de Seg. no Trabalho">Eng. de Seg. no Trabalho</option>
                            <option value="Médico do Trabalho">Médico do Trabalho</option>
                            <option value="Téc. em Seg. no Trabalho">Téc. em Seg. no Trabalho</option>
                            <option value="Enfermeiro do Trabalho">Enfermeiro do Trabalho</option>
                            <option value="Aux. de Enfermagem do Trabalho">Aux. de Enfermagem do Trabalho</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="registro">Registro</label>
                        <input type="text" class="form-control" name="registro" placeholder="CRM, CREA, COREN, etc." value="<?php echo $profissional?$profissional->registro:''; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="curriculo">Currículo</label>
                        <textarea class="form-control" name="curriculo"><?php echo $profissional?$profissional->curriculo:''; ?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Gravar"/>                        
                    </div>
                </form>
                
            </div>
            
            <div id="div-empresa" <?php echo $this->session->userdata('tipo') == 'profissional'?'style="display:none"':''; ?>>
                <form action="<?php echo base_url('/index.php/perfil/gravar_empresa'); ?>" method="post">
                    <div class="form-group">
                        <label for="nome_fantasia">Nome fantasia</label>
                        <input type="text" class="form-control" name="nome_fantasia" placeholder="Nome da empresa" value="<?php echo $empresa?$empresa->nome_fantasia:''; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="razao_social">Razão social</label>
                        <input type="text" class="form-control" name="razao_social" placeholder="Razão social" value="<?php echo $empresa?$empresa->razao_social:''; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="ramo_atuacao">Área de atuação</label>
                        <input type="text" class="form-control" name="ramo_atuacao" placeholder="Ramo de atuação da empresa" value="<?php echo $empresa?$empresa->ramo_atuacao:''; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição da empresa</label>
                        <textarea class="form-control" name="descricao"><?php echo $empresa?$empresa->descricao:''; ?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Gravar"/>
                    </div>
                </form>
            </div>
            
            <div class="panel panel-danger">
                <div class="panel-heading">
                    Zona de alerta
                </div>
                <div class="panel-body">
                    <form action="<?php echo base_url('/index.php/cadastro/excluir_conta')?>" method="post">
                        Caso não deseje mais participar da Base de Dados para Segurança no Trabalho (BDST), basta excluir sua conta.
                        <input type="submit" class="btn btn-danger pull-right" value="Excluir conta"/>    
                    </form>    
                </div>                    
            </div>
        </div>
    </div>
</section>

<script>
    $(function(){
        $("input[name=tipo]").change(function(){
            var selecao = $(this).val();
            if(selecao == "profissional"){
                $("#div-empresa").hide();                
                $("#div-profissional").show();
            }
            else {
                $("#div-profissional").hide();
                $("#div-empresa").show();
            }
        })
    })
</script>
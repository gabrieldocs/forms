<?php require 'head.view.php'; ?>
<section class = "container mt-5 body">
    <div class = "row d-flex justify-content-center">
        <div class = "col-md-5">
            <center>
                <code class = "text-muted">Entre para o Ecossistema</code>
                <h1>Cadastro de material</h1>
                <div class = "pre bg-dark mt-5 mb-5"></div>
            </center>

            <form>
                <div class = "row mb-5">
                    <div class = "col-md-12 mb-1">
                        <label>Nome do Autor</label>
                        <input class = "form-control mb-3" type = "text" name = "nome"/>
                    </div>
                    
                    <div class = "col-md-12 mb-1">
                        <label>Titulação do autor</label>
                        <input class = "form-control mb-3" type = "text" name = "nome"/>
                    </div>

                    <div class = "col-md-12  mb-1">
                        <label>Título do material</label>
                        <input class = "form-control mb-3" type = "text" name = "nome"/>
                    </div>

                    <div class = "col-md-6 mb-1">
                        <label>Selecione o tipo</label>
                        <select class = "form-control mb-3">
                            <option>Livro</option>
                            <option>Curadoria</option>
                            <option>Palestra</option>
                        </select>
                    </div>

                    <div class = "col-md-6 mb-1">
                        <label>Selecione o formato</label>
                        <select class = "form-control mb-3">
                            <option>Livro</option>
                            <option>Curadoria</option>
                            <option>Palestra</option>
                        </select>
                    </div>

                    <div class = "col-md-12  mb-1">
                        <label>ISBN</label>
                        <input class = "form-control mb-3" type = "text" name = "nome"/>
                    </div>

                    
                    <div class = "col-md-12  mb-1">
                        <label>Email</label>
                        <input  class = "form-control mb-3" type = "text" name = "email"/>
                        <small>Insira uma senha com pelo menos 6 caracteres OU <span class = "text-success">pelo menos 4 caracteres alternando entre números e símbolos!</span>
                        </small>
                    </div>
                    
                    <div class = "col-md-12  mb-1">
                        <label>Quantidade de páginas</label>
                        <input id = "fone" class = "form-control mb-3" type = "text" name = "telefone" placeholder="(88) 9 9999-9999"/>
                    </div>
                    
                    <div class = "col-md-12  mb-1">
                        <label>Quantidade de vídeos</label>
                        <input id = "fone" class = "form-control mb-3" type = "text" name = "telefone" placeholder="(88) 9 9999-9999"/>
                    </div>

                    <div class = "col-md-12  mb-1">
                        <label>Ano de publicação</label>
                        <input  class = "form-control mb-3" type = "password" name = "senha"/>
                    </div>

                    <div class = "col-md-12  mb-1">
                        <small class = "text-muted mb-5">
                            Ao clicar em Cadastre-se, você concorda com nossos Termos, Política de Dados e Política de Cookies. Você pode receber notificações por SMS e pode cancelar isso quando quiser.
                        </small>
                    </div>
                    
                    <button type = "submit" class = "btn btn-lg btn-block btn-primary mt-3" >Criar nova conta</button>
                </div>
            </form>
        </div>
    </div>
</section>


<script>
   $(document).ready(function () {
        $('#fone').usPhoneFormat({
            format: '(xx) xxxx-xxxx',
        });
   });

</script>


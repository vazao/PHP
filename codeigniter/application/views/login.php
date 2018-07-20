<!DOCTYPE html>
<html lang="pt-br">
    <head>
       <style>
          .formLogin {
        width: 450px;
        height: 400px;
        margin-left: -100px; /* metade da largura */
        margin-top: -100px; /* metade da altura */
        position: absolute;
        top: 40%;
        left: 35%;
    }
    </style>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<link rel="stylesheet" href="<?php echo base_url();?>bootstrap-4/css/bootstrap.min.css">
 	<link rel="stylesheet" href="<?php echo base_url();?>bootstrap-4/css/formLogin.css">
        <meta charset="utf-8">
        <title> Login </title>
    </head>
    <body>
        <div class="container formLogin">
            <div class="panel-heading">
                <h1 class="panel-title">LOGIN</h1> <br><br> 
            </div>
            <form method="post">
                <label> Usuário: </label>
                <input type="text" name="usuario" placeholder="Digite seu usuário"> <br><br>

                <label> Senha: </label>
                <input type="password" name="senha" placeholder="Digite sua senha"> <br><br>

                <input type="button" name="btnLogin" value="ENTRAR"> <br><br>
            </form>
            <footer class="panel-footer panel-primary"> Curso Web 2018 ©</footer>
        </div>
            
        
            
        <script src="<?php echo base_url();?>bootstrap-4/js/jquery-3.3.1.slim.min.js"></script>	    
        <script src="<?php echo base_url();?>bootstrap-4/js/bootstrap.min.js"></script>
    </body>
    </html>




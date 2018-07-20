<!DOCTYPE HTML>
<html lang="pt-br">
	<header>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url();?>bootstrap-3/css/bootstrap.min.css">
        <link href="bootstrap-4/css/formLogin.css" rel="stylesheet"> 
  
		<title>Cadastro de Cliente</title>
	</header>
	<body>
            <form action="<?php echo base_url().'Pessoa/salvar'?>" method='post'>
                    
                    <div class="form-group">
                        <div class="col-md-10 col-xs-12">
                           
                            
                        <label>Documento (CPF ou Passaporte):</label>
                            <input type="text" name="documento" id="documento">
                            <br/>
                            <br/>
                        <label>Nome:</label>
                            <input type="text" name="nome" id="nome">
                            <br/>
                            <br/>
			<label>Endereco:</label>
                            <input type="text" name="endereco" id="endereco">
                            <br/>
                            <br/>
			<label>Numero:</label>
                            <input type="text" name="numero" id="numero">
                            <br/>
                            <br/>
			<label>Pais:</label>
                            <input type="text" name="pais" id="pais">
                            <br/>
                            <br/>
			<label>IBGE Cidade:</label>
                            <input type="text" name="ibgecidade" id="ibgecidade">
                            <br/>
                            <br/>
			<label>UF:</label>
                            <input type="text" name="uf" id="uf">
                            <br/>
                            <br/>
			<label>Telefone:</label>
                            <input type="text" name="telefone" id="telefone">
                            <br/>
                            <br/>
			<label>E-mail:</label>
                            <input type="text" name="email" id="email">
                            <br/>
                            <br/>
			<label>Data de Nascimento:</label>
                            <input type="text" name="dataNasc" id="dataNasc">
                            <br/>
                            <br/>
                            <input type="submit" value="Enviar">
                        </div>
                    </div>

		</form>
	</body>
        <script src="<?php echo base_url();?>bootstrap-4/js/jquery-3.3.1.slim.min.js"></script>
        <script src="<?php echo base_url();?>bootstrap-4/js/bootstrap.min.js"></script>
</html>
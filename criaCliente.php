<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Cliente</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/createCliente.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Adicionar</h4><hr><br>
		   <?php if (isset($_GET['Erro!'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['Erro']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="nome">Nome</label>
		     <input type="text" 
		           class="form-control" 
		           id="nome" 
		           name="nome" 
		           value="<?php if(isset($_GET['nome']))
		                           echo($_GET['nome']); ?>" 
		           placeholder="Digite o nome do cliente">
		   </div>

		   <div class="form-group">
		     <label for="cpf">CPF</label>
		     <input type="text" 
		           class="form-control" 
		           id="cpf" 
		           name="cpf" 
		           value="<?php if(isset($_GET['cpf']))
		                           echo($_GET['cpf']); ?>"
		           placeholder="Digite o CPF do cliente">
		   </div>

		   <div class="form-group">
		     <label for="telefone">Telefone</label>
		     <input type="text" 
		           class="form-control" 
		           id="telefone" 
		           name="telefone" 
		           value="<?php if(isset($_GET['telefone']))
		                           echo($_GET['telefone']); ?>"
		           placeholder="Digite o telefone do cliente">
		   </div>

		   <div class="form-group">
		     <label for="endereco">Endereço</label>
		     <input type="text" 
		           class="form-control" 
		           id="endereco" 
		           name="endereco" 
		           value="<?php if(isset($_GET['endereco']))
		                           echo($_GET['endereco']); ?>"
		           placeholder="Digite o Endereço do cliente">
		   </div>

		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Criar</button>
		    <a href="listaCliente.php" class="link-primary"> Ver lista de clientes</a>
	    </form>
	</div>
</body>
</html>
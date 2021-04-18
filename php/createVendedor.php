<?php 

if (isset($_POST['create'])) {
	include "conexao.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$nome = validate($_POST['nome']);
	$cpf = validate($_POST['cpf']);
	$telefone = validate($_POST['telefone']);
	$endereco = validate($_POST['endereco']);

	$user_data = 'nome='.$nome. '&cpf='.$cpf. '&telefone='.$telefone. '&endereco='.$endereco;

	if (empty($nome)) {
		header("Location: ../listaVendedor.php?error=Nome é obrigatório&$user_data");
	}else if (empty($cpf)) {
		header("Location: ../listaVendedor.php?error=CPF é obrigatório&$user_data");
	}else if (empty($telefone)) {
		header("Location: ../listaVendedor.php?error=Telefone é obrigatório&$user_data");
	}else if (empty($endereco)) {
		header("Location: ../listaVendedor.php?error=Endereço é obrigatório&$user_data");
	}
	
	else {

       $sql = "INSERT INTO vendedor(nome, cpf, telefone, endereco) 
               VALUES('$nome', '$cpf', '$telefone', '$endereco')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../listaVendedor.php");
       }else {
          header("Location: ../listaVendedor.php?error&$user_data");
       }
	}

}
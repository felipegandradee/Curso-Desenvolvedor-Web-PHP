<?php

//credenciais de conexão
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "celke";

//criando conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//Verificando se deu certo a conexão
if(!$conn){
	die("Falha na conexão: " . mysqli_connect_error());

} else {
	echo "Conexão realizada com sucesso!";

}

?>
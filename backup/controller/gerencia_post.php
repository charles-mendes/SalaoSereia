<?php
//pega variaveis
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];


//manipula img
if(is_uploaded_file($_FILES['img']['tmp_name'])){
	//verifica permissão de diretorio
	$diretorio = '/SalaoSereia/img_upload/';
	$raiz_projeto = $_SERVER['DOCUMENT_ROOT'];
	echo $raiz_projeto.$diretorio;
	die();

	//verificar se pasta tem permissão para guardar img
	if(is_writable($raiz_projeto.$diretorio)){
		move_uploaded_file($temporario, $raiz_projeto.$diretorio);

		$nome_arquivo = $_FILES['img']['name'];
		echo $nome_arquivo;
		// acessar banco e passar endereco que esta a img
		$endereco_img = $raiz_projeto.$diretorio.$nome_arquivo;

	}
	
}else {
   echo "Possível ataque de envio de arquivo: ";
   echo "nome do arquivo '". $_FILES['img']['tmp_name'] . "'.";
}


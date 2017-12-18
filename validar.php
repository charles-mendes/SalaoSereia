<?php
//-----------Pegando Variaveis
$erro = array();
$nome = $_POST['nome'];
$data = $_POST['data_nascimento'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$re_email = $_POST['re_email'];
$descricao = $_POST['descricao'];

//-------------Verificando se POST esta vazio
//Varifica se POST existe ou esta vazio
if(!isset($_POST)|| empty($_POST)){
    $erro[] = 'Nada foi preenchido';
}
//------------Verifiando Nome
if(!isset($nome)||empty($nome)){
    $erro[] = ' Nome não preenchido ';
}else{
    //trim() retira espaços em branco
    //ucwords() Converte para maiúsculas o primeiro caractere de cada palavra
    //strlower() para deixar todas as letras minusculas
    //strip_tags() retira tags HTML e Php de uma string
    $nome = trim( ucwords(strtolower(strip_tags( $nome ))) );
}
//--------------Verificando Data
if(!isset($data)|| empty($data)){
    $erro[] = ' Data não preenchido';
}
if(!(strlen($data) == 10)){
        $erro[] = ' Data preenchida errada';
}else{
    $validade_data = True;
    //Quebra a data em partes para verificar validade dos dados
    //explode - ele explode a data PELOS HIFENS e cria um array com as partes
    $partes_da_data = explode('-',$data);
    
    //verifica se tem alguma letra dentro da data
    foreach ($partes_da_data as $d){
        if(!is_numeric($d)){
            $erro[] = "Data Invalida";
            $validade_data = false;
        }
    }
    if($validade_data == true){
        //Transformando data em tipo brasileiro
        $data = $partes_da_data[2].'/'.$partes_da_data[1].'/'.$partes_da_data[0];
        
        //manda para banco de dados
        
        //mandar devolta para pagina em formato americano
        $novaData = $partes_da_data[0].'-'.$partes_da_data[1].'-'.$partes_da_data[2];
    }
    
 
}


//varificando validade dos emails

//verificando se um email é igual a outro
if($email != $re_email){
    $erro[] = "os E-mails estão diferentes";
}else{
   if(filter_var($email,FILTER_VALIDATE_EMAIL)){
       var_dump($email);
       
       //adiciona no banco de dados
       echo "<br>Cadastro válido!";
   }else{
        $erro[] = "Email invalido";
   } 
}
  

if(!empty($erro)){
    session_start();
    $_SESSION["erro"] = $erro;
    $_SESSION["nome"] = $nome;
    $_SESSION["data"] = $novaData;
    $_SESSION["cpf"] = $cpf;
    $_SESSION["email"] = $email;
    $_SESSION["re_email"] = $re_email;
    $_SESSION["descricao"] = $descricao;
    
    header("Location: cadastro-pessoa.php");
}
//die();
//$_SESSION["error"] = 'Produto removido com sucesso!';
//header("Location: cadastra-produto.php"); //redirecionar usuario



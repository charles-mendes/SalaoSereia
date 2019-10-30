<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        
        <h1>Cadastro</h1>
        
        <?php
            session_start();
            if(isset($_SESSION['erro'])){
                $erro = $_SESSION['erro'];
        ?>  
        <ul>
        <?php    
            foreach($erro as $e){
        ?>
                     <li><?= $e ?></li>
        <?php
                }
            }
        ?>
        </ul>
        
        <form action="validar.php" method="POST">
            Nome Completo:
            <input type="text" name="nome" value="<?=isset($_SESSION['nome'])?$_SESSION['nome'] : '' ?>"><br><br>
            Data de nascimento:
            <input type="date" name="data_nascimento" value="<?= isset($_SESSION['data'])? $_SESSION['data']: ''?>" required><br><br>
            CPF:
            <input type="text" name="cpf" value="<?=isset($_SESSION['cpf'])? $_SESSION['cpf']: ''?>" required><br><br>
            Email:
            <input type="mail" name="email" value="<?=isset($_SESSION['email'])? $_SESSION['email']: ''?>" required><br><br>
            Confirme o Email:
            <input type="mail" name="re_email" value="<?=isset($_SESSION['re_email'])? $_SESSION['re_email']: ''?>" required><br><br>
            Descrição sobre você:
            <textarea name="descricao" required><?=isset($_SESSION['descricao'])? $_SESSION['descricao']: ''?></textarea><br><br>
            <!--
            Envie uma imagem sua:
            <input name="imagem_p" type="file" size="30"><br><br>
            -->
            <?php if(isset($_SESSION)){session_destroy();}?>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
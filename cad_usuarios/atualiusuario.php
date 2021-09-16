<?php
 
 include_once(dirname(__FILE__)."/../layout/Mysql.php");

 


$id= @$_GET['idUsuarios'];
$nome="";
$sobrenome="";
$nascimento="";
$rg="";
$cpf="";
$rua="";
$numero_da_casa="";
$bairro="";
$estado="";
$cidade="";
$cep="";
$email="";
$login="";
$senha="";
$confirme_senha="";
if(isset($_GET['idusuarios'])){
    $id=$_GET['idusuarios'];
    $sql=$pdo->prepare("SELECT*FROM usuarios WHERE id=?");
    if($sql->execute(array($id))){
        $info = $sql->fetchAll(PDO::FETCH_ASSOC);
        foreach($info as $key=> $values){
            $id=$values['id'];
            $nome=$values['nome'];
            $sobrenome=$values['sobrenome'];
            $nascimento=$values['nascimento'];
            $rg=$values['rg'];
            $cpf=$values['cpf'];
            $rua=$values['rua'];
            $numero_da_casa=$values['numero_da_casa'];
            $bairro=$values['bairro'];
            $estado=$values['estado'];
            $cidade=$values['cidade'];
            $cep=$values['cep'];
            $email=$values['email'];
            $login=$values['login'];
            $senha=$values['senha'];
            $confirme_senha=$values['confirme_senha'];
        }
 
    }
 
}
 
if (isset($_POST['atualizar'])) {
    echo "ESTE EH O ID> ".$id = $_POST['id'];
    $nome=$_POST['nome'];
    $sobrenome=$_POST['sobrenome'];
    $nascimento=$_POST['nascimento'];
    $rg=$_POST['rg'];
    $cpf=$_POST['cpf'];
    $rua=$_POST['rua'];
    $numero_da_casa=$_POST['numero_da_casa'];
    $bairro=$_POST['bairro'];
    $estado=$_POST['estado'];
    $cidade=$_POST['cidade'];
    $cep=$_POST['cep'];
    $email=$_POST['email'];
    $login=$_POST['login'];
    $senha=$_POST['senha'];
    $confirme_senha=$_POST['confirme_senha'];
 
    $sql = $pdo->prepare("UPDATE usuarios SET id=?,nome=?,sobrenome=?,nascimento=?,rg=?,cpf=?,rua=?, numero_da_casa=?,bairro=?,estado=?,cidade=?,cep=?,email=?,login=?,senha=?,confirme_senha=?, WHERE id =?");
    if ($sql->execute(array($id, $nome, $sobrenome, $nascimento, $rg, $cpf, $rua, $numero_da_casa,$bairro,$estado,$cidade,$cep,$email,$login,$senha,$confirme_senha,$id))) {
        if($sql->rowCount() > 0){
            echo 'Usuário atualizado com sucesso!!';
            header('location:listusuario.php');
        } else{
            echo 'Código não localizado<br>';
            print_r($sql->errorInfo());
        }
    } else {
 
        echo 'Dados não alterados';
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Registro </title>
</head>
 
<body>
 
    <form action="" method="post">
        <!-- <label for="nome">id:</label> -->
        <input type="hidden" name="id" id="id" value="<?php echo $id ?>" required >
</br>
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" required>
        </br>
        <label for="sobrenome">Sobrenome: </label>
        <input type="text" name="sobrenome" id=sobrenome value="<?php echo $sobrenome ?>" required>
        </br>
        <label for="nascimento">Nascimento: </label>
        <input type="text" name="nascimento" id="nascimento" value="<?php echo $nascimento ?>" required>
        </br>
        <label for="rg">RG: </label>
        <input type="text" name="rg" id="rg" value="<?php echo $rg ?>" required>
        </br>
        <label for="cpf">CPF: </label>
        <input type="text" name="cpf" id="cpf" value="<?php echo $cpf ?>" required>
        </br>
        <label for="rua">Rua: </label>
        <input type="text" name="rua" id="rua" value="<?php echo $rua ?>" required>
        </br>
        <label for="numero_da_casa">Numero da Casa: </label>
        <input type="text" name="numero_da_casa" id="numero_da_casa" value="<?php echo $numero_da_casa ?>" required>
        </br>
        <label for="email">Bairro: </label>
        <input type="text" name="bairro" id="bairro" value="<?php echo $bairro ?>" required>
        </br>
        <label for="estado">Estado: </label>
        <input type="text" name="estado" id="estado" value="<?php echo $estado ?>" required>
        </br>
        <label for="cidade">Cidade: </label>
        <input type="text" name="cidade" id="cidade" value="<?php echo $cidade ?>" required>
        </br>
        <label for="cep">CEP: </label>
        <input type="text" name="cep" id="cep" value="<?php echo $cep ?>" required>
        </br>
        <label for="email">E-mail: </label>
        <input type="text" name="email" id="email" value="<?php echo $email ?>" required>
        </br>
        <label for="login">Login: </label>
        <input type="text" name="login" id="login" value="<?php echo $login ?>" required>
        </br>
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" value="<?php echo $senha ?>" required>
        </br>
        <label for="senha">Confirme a Senha: </label>
        <input type="password" name="confirme_senha" id="confirme_senha" value="<?php echo $confirme_senha ?>" required>
        </br>
        <input type="submit" name="atualizar"  value="Atualizar">
    </form>
 
</body>
 
</html>
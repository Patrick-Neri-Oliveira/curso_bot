<?php

require_once('conn.php');

#print_r($_REQUEST);

?>

<?php 
######
#usuario tipo 1
#adm tipo 2
######

$nome_cliente = $_POST['nome'];
$senha_cliente = $_POST['senha'];
$email_cliente = $_POST['email'];

################BUSCA NO BANCO EMAILS DE CLIENTES

$busca_email = "SELECT * FROM `login` WHERE email = '$email_cliente' ";
$resultado_busca = mysqli_query($conn, $busca_email);
$total_clientes = mysqli_num_rows($resultado_busca);

echo $total_clientes;

#####verificação##########

if($total_clientes > 0){
    
    echo "<meta http-equiv='refresh' content='0;url=email_ja_cadastrado.php'>";
    

} else {

    $sql =  "INSERT INTO login (nome, senha, email, tipo, dinheiro, pix, cartao, cardeneta, prod_gas, prod_agua) VALUES ('nome_cliente','senha_cliente','email_cliente', '1', '#', '#', '#', '#', '#', '#')";
    $query = mysqli_query($conn, $sql);

    if(!$query) {

        echo "<meta http-equiv='refresh' content='0;url=erro_cadastro.php'>";

    } else {

        echo "<meta http-equiv='refresh' content='0;url=sucesso.php'>";

    }
}
<?php

require_once('conn.php');

#print_r($_REQUEST);

?>

<?php 

$nome_cliente = $_POST['nome'];
$senha_cliente = $_POST['senha'];
$email_cliente = $_POST['email'];

#BUSCA NO BANCO EMAILS DE CLIENTES

$busca_email = "SELECT * FROM login WHERE email = '$email_cliente' ";
$resultado_busca = mysqli_query($conn, $busca_email);
$total_clientes = mysqli_num_rows($resultado_busca);

echo $total_clientes;

#VERIFICAÇÃO

if($total_clientes > 0) {
    echo "<meta http-equiv='refresh' content='0;url=email_ja_cadastrado.php'>";
} else {
    echo "Criar cadastro";
}
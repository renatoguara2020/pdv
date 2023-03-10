<?php 
require_once("../../conexao.php");
@session_start();

$id_usuario = $_SESSION['id_usuario'];

$fornecedor = $_POST['fornecedor'];
$valor_compra = $_POST['valor_compra'];
$valor_compra = str_replace(',', '.', $valor_compra);
$quantidade = $_POST['quantidade'];
$id = $_POST['id-comprar'];

if($quantidade == 0){
	echo 'A quantidade precisa ser superior a 0';
	exit();
}

$total_compra = $quantidade * $valor_compra;

//ATUALIZAR ESTOQUE
$query_q = $pdo->query("SELECT * FROM produtos WHERE id = '$id'");
$res_q = $query_q->fetchAll(PDO::FETCH_ASSOC);
$estoque = $res_q[0]['estoque'];
$quantidade += $estoque;

$res = $pdo->prepare("UPDATE produtos SET estoque = :quantidade, fornecedor = :fornecedor, valor_compra = :valor_compra WHERE id = :id");
$res->bindValue(":quantidade", $quantidade);
$res->bindValue(":fornecedor", $fornecedor);
$res->bindValue(":valor_compra", $valor_compra);
$res->bindValue(":id", $id);
$res->execute();



$res = $pdo->prepare("INSERT compras SET total = :total, data = curDate(), usuario = :usuario, fornecedor = :fornecedor, pago = 'Não'");
$res->bindValue(":usuario", $id_usuario);
$res->bindValue(":fornecedor", $fornecedor);
$res->bindValue(":total", $total_compra);
$res->execute();

echo 'Salvo com Sucesso!';
?>
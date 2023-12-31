<?php

include_once("Model/db.php");

// Cadastrar Pedidos No Banco de Dados

if (isset($_POST['adicionar'])) {
  $name = $_POST['name'];
  $selectPao = $_POST['selectPao'];
  $selectCarne = $_POST['selectCarne'];
  $horns = $_POST['horns'];

  $sql = $pdo->prepare("INSERT INTO pedidos VALUES (null,?,?,?,?)");
  $sql->execute(array($name, $selectPao, $selectCarne, $horns));


  echo 'Inserido com sucesso';
}


// Deletar Pedidos Do Banco de dados

if (isset($_GET['cancelar'])) {
  $id = $_GET['cancelar'];
  $sql = $pdo->prepare('DELETE FROM pedidos WHERE id =' . $id);
  $sql->execute();
}


// Mostrar Pedidos Na View

$sql = $pdo->prepare('SELECT * FROM pedidos');
$sql->execute();
$result = $sql->fetchAll();
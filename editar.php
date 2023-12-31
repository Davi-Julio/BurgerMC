<?php

include_once("Templates/header.php");

?>
<?php

// Editar Pedidos

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Conferiri Se os IDS dos pedidos são iguais ap do DB

  $sql = $pdo->prepare("SELECT * FROM pedidos WHERE id = :id");
  $sql->bindParam(":id", $id);
  $sql->execute();
  $user = $sql->fetch(PDO::FETCH_ASSOC);

  if ($user) {
?>
<div class="container-form">

  <!--Form para editar Os Pedidos-->

  <form class="form" action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>" method="post">
    <h2>Edite Seu Pedido:</h2>
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Nome Do Cliente:</label>
      <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
      <input required name="name" type="text" value="<?php echo $user['nameCliente'] ?>" class="form-control"
        id="formGroupExampleInput" placeholder="Example input placeholder">
    </div>
    <label>Escolha o Pão:</label>
    <select required name="selectPao" id="selectPao">
      <option require disabled value="Selecione Seu Pão">Selecione Seu Pão</option>
      <option value="Italiano Branco">Italiano Branco</option>
      <option value="3 Queijos">3 Queijos</option>
      <option value="Parmesão e Orégano">Parmesão e Orégano</option>
      <option value="Integral">Integral</option>
    </select>
    <label for="">Escolha a Carne Do Seu Burger</label>
    <select required name="selectCarne" id="selectCarne">
      <option value="Maminha">Maminha</option>
      <option value="Alcatra">Alcatra</option>
      <option value="Picanha">Picanha</option>
      <option value="Veggie burger">Veggie burger</option>
    </select>
    <fieldset>
      <legend>Selecione os Opcionais:</legend>
      <div class="ckecbox">
        <div>
          <input type="checkbox" id="scales" value="Bacon" name="horns" checked />
          <label for="scales">Bacon</label>
        </div>
        <div>
          <input type="checkbox" id="horns" value="Salame" name="horns" />
          <label for="horns">Salame</label>
        </div>
        <div>
          <input type="checkbox" id="horns" value="Cebola Roxa" name="horns" />
          <label for="horns">Cebola Roxa</label>
        </div>
        <div>
          <input type="checkbox" id="horns" value="Cheddar" name="horns" />
          <label for="horns">Cheddar</label>
        </div>
        <div>
          <input type="checkbox" id="horns" value="Tomate" name="horns" />
          <label for="horns">Tomate</label>
        </div>
        <div>
          <input type="checkbox" id="horns" value="Pepino" name="horns" />
          <label for="horns">Pepino</label>
        </div>
      </div>
      <button id="btnPedido" type="submit" class="btn btn-dark">Editar</button>
</div>
</fieldset>
</form>
<!--form-->
</div>
<!--container-form-->
<?php
  } else {
    echo 'User Not Found';
  }
} else {
  echo 'User Not Select';
}

// Update Dos Pedidos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $selectPao = $_POST['selectPao'];
  $selectCarne = $_POST['selectCarne'];
  $horns = $_POST['horns'];

  $sql = $pdo->prepare("UPDATE pedidos SET nameCliente = :name, typePao = :typePao, typeCarne = :typeCarne, opcionais = :opcionais WHERE id = :id");

  // Vdalidação BindParam

  $sql->bindParam(':id', $id);
  $sql->bindParam(':name', $name);
  $sql->bindParam(':typePao', $selectPao);
  $sql->bindParam(':typeCarne', $selectCarne);
  $sql->bindParam(':opcionais', $horns);

  try {
    $sql->execute();
    echo 'Pedido editado com sucesso!';
  } catch (PDOException $e) {
    echo 'Erro ao editar o pedido';
  }
}

?>

<?php

include_once("Templates/footer.php");

?>
<?php

include_once("Templates/header.php");

?>

<h2 class="title-list-pedidos">Pedidos</h2>

<table id="table" class="table table-striped">
  <tr>
    <th>Cliente:</th>
    <th>Pão:</th>
    <th>Carne:</th>
    <th>Opcionais:</th>
    <th>Ações:</th>
  </tr>


  <?php
  foreach ($result as $pedido) {
  ?>
  <tr>
    <td><?= $pedido['nameCliente'] ?></td>
    <td><?= $pedido['typePao'] ?></td>
    <td><?= $pedido['typeCarne'] ?></td>
    <td><?= $pedido['opcionais'] ?></td>
    <td>
      <a id="cancelarPedido" href="?cancelar=<?= $pedido['id'] ?>">Cancelar Pedido</a>
      <a id="editarPedido" href="editar.php?id=<?= $pedido['id'] ?>">Editar Pedido</a>
    </td>
  </tr>
  <?php

  }
  ?>

</table>


<?php

include_once("Templates/footer.php");

?>
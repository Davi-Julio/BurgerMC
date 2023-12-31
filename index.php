<?php

include_once("Templates/header.php")

?>


<main class="main">

  <figure class="img-main">
    <img src="/Ìcons//logo.jpg" alt="">
  </figure>
  <!--img-main-->
</main>
<!--main-->

<div class="container-form">

  <form class="form" action="" method="post">
    <h2>Monte Seu Burger:</h2>
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Nome Do Cliente:</label>
      <input required name="name" type="text" class="form-control" id="formGroupExampleInput"
        placeholder="Example input placeholder">
    </div>
    <label>Escolha o Pão:</label>
    <select required name="selectPao" id="">
      <option require disabled value="Selecione Seu Pão">Selecione Seu Pão</option>
      <option value="Italiano Branco">Italiano Branco</option>
      <option value="3 Queijos">3 Queijos</option>
      <option value="Parmesão e Orégano">Parmesão e Orégano</option>
      <option value="Integral">Integral</option>
    </select>
    <label for="">Escolha a Carne Do Seu Burger:</label>
    <select required name="selectCarne" id="">
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
      <button id="btnPedido" type="submit" name="adicionar" class="btn btn-dark">Fazer Pedido</button>
    </fieldset>
  </form>
  <!--form-->
</div>
<!--container-form-->

<?php


include_once('Templates/footer.php')

?>
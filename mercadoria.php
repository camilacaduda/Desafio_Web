<?php

    if ($_POST) {
       // print_r($_POST);
        $sql="INSERT INTO mercadoria(Tipo_Mercadoria,Nome_Mercadoria,QTD_Mercadoria,Preco,Tipo_Negocio) values ('$_POST[Tipo_Mercadoria]','$_POST[Nome_Mercadoria]','$_POST[QTD_Mercadoria]','$_POST[Preco]','$_POST[Tipo_Negocio]')";
        print_r($sql);
        //die();
        $result = mysqli_query($BD,$sql);
        if (!$result) {
            die( mysqli_error($BD));
        }
        echo "<script> alert('Salvo com Sucesso!') </script>"
        header('Location: ./?page=list');
        //var_dump($result);
        //die;

    }
?>
    
    <form action="?page=mercadoria" method="post">

    <div class="form-group">
        <label for="tipo_mercadoria"> Tipo_Mercadoria</label>
        <input type="text" class="form-control"  data-validation="required" id="Tipo_Mercadoria" name="Tipo_Mercadoria" />
    </div>

    <div class="form-group">
        <label for="nome_mercadoria"> Nome_Mercadoria </label>
        <input type="text" class="form-control"  data-validation="required" id="nome_mercadoria" name="Nome_Mercadoria"/>
    </div>

    <div class="form-group">
        <label for="qtd_mercadoria">QTD_Mercadoria</label>
        <input type="int" class="form-control"  data-validation="required" id="qtd_mercadoria" name="QTD_Mercadoria">
    </div>

    <div class="form-group">
        <label for="preco">preço</label>
        <input type="text" class="form-control"  data-validation="required" id="preco" name="Preco">
    </div class="form-group">

	<div class="form-group">         
    <label for="tipo_negocio">Tipo_Negocio</label>
        
    <select name="Tipo_Negocio"  class="form-control" id="tipo_negocio" data-validation="required" >
  
   <option value=""></option>
   <option value="compra">Compra</option>
  <option value="venda">Venda</option>
  
</select> </div>

    <button class="btn btn-default"  id="btnEnviar" type="submit"> Enviar</button>

    </form>

<!-- JavaScript Validação com formulario -->

<script

  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous">
      
</script>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

<script>/*

$("#btnEnviar").on('click', function(event) {
    event.preventDefault();
    $(".form-control").css('background',"red");
    
});
*/

$.validate();

</script>













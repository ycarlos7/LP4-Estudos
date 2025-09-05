<?php
include("cabecalho.php"); 
?>

<body> 
<div class="container py-3">
<h1></h1>
<form method="post">
<div class="mb-3">
              <label for="palavra" class="form-label">Insira uma palavra para saber a quantidade de caracteres: </label>
              <input type="text" id="palavra" name="palavra" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $palavra = $_POST['palavra'];

    function LetrasMaiusculasMinusculas ($texto){
        echo "<p>Letras maiúsculas: ".strtoupper($texto)."</p>";
        echo "<p>Letras  minúsculas: ".strtolower($texto)."</p>";
    }

    LetrasMaiusculasMinusculas ($palavra);
}

include("rodape.php");
?>
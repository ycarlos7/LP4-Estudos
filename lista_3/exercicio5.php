<?php
include("cabecalho.php"); 
?>

<body> 
<div class="container py-3">
<h1></h1>
<form method="post">
<div class="mb-3">
              <label for="valor" class="form-label">Insira um número para receber a raiz quadrada dele: </label>
              <input type="number" id="valor" name="valor" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $valor = $_POST['valor'];

    function RaizQuadrada ($numero){
        echo "<p>A Raiz Quadrada é: ".sqrt($numero)."</p>";
    }

    RaizQuadrada ($valor);
}

include("rodape.php");
?>
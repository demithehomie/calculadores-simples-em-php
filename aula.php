<?php 

//Calculadora simples em PHP

$num1 = 0;
$num2 = 0;
$resultado = 0;
$calcular = 'somar';

if(isset($_GET['num1'],$_GET['num2'],$_GET['calcular'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $calcular = $_GET['calcular'];

    switch($calcular){
        case 'somar';
            $resultado = $num1 + $num2;
            break;
        case 'subtrair';
            $resultado = $num1 - $num2;
            break;    
        case 'multiplicar';
            $resultado = $num1 * $num2;
            break;
        case 'dividir';
            $resultado = $num1 / $num2;
            break;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma entre dois números</title>
</head>
<style>
    .form{
        border-radius: 30px;
        background-color: #5CAAE6;
        margin-left: 350px;
        margin-right: 350px;
        text-align: center;
        justify-content: center;
        align-items:center;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        padding: 30px;
        color: #DAF2E3;
    }

    .inputs {
        padding: 5px;
        border-radius: 5px;
    }
    .body{
        background-color: #555BF2;
    }
</style>
<body class="body">
    <div class="form">
    <h3>Entre com os números</h3>
        
    <form>
        <input type="number" id="num1" class="inputs" name="num1" required/>
<br/>
<br/>
        <input type="number" id="num1" class="inputs" name="num2" required/>
        <br/>
<br/>
<h4>Escolha a operação</h4>

    <select name="calcular">
        <option value="somar">SOMA</option>
        <option value="subtrair">SUBTRAÇÃO</option>
        <option value="multiplicar">MULTIPLICAÇÃO</option>
        <option value="dividir">DIVISÃO</option>

    </select>
            <br />
            <br />
    <input type="submit" value="CALCULAR AGORA"/>
            <br />
            <br />
    <p>O resultado é <?= $resultado ?></p>
</form>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Banco de Dados</title>
    <style>
        body{
            background-color: #000;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Bem vindo ao PHP!</h1>

    <form method="post">
        <label>Digite um valor:</label>
        <input type="number" name="valor">
        <button type="submit">Enviar</button>

    </form>

    <?php
    //Print na tela
    echo "Hello, World!";
    echo "<br>";
    //Variável
    $numero1 = 2;
    $numero2 = 7;
    $soma = $numero1 + $numero2;
    echo "A soma é: " . $soma;
    echo "<br>";
    // echo $numero1;
    echo "<br>";
if($soma >= 7){
    echo"Aluno aprovado!";
}else{
    echo "Aluno reprovado!";
}
if(isset($_POST['valor'])){
    echo"<br>";
    $valorDigitado = $_POST['valor'];
    echo "O valor digitado é: " . $valorDigitado;
}


    ?>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = str_replace(',', '.', $_POST["peso"]);
    $altura = str_replace(',', '.', $_POST["altura"]);
    $imc = $peso / ($altura * $altura);

    if ($imc < 17) {
        $situacao = "Muito abaixo do peso";
    } elseif ($imc >= 17 && $imc <= 18.49) {
        $situacao = "Abaixo do peso";
    } elseif ($imc >= 17 && $imc <= 18.49) {
        $situacao = "Peso normal";
    } elseif ($imc >= 18.5 && $imc <= 29.99) {
        $situacao = "Acima do peso";
    } elseif ($imc >= 30 && $imc <= 34.99) {
        $situacao = "Obesidade I";
    } elseif ($imc >= 35 && $imc <= 39.99) {
        $situacao = "Obesidade II (severa)";
    } elseif ( $imc >40) {
        $situacao = "Obesidade III (mórbida)";
    }

    echo "Seu IMC é " . number_format($imc, 2) . " e sua situação é: " . $situacao;
}
?>

  
</body>
</html>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>calculadora</title>
</head>
<body>
    
 <main>
   

    <?php

      $num1 = $_GET["num1"];
      $num1 = $_GET["num1"];
      $ope = $_GET["ope"];
      $resultado = 0;

      if($ope == "+"){
        $resultado = $num1 + $num2;
      }
      else if($ope == "-"){
        $resultado = $num1 - $num2;
      }
      else if($ope == "*"){
        $resultado = $num1 * $num2;
      }
      else if($ope == "/"){
        $resultado = $num1 / $num2;
      }
      else{
        echo "operador incorreto!";
      }

     ?>
 </main>

</body>
</html>
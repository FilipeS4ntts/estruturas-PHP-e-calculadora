<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Condição e Repetição</title>
</head>
<body>

    <?php

    <div></div>
      $idade = 18;
      if($idade >= 18){
        echo "é maior de idade!\n";
      }
      else if($idade >= 12){
        echo  "é adolescente!!\n";
      }
      else{
        echo "é criança!\n"
      }

      $mes = 2;
      $dias = 0;

      switch($mes){ /*similar ao if else, mas a variavel mes com um valor ja impresso exibe outra variavel com determinado val*/ 
        case 1:
            $dias = 31;
            break;
        case 2:   /*ja que mês é igual a 2 ele ira atribuir o valor 28 em $dias*/ 
            $dias = 28;
            break; /*break é necessario, ele força o código a parar por aqui e não executar o resto, funciona em c# tambem*/ 
        case 3:
            $dias = 31;
            break;
        case 4:
            $dias = 30;
            break;
        default:
        echo "Mês inválido!\n";
      }
      
      if($dias != 0){   
        echo "O mês", $mes, "tem", $dias, "dias!\n";
      }

      echo "** Estruturas de Repetição **\n";
       
      echo "WHILE \n";

      $contador = 0;
      
      do{
        echo "Contando:"
        $contador++;
 
     }while($contador < 10)
      echo "Contando :", $contador, "\n";
      
     echo "FOR \n"

     for($contador, $contador < 10, $contador++){
        echo "Contando: ", $contador, "\n";
     }

    ?>


</body>
</html>
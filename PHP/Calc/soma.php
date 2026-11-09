<?php
    // $N1A = $_POST['N1']?? 0;
    // $N2A = $_POST['N2']?? 0;
    // $soma = $N1A + $N2A;
    // $sub = $N1A - $N2A;
    // $multi = $N1A * $N2A;
    // $div = $N1A / $N2A;
    // echo "Sua soma deu: " .$soma . "<br>";
    // echo "Sua subtração deu: " .$sub. "<br>";
    // echo "Sua multiplicação deu: " .$multi. "<br>";
    // echo "Sua divisão deu: " .$div. "<br>";




// jeito do raynner
$N1A = $_POST['N1A'];
$N2A = $_POST['N2A'];
$oper = $_POST['oper'];


$resultado = 0;
echo "N1 = " . $N1A . "<br>";
echo "N2 = " . $N2A . "<br>";
echo "Oper = " . $oper;

switch ($oper){
    case 'soma':
    $resultado = $N1A + $N2A;
    break;

    case 'sub':
    $resultado = $N1A - $N2A;
    break;

    case 'mult':
    $resultado = $N1A * $N2A;
    break;

    case 'div':
        if ($N2A != 0) {
            $resultado = $N1A / $N2A;
        }
        else {
            $resultado = "Erro: divisão por zero";
        }
        break;
    
    default:
    $resultado = "operação invalida";
}




echo "<br>" . "Resultado: " . $resultado
?>
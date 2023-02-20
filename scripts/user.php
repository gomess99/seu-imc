<?php

    $a = $_POST['altura'];
    $p = $_POST['peso'];
    $imc = $p/($a*$a);

    if($imc < 18.5){
        echo "Seu IMC é de ".number_format($imc, 2)."<br>Significa que está com Baixo Peso";

    }elseif($imc > 25 && $imc < 25.1) {
        echo "Seu IMC é de ".number_format($imc, 2)."<br>Significa que está com Sobre Peso";
           

    }elseif($imc >= 18.5 && $imc < 25){
        echo "<br>Seu IMC é de ".number_format($imc, 2)."<br>Significa que está com Nomal";

    }if($imc > 25 && $imc < 30){
        echo "Seu IMC é de ".number_format($imc, 2)."<br>Significa que está com Pré-obeso";
    
        
    }elseif($imc >= 30 && $imc <= 34.9){
        echo "Seu IMC é de ".number_format($imc, 2)."<br>Significa que está com Obeso I";

    }elseif($imc > 34.9 && $imc < 40){
        echo "Seu IMC é de ".number_format($imc, 2)."<br>Significa que está com Obeso II";

    }elseif ($imc >40){
        echo "Seu IMC é de ".number_format($imc, 2)."<br>Significa que está com Obeso III";
    }
?>
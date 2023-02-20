<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/resultado.css">
    <title>Seu IMC</title>
</head>
<body name="b" onload="vuneravel()">
    <main>
        <div class="container-principal">
            <?php
            
                //$b = $_POST['b'];
                $a = $_POST['altura'];
                $p = $_POST['peso'];
                $imc = $p/($a*$a);
                

                if($imc < 18.5){
                    echo "<h1 class='titulo'>Seu Imc é de<br> ".number_format($imc, 2)." Kg/m²</h1>"."<p>Significa que está com Baixo Peso</p><p>Procure ajuda médica! Perigo eminente!</p>";
                    echo "<script>document.body.style.background = '#940a00'</script>";

                }elseif($imc > 25 && $imc < 25.1) {
                    echo "<h1 class='titulo'>Seu Imc é de<br> ".number_format($imc, 2)." Kg/m²</h1>"."<br>Significa que está com Sobre Peso<p>Faça uma consulta simples</p>";
                    echo "<script>document.body.style.background = '#c0e322'</script>";  

                }elseif($imc >= 18.5 && $imc < 25){
                    echo "<h1 class='titulo'>Seu Imc é de<br> ".number_format($imc, 2)." Kg/m²</h1>"."<br>Significa que está Nomal<p>Tudo OK!</p>";
                    echo "<script>document.body.style.background = '#8acf30'</script>";

                }if($imc > 25 && $imc < 30){
                    echo "<h1 class='titulo'>Seu Imc é de<br> ".number_format($imc, 2)." Kg/m²</h1>"."<br>Significa que está Pré-obeso<p>Faça uma consulta rápida</p>";
                    echo "<script>document.body.style.background = '#fcf805'</script>";
                    
                }elseif($imc >= 30 && $imc <= 34.9){
                    echo "<h1 class='titulo'>Seu Imc é de<br> ".number_format($imc, 2)." Kg/m²</h1>"."<br>Significa que está com Obesidade nível I<p>Atenção! Vá ao médico</p>";
                    echo "<script>document.body.style.background = '#fc9e05'</script>";

                }elseif($imc > 34.9 && $imc < 40){
                    echo "<h1 class='titulo'>Seu Imc é de<br> ".number_format($imc, 2)." Kg/m²</h1>"."<br>Significa que está com 
                    Obesidade nível II<p>Atenção Aumentada! Faça uma consulta urgente!</p>";
                    echo "<script>document.body.style.background = '#fc5c05'</script>";

                }elseif ($imc >40){
                    echo "<h1 class='titulo'>Seu Imc é de<br> ".number_format($imc, 2)." Kg/m²</h1>"."<p>Significa que está com 
                    Obesidade nível III</p><p>Procure ajuda médica! Perigo eminente!</p>";
                    echo "<script>document.body.style.background = '#940a00'</script>";
                }
            ?>
            
        </div>
    </main>
    <script src="js/main.js"></script>
</body>
</html>
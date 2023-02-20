<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Seu IMC</title>
</head>
<body>
    <main>
        
        <div class="container-principal">
            <form method="post" class="formulario" action="resultado.php">
                <h2 class="titulo">Seu Índice de Massa Corporal</h2>

                Digite sua altura
                
                <input type="number" min="0" step=".01" name="altura" placeholder="Ex. 1,70" id=""> 

                Digite sua peso

                <input type="number" min="0" step=".01" name="peso" placeholder="Ex. 70,00"  id="">

                <button type="submit">Calcular IMC</button>
            </form>
        </div>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>Formulario de Cadastro</h1>
    <form action="recupera-dados.php" method="post">
        <label for="nome">Seu Nome:</label>
        <input type="text"  name="nome" id="nome" class="form" placeholder="Digite seu Nome">
        
        <label for="email">Seu e-mail:</label>
        <input type="email"  name="email" id="email" class="form" placeholder="Digite seu e-mail">

        <label for="idade">Idade:</label>
        <input type="number" min="0"  name="idade" id="idade" class="form" placeholder="Digite sua Idade">

        <label for="hobbie">Hobbie:</label>
        <input type="text"  name="hobbie" id="hobbie" class="form" placeholder="Qual seu hobbie?">

        <button type="submit" class="btn">Enviar Cadastro</button>
    </form>


  
  </main>
</body>
</html>
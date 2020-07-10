<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amigo Secreto</title>
    <link rel="stylesheet" href="arquivos/css/style.css">
</head>
<body>
    <section class="container">
        <div class="bloco-principal">
             <h1 class="titulo">AMIGO SECRETO LOOPIS</h1>
             <form method="post" action="arquivos/config/validacadastro.php">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <button class="btnform" value="1" name="button" type="submit">CADASTRAR</button>
                <button class="btnform" value="2" name="button" type="submit">CADASTRAR E ADICIONAR OUTRO</button>
            </form>
        </div>
    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Form</title>
</head>
<body>
    <div style="text-align: center;">
        <h1>Olá, informe seus dados por gentileza</h1>
        <form action="processamento.php" method="GET">
            <input type="text" name="nome" placeholder="Nome">
            <input type="date" name="idade" placeholder="Data de Nascimento">
            <input type="email" name="email" placeholder="E-mail">
            <input type="submit" Value="Enviar">
        </form>
    </div>
</body>
</html>
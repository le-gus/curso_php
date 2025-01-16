<?php   

   $nome = $_GET['nome'];
   $idade = $_GET['idade'];
   $email = $_GET['email'];


?>

<h1>Olá <?= $nome ?>  </h1>
<p>Você nasceu em  <?= $idade ?> e seu e-mail é <?= $email ?></p>

<!doctype html>
<html>
  <head>
    <title>Minha página inicial</title>
    <link rel="stylesheet" href="personalizacao.css">
  </head>
  <body>
    <h1>Minha página inicial</h1>
    <p>Bem vindo a minha página inicial! Aqui voce encontrará informaçoes sobre mim e meus interresses.</p>
    <p>Sou uma aluna iniciante em programação e cloud computing.</p>
    <p>Gosto também de assistir filmes, jogar volei, fazer musculação e estudar.</p>
    <?php
    date_default_timezone_set('America/Sao_Paulo');
    echo date('h:i:s A');
    ?>
    <a href="#" class="button">Entre em contato</a>
  </body>
</html>

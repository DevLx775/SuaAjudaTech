<?php
  include('../metodos/seguranca.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pagina administrativa</title>
    <link rel="stylesheet" type="text/css" href="../css/paginaAdministrativa.css">
  </head>
  <body>
    <main class="conteudo-principal">
      <section class="sessao-configuracoes">
      <h1 class="titulo-sessao-configuracoes">Painel SuaAjudaTech</h1>
      <p>Olá você esta logado como <?php echo "<span style='color:green;font-size:15pt;'>",$_SESSION['user'],"</span>"?></p>
      <div class="container-buttons">
      <button><a href="">Em breve</a></button>
      <button><a href="../metodos/logout.php">Sair</a></button></div>
     </section>
    </main>
  </body>
</html>

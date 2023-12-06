<?php
    include_once("configDb.php");
    if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
        echo "<script>alert(Preencha os dados para continuar),
        window.location.href = '../index.html';</script>";
        session_destroy();
        exit;
    }
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $consulta_sql = "SELECT * FROM `usuarios` WHERE `usuario` = '$usuario' AND `senha` = '$senha';";
    $consulta_execucao = mysqli_query($conexaoDb,$consulta_sql);
    $resultado_Consulta = $consulta_execucao->fetch_assoc();
    $rowQuant = $consulta_execucao->num_rows;
    if($rowQuant !=1)
    {
        echo"<script>alert('Usuario ou Senha incorretos'),window.location.href= '../index.html';</script>";
    }
    else{
        session_start();
        $_SESSION['user'] = $resultado_Consulta['nome'];
        echo "<script>alert('Redirecionando...'),window.location.href='../paginas/paginaAdministrativa.php';</script>";
    }
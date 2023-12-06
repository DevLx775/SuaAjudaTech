<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    if(!isset($_SESSION['user']))
    {
        echo "<script>alert('Faça login para continuar'),window.location.href='../index.html';</script>";
    }
?>
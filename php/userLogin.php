<?php
    //Verifica se uma sessão já foi criada em nome de um "usuário". Caso haja uma sessão existente, o usuário será levado para a página principal.
    if(isset($_SESSION["user"])){
        header("Location: ./pages/home.php");
    }
?>
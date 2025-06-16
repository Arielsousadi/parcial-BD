<?php
    //Chama a sessão já existente
    include_once "session.php";
    //Se livra de todas as sessões existentes.
    session_unset();
    //Destruir os registros de sessões existentes atualmente.
    session_destroy();
    //Redireciona o usuário para a página de login.
    header('Location: ../index.php');
?>
<?php 

    session_start();

    
    //print_r($_SESSION);

    //remover indices do array da sessão
    //unset(<array>[<índice>]) -> remove índices de qualquer array
    //unset($_SESSION['x']); //-> caso o índice indicado não exista, não dá erro

    //destruir a variável de sessão (remover todos os índices ao mesmo tempo)
    //session_destroy() -> remove todos os índices dentro da Superglobal session
    session_destroy();
    //forçar um redirecionamento, forçando uma nova requisição http na qual as sessions não estarão mais disponíveis

    header('Location: index.php');

?>
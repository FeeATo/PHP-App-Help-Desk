<?php 

    session_start();
    //fopen(<arquivo_Abrir>, <ação>, <oQueSeráEscrito>)
    //<arquivo_Abrir> se arquivo não existir então será criado
    //<acao>: https://www.php.net/manual/en/function.fopen

    $arquivo = fopen('../../arquivos_protegidos/arquivo.txt', 'a');  
    //abre arquivo    

    foreach($_POST as $item){
        $item = str_replace('#','-', $item);
    }

    $texto = $_SESSION['id'].'#'. implode('#', $_POST) . PHP_EOL; //-> PHP_EOL cria uma nova linha
    
    //fwrite(<arquivo>)
    fwrite($arquivo, $texto);
    //escreve no arquivo

    fclose($arquivo);
    //fecha arquivo

    header('Location: abrir_chamado.php');

?>
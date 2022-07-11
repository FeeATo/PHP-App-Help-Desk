<?php 
    
    /* o include inclui o conteúdo do script em outro */
    // gera um warning quando dá erro, ou seja, continua a execução do resto do código

    /*include_once e require_once inclui somente se o script ainda não foi incluido*/ 

    //requipe("menu.php");
    /* faz a mesma coisa que o include mas gera um fatal error quando dá erro,
    ou seja, interrompe a execução do código */

    include "menu.php";
?>
conteúdo página (início)

<br>
<br>

<?php 
    include_once("menu.php");    
?>



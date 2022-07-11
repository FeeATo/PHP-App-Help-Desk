<? require_once "validador_acesso.php"; ?>

<?php 

  //chamados
  $chamados = array();

  //abre o arquivo apenas para leitura
  $arquivo = fopen('../arquivos_protegidos/arquivo.txt', 'r');

  //percorrer o arquivo enquanto houver linhas a serem recuperados
  while(!feof($arquivo)){ //feof()  testa pelo fim do arquivo (end of file)
    $registro = fgets($arquivo); //file gets -> recupera o valor da linha de onde o cursor está
    if($_SESSION['perfil_id'] == 1)
      $chamados[] = $registro;
    else{
      if($_SESSION['id'] == explode('#',$registro)[0]){
        $chamados[] = $registro;
      } else
        continue;
    }
  }

  //é importante fechar o arquivo aberto!!
  fclose($arquivo);

?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <?php require_once "home_bar.php" ?>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

              <? foreach($chamados as $chamado) { ?>  
                
                <?php                   
                  $chamado_dados = explode('#', $chamado);                  

                  
                  
                  if(count($chamado_dados) < 3){
                    continue;
                  }
                ?>
                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title">
                      <!-- tag de impressão do php -->
                      <?= $chamado_dados[1] ?>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                      <!-- tag de impressão do php -->
                      <?= $chamado_dados[2] ?>
                    </h6>
                    <p class="card-text">
                      <!-- tag de impressão do php -->
                      <?= $chamado_dados[3] ?>
                    </p>

                  </div>
                </div>            
              <? } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
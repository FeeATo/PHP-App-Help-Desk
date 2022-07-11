<?php 

    session_start(); //sessão é criada para cada navegador fazendo requisições http
    
    //variável que verifica se a autenticacao foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1=>'Administrativo', 2=>'Usuário');

    //usuários do sistema
    $usuarios_app = array(
        array('id'=>1,'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id'=>1),
        array('id'=>2,'email' => 'user@teste.com.br', 'senha' => '1234', 'perfil_id'=>1),        
        array('id'=>3,'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id'=>2),        
        array('id'=>4,'email' => 'miguel@teste.com.br', 'senha' => '1234', 'perfil_id'=>2),        
    );

    foreach($usuarios_app as $user){
        
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }

    }

    if($usuario_autenticado){
        echo 'Usuário autentipinto';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;        
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    } else{
        header('Location: index.php?login=erro');
        $_SESSION['autenticado'] = 'NAO';
    }    

?>
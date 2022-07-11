# App Help desk
Projeto de uma aplicação simples na qual é possível cadastrar chamados de solicitação de ajuda helpdesk. O sistema de login usa o *Session* para restringir o acesso às páginas apenas caso o usuário efetue o login e para restringir os privilégios do usuário de acordo com seu tipo.

Existem dois tipos de usuários, os do tipo **ADM** e os do tipo **Usuário**. Os usuários do tipo **ADM** têm acesso à todos os chamados cadastrados por usuários ou outros administradores. Os usuários do tipo **Usuário** têm acesso apenas aos seus próprios chamados.

Os usuários foram definidos por "hardcode", apenas para teste.

### Instruções
É necessário colocar as pastas *app_help_desk* e *arquivos_protegidos* no seu servidor HTTP local de preferência e acessá-los pelo endereço **localhost** e a porta definida. URL de exemplo*: "localhost:8080/app_help_desk/index.php".
<sub>*(O endereço URL varia de ambiente para ambiente)</sub>


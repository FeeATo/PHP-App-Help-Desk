# App Help desk
Projeto de uma aplicação simples na qual é possível cadastrar chamados de solicitação de ajuda helpdesk. O sistema de login usa o *Session* para restringir o acesso às páginas apenas caso o usuário efetue o login e para restringir os privilégios do usuário de acordo com seu tipo.

Existem dois tipos de usuários, os do tipo **ADM** e os do tipo **Usuário**. Os usuários do tipo **ADM** têm acesso à todos os chamados cadastrados por usuários ou outros administradores. Os usuários do tipo **Usuário** têm acesso apenas aos seus próprios chamados.

Os usuários foram definidos por "hardcode", apenas para teste.

### Instruções
É necessário colocar a pasta *app_help_desk* dentro do diretório público de seu servidor HTTP e a pasta *arquivos_protegidos* fora do diretório público do seu servidor HTTP. Separados por um nível. <br>
**Isto é:**
- *C:\\<servidor_http>\\<diretório_público>\\**app_help_desk***
- *C:\\<servidor_http>\\**arquivos_protegidos***

### Login
- Administradores: **Login**: a<span>dm</span>@teste.com.br, **Senha:**1234 | **Login**: <span>unser</spa>@teste.com.br, **1234**
- Usuário: **Login**: <span>miguel</span>@teste.com.br, **1234** | **Login**: <span>maria</span>@teste.com.br, **1234**

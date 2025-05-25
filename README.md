Sistema de Login Básico com PHP
Este projeto é um exemplo de um sistema de login simples, construído inteiramente com PHP para a lógica e a geração de HTML, e CSS para a estilização visual. Ele demonstra conceitos fundamentais como processamento de formulários, validação básica e gerenciamento de sessões.

Funcionalidades
Página de Login (login.php): Formulário para entrada de usuário e senha.
Validação de Credenciais: Verifica o usuário e senha (definidos fixamente no código PHP para demonstração).
Gerenciamento de Sessão: Utiliza sessões PHP para manter o estado de login do usuário.
Página Protegida (registrado.php): Acessível apenas para usuários autenticados.
Funcionalidade de Logout (logout.php): Encerra a sessão do usuário.
Feedback Visual: Exibe "Acesso Negado" apenas após uma tentativa de login falha.
Tecnologias Utilizadas
PHP: Linguagem de script server-side para toda a lógica de backend e a geração dinâmica do HTML.
CSS: Para estilização da interface do usuário (Style.css para o login e telaLogada.css para a área restrita).
Como Executar o Projeto

Para colocar este projeto para rodar em seu ambiente de desenvolvimento local, siga as instruções abaixo:

Pré-requisitos:

Um servidor web com suporte a PHP (como XAMPP, WAMP ou MAMP) instalado e configurado em sua máquina.
Estrutura de Pastas:

Crie uma pasta para o seu projeto dentro do diretório htdocs do seu servidor web. Por exemplo, se o nome da sua pasta for meu_login_php, o caminho completo seria algo como /opt/lampp/htdocs/meu_login_php/ no Linux.

Dentro dessa pasta, organize seus arquivos da seguinte forma:

/meu_login_php/
├── login.php           # Página principal de login
├── registrado.php      # Página acessível apenas após o login
├── logout.php          # Script para encerrar a sessão
└── css/                # Pasta para os arquivos CSS
    ├── Style.css       # Estilos para a página de login
    └── telaLogada.css  # Estilos para a página registrada
Copie os Arquivos:

Transfira seus arquivos (login.php, registrado.php, logout.php e a pasta css com seus estilos) para a pasta meu_login_php que você criou dentro de htdocs.
Inicie o Servidor Apache:

Se estiver usando XAMPP no Linux, abra seu terminal e execute:
Bash

sudo /opt/lampp/lampp start
Para outros sistemas operacionais ou servidores, inicie o Apache conforme a documentação deles.
Acesse o Projeto no Navegador:

Abra seu navegador de preferência e digite a seguinte URL:
http://localhost/meu_login_php/login.php
(Ajuste meu_login_php para o nome real da sua pasta de projeto).
Credenciais de Teste
Para testar o sistema de login, utilize as seguintes credenciais:

Usuário: admin
Senha: admin

![Image](https://github.com/user-attachments/assets/8fc68dfc-6579-49b1-9cec-51ae64fdff99)

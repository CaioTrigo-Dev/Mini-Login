# 🛡️ Sistema de Login Básico com PHP

Este projeto é um exemplo funcional de um sistema de login simples, criado com **PHP** e **CSS**, ideal para quem está aprendendo conceitos como **validação de formulários**, **sessões**, **controle de acesso** e **feedback visual**.

---

## 🔧 Funcionalidades

- 🔐 **Página de Login** (`login.php`): Formulário para entrada de usuário e senha.
- 🛑 **Validação de Credenciais**: Confere usuário e senha fixos no código (modo demonstração).
- 🔄 **Gerenciamento de Sessões**: Mantém o usuário autenticado usando sessões PHP.
- ✅ **Página Protegida** (`registrado.php`): Só acessível para usuários autenticados.
- 🚪 **Logout** (`logout.php`): Encerra a sessão do usuário.
- ⚠️ **Feedback Visual**: Mensagem de "Acesso Negado" exibida apenas após uma tentativa inválida.

---

## 🛠️ Tecnologias Utilizadas

- **PHP**: Lógica de autenticação e controle de sessão.
- **CSS**: Estilização das páginas.
  - `Style.css` – Tela de login
  - `telaLogada.css` – Tela após login

---

## 📁 Estrutura do Projeto

meu_login_php/
├── login.php # Tela de login
├── registrado.php # Página protegida
├── logout.php # Encerra a sessão
└── css/
├── Style.css # Estilo da tela de login
└── telaLogada.css # Estilo da tela após login

---

## 🚀 Como Executar Localmente

### Pré-requisitos:

- Um servidor com suporte a PHP (como **XAMPP**, **WAMP**, **MAMP**, ou **LAMP**).

### Passo a Passo:

1. **Clone ou copie o projeto** para o diretório `htdocs` do seu servidor web local:

   ```bash
   /opt/lampp/htdocs/meu_login_php/


   
🧪 Credenciais de Teste
Use os seguintes dados para acessar o sistema:

Usuário: admin

Senha: admin



📌 Observações
🔐 Este sistema foi criado apenas para fins didáticos. Não deve ser utilizado em produção sem implementações adequadas de segurança, como uso de banco de dados, hash de senha, proteção contra CSRF e SQL Injection.



📄 Licença
Este projeto está sob a licença MIT. Sinta-se livre para utilizar, modificar e distribuir!



🙋‍♂️ Autor
Desenvolvido por Caio Cesar


https://github.com/user-attachments/assets/084a8290-dda8-4236-ab0e-c4838959d9c7

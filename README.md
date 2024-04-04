# Projeto Fale Conosco

Este projeto "Fale Conosco" é uma aplicação web que facilita a interação entre usuários e equipe de suporte. Utilizando PHP com o framework Laravel no backend, incluindo APIs, e no frontend faz uso do Bootstrap, Sass e React, o projeto oferece uma plataforma para os usuários submeterem solicitações de suporte, feedback, informações e outras formas de contato.

## Funcionalidades

-   **Cadastro de Usuário:** Os usuários podem se cadastrar no sistema para poderem fazer suas solicitações de Suporte, Feedback, Solicitação de Informações ou outro tipo de contato.
-   **Solicitações de Suporte:** Os usuários podem submeter solicitações de suporte através do sistema, que são registradas no banco de dados para acompanhamento e resolução.

-   **Email de Confirmação:** Após o cadastro, um email de confirmação é enviado ao usuário para verificar sua conta.

-   **Redefinição de Senha:** Os usuários têm a opção de redefinir suas senhas. Um email de redefinição é enviado e o usuário deve verificar seu email para acessar o formulário de redefinição.

-   **Acesso a Contatos Anteriores:** Os usuários têm acesso aos contatos que já cadastraram anteriormente para referência ou acompanhamento.

## Tecnologias Utilizadas

-   **Backend:** PHP, Laravel
    <br>
    <br>
    <img src="https://www.php.net/images/logos/new-php-logo.svg" alt="PHP Logo" width="80" height="50">
    &nbsp;&nbsp;&nbsp;&nbsp;
    <img src="https://laravel.com/img/logotype.min.svg" alt="Laravel Logo" width="100">

-   **Frontend:** Bootstrap, Sass, React
    <br>
    <br>
    <img src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="Bootstrap Logo" width="70">
    &nbsp;&nbsp;&nbsp;&nbsp;
    <img src="https://sass-lang.com/assets/img/logos/logo.svg" alt="Sass Logo" width="80">
    &nbsp;&nbsp;&nbsp;&nbsp;
    <img src="https://reactjs.org/logo-og.png" alt="React Logo" width="100">

## Instruções de Instalação

1. Clone este repositório: `git clone https://github.com/seu-usuario/nome-do-repositorio.git`
2. Instale as dependências do backend: `composer install`
3. Instale as dependências do frontend: `npm install`
4. Configure o banco de dados no arquivo `.env`
5. Execute as migrações do banco de dados: `php artisan migrate`
6. Inicie o servidor: `php artisan serve`
7. Acesse o projeto em seu navegador: `http://localhost:8000`

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

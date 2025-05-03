# 🎉 Sistema de Gestão de Chamados

Este é um projeto em PHP que implementa um sistema de gestão de chamados com **Laravel Framework** e **MySql**.
O foco foi em aprender os conceitos base dessas tecnologias para aprendizado.

Documentação disponível [aqui.](https://www.notion.so/Protocolo-App-1d0709aa41a2806a97f3ed0a7359311d?pvs=4) 

## ✨ Funcionalidades

- Abertura de **chamados**, que possuem status e um protocolo identificador único;
- Consulta de chamados que foram abertos;
- Sistema de autenticação, que restringe algumas páginas;
- Dashboard com listagem de chamados;
- Edição de status do chamado;

## 💻 Tecnologias Utilizadas

- [PHP](https://www.php.net/)
- Laravel
- MySql
- Xampp

## 🧪 Como Rodar o Projeto

- Clone o repositório;
- Abra o Xampp e inicie o MySql;
- Execute os comandos na pasta do projeto:

  > "php artisan serve"

- Será gerado um link localhost, só abrir no navegador e testar;

  > "npm run dev"

## 🛠️ Melhorias Futuras

- Remoção de chamados concluídos;
- Traduzir implementação automatica do sistema de autenticação (edição do perfil);
- Atribuir níveis de acesso para usuários;
- Tornar todo o sistema acessível somente via login;
- Deploy em nuvem.

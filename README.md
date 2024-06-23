Passos para Rodar o Projeto
Configurar um Servidor Web Local:

Certifique-se de ter um servidor web como Apache ou Nginx instalado. Você pode usar o XAMPP, WAMP ou MAMP, que são pacotes que incluem Apache, MySQL e PHP.
Mover os Arquivos do Projeto:

Mover os arquivos para o diretório do servidor web:
Windows (XAMPP): C:\xampp\htdocs\PagSys
macOS (MAMP): /Applications/XAMPP/xamppfiles/htdocs/PagSys

Acesse o phpMyAdmin (ou outra interface de gerenciamento de banco de dados) para criar um banco de dados novo.
Importe os arquivos SQL encontrados no diretório "sql" para criar as tabelas necessárias. Normalmente, isso é feito acessando o phpMyAdmin, selecionando o banco de dados recém-criado, e usando a opção "Importar" para importar o arquivo SQL.
Configurar os Arquivos do Projeto:

Verifique se há um arquivo de configuração (provavelmente no diretório "config") onde você precisa definir as credenciais do banco de dados (nome do banco de dados, usuário, senha).

Configurar o banco de dados:

Abra o phpMyAdmin: http://localhost/phpmyadmin
Crie um novo banco de dados: CREATE DATABASE mydb;
Importe o arquivo SQL encontrado no diretório sql.
Configurar as credenciais do banco de dados (em config.php):
Acessar o Projeto:

Acessar o projeto no navegador:
http://localhost/PagSys

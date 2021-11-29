# Projeto-Integrador-Shinsetsu
Projeto destinado a disciplina - Projeto Integrador II da UPF
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Instalação do Node
Acesse o site o site e baixe o Node https://nodejs.org/en/download/

## Instalação do PHP
Baixe o Xampp/Wampp para o PHP ou instale diretamente do repositório do sistema operacional

- Após a instalação, verifique no terminal se o php foi instalado com sucesso com o comando 'php -v'

## Configuração do PHP
Acesse e abra o arquivo 'php.ini' (utilizando o xampp, o caminho é este C:\xampp\php)

a) Procure por "extension_dir" e descomente (retire o ";" - ponto e vírgula - no início da linha caso exista) a linha.

![Screenshot_2](https://user-images.githubusercontent.com/59673152/135761105-cc39476e-732d-4c84-9115-68f06399b92b.png)

b) Procure por "display_errors" e deixe configurado com "On"

![Screenshot_1](https://user-images.githubusercontent.com/59673152/135761072-6a461ac8-1771-42d3-a9d9-e5be7c08d79f.png)

c) Procure por "display_startup_errors" e deixe configurado como "On"

![Screenshot_3](https://user-images.githubusercontent.com/59673152/135761290-004b8413-809e-4e4a-a705-bf11d85da787.png)

d) Procure por "log_errors" e deixe configurado "On"

![Screenshot_4](https://user-images.githubusercontent.com/59673152/135761320-7644f2c6-f9df-4c23-8b30-42c01d51885c.png)

e) Procure por "error_log" e configure o caminho que deseja armazenar o arquivo de log de errors

![Screenshot_5](https://user-images.githubusercontent.com/59673152/135761345-1ec35faf-ab26-489a-a262-bfbeaa8a64f6.png)

f) Procure pelas seguintes extensões e descomente as linhas:
  - extension=curl
  - extension=intl
  - extension=mbstring
  - extension=mysqli
  - extension=openssl
  - extension=pdo_mysql
  - extension=pdo_sqlite

## Banco de Dados 
O projeto utiliza o banco Mysql, baixe o programa caso não tenha instalado na máquina. Após instalado e configurado, crie um database com o nome 'shinsetsu'. O nome para do database será configurado no arquivo .env nos próximos passos deste documento.

![Screenshot](https://github.com/daninunesdealmeida/Projeto-Integrador-Shinsetsu/blob/b5cf3b0c7fcb8415e2874870d680f92c3eb26d62/Screenshot_6.png)


## Clonando o projeto
Clone o projeto do repositório GitHub
git clone https://github.com/daninunesdealmeida/Projeto-Integrador-Shinsetsu.git


- Para resolver problemas de comandos na execução do projeto, execute este comando no terminal: 
'composer install'

## Environment 
- Execute esse comando no terminal para gerar o arquivo onde serão configurados os dados importantes da aplicação 'cp .env.example .env'

- Após esse passo do arquivo .env, vamos gerar a chave da aplicação utilzando o comando 'php artisan key:generate'

Caso ocorra algum erro

Execute o comando no terminal 'composer update' e em seguida novamente o comando 'php artisan key:generate'

- Alterne no arquivo .env as configurações do banco de dados 

![database](Screenshot_7.png)

## Migrations e Seeds
- Execute no terminal o comando 'php artisan migrate' para a criação das tabelas no comando 
- Execute no terminal o comando 'php artisan db:seed' para inserir dados das tabelas no banco

## Execução do projeto
Por fim, execute o comando 'php artisan serve' para subir o projeto local e em seguida acesse no browser a url 'http://127.0.0.1:8000'

![Screenshot_8](https://github.com/daninunesdealmeida/Projeto-Integrador-Shinsetsu/blob/b5cf3b0c7fcb8415e2874870d680f92c3eb26d62/Screenshot_8.png)

<h1>Shop Close</h1>
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="100" alt="Laravel Logo"></a></p>
<p>Um projeto desenvolvido em Laravel, Laravel Jetstream, mysql, html e css. Esse é um projeto de  E-comerce</p>

<h3>Tecnologias usadas</h3>
<li>Laravel:</li>
<li>Laravel JetStream:</li>
<li>MYSQL</li>
<li>HTML</li>
<li>CSS</li>

<h1>Como executar o projeto (localmente)</h1>

<p>Pré-requisitos</p>
<p>Composer</p>
<p>NodeJS</p>
<p>XAMP MYSQL WORKBENCH</p>
<p>Laravel Framework</p>
<p>Laravel Jetstream</p>

<h1>Instalação</h1>


1. Clone o repositório
2. Instale o Laravel na sua máquina com o seguinte comando: "composer global require laravel/installer"
3. Na pasta .env em DB_DATABASE coloque o nome do seu banco de dados que irá criar no mysql
4. Crie um Schemma no Mysql com o nome que você colocou na pasta .env e crie uma table com o seguinte comando:
CREATE TABLE `items` ( <br>
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT, <br>
  `name` varchar(255) NOT NULL, <br>
  `created_at` timestamp NULL DEFAULT NULL, <br>
  `updated_at` timestamp NULL DEFAULT NULL, <br> 
  `description` text DEFAULT NULL, <br> 
  `preco` decimal(10,2) DEFAULT NULL, <br> 
  `image` varchar(255) DEFAULT NULL, <br> 
  `nomedono` varchar(255) DEFAULT NULL, <br> 
  `marca` varchar(255) NOT NULL, <br> 
  `grande` tinyint(1) NOT NULL, <br> 
  `user_id` bigint(20) unsigned NOT NULL, <br> 
  PRIMARY KEY (`id`), <br> 
  KEY `items_user_id_foreign` (`user_id`), <br> 
  CONSTRAINT `items_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) <br> 
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;"> <br>


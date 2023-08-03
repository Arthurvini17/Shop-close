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
3. Crie um banco de dados no Mysql com o seguinte comando:
<pre><code class="language-sql" data-clipboard-text="CREATE TABLE `items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `nomedono` varchar(255) DEFAULT NULL,
  `marca` varchar(255) NOT NULL,
  `grande` tinyint(1) NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `items_user_id_foreign` (`user_id`),
  CONSTRAINT `items_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;">
</code></pre>

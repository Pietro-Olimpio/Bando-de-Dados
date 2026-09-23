<?php

$host = "192.168.10.100";
$usuario = "postgres";
$senha = "5609";
$banco = "manutencao";

$pdo = new PDO(
    "pgsql:host=$host;port=5432;dbname=$banco",
    $usuario,
    $senha
);
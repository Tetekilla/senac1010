<?php
require ("db.php");

banco("DROP TABLE IF EXISTS usuario");
echo "<p>DB: Tabela usuario apagada...</p>";

$sql = "CREAT TABLE usuario (";
$sql .= "codigo SERIAL NOT NULL, ";
$sql .= "nome VARCHAR(250),";
$sql .= "email VARCHAR(100), ";
$sql .= "senha VARCHAR(100), ";
$sql .= "PRIMARY KEY (codigo)";
$sql .= ");";
banco($sql);
echo "<p>DB:Tabela usuario criada...</p>";
?>
<?php
define('HOST', 'sql208.epizy.com');
define('USUARIO', 'epiz_28208797');
define('SENHA', 'JtAFMoGZmD8B');
define('DB', 'epiz_28208797_simplepastprojekt');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
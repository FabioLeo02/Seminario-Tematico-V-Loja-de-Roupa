<?php

$hostname = "localhost";
$bancodedados = "sistemalojaroupabd";
$usuario = "root";
$senha = "01evangelho";

$mysqli = new mysqli ($hostname,$usuario,$senha,$bancodedados);
if ($mysqli->connect_errno) 
{
    echo "Falha na conexão: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
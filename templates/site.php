<?php

header("content-type: text/html;charset=utf-8");

$con = mysqli_connect("localhost","root","", "catalogo");

if (mysqli_connect_errno()){
    echo "Erro ao conectar com a base de dados: ".mysqli_connect_error();
}

$con->query("SET NAMES utf8");



?>
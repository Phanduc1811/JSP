<?php
$host="localhost:3308";
$dbName="bookstore";
$userName="root";
$password="";
$objPDO = new PDO("mysql:host=$host; dbname=$dbName", $userName, $password);
$objPDO->query('set names utf8');
<?php
if(!isset($_SESSION))
{
session_start();
}
$connection=new PDO("mysql:host=localhost; dbname=hng_db", "root", "");
?>
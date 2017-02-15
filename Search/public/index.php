<?php
use app\Connect;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';

$con = new Connect();
$select = $con->selectAll();
$con->showAll($select);
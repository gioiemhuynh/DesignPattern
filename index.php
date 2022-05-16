<?php
require_once "vendor/autoload.php";

use Tlait\DesignPattern\DIP\Module\GetData;
use Tlait\DesignPattern\DIP\DBConnectionClass\MysqlConnection;
use Tlait\DesignPattern\DIP\DBConnectionClass\XMLConnection;

//$data = new GetData(new XMLConnection());
$data = new GetData(new MysqlConnection());
$data->getData();

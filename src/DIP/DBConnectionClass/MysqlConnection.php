<?php

namespace Tlait\DesignPattern\DIP\DBConnectionClass;

use Tlait\DesignPattern\DIP\Interface\IDBConnection;

class MysqlConnection implements IDBConnection
{

    public function connect(): string
    {
        return "Database connection by MySQL";
    }
}

<?php

namespace Tlait\DesignPattern\DIP\DBConnectionClass;

use Tlait\DesignPattern\DIP\Interface\IDBConnection;

class XMLConnection implements IDBConnection
{

    public function connect(): string
    {
        return "Database connection by XML";
    }
}

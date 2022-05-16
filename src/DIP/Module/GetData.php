<?php

namespace Tlait\DesignPattern\DIP\Module;

use Tlait\DesignPattern\DIP\Interface\IDBConnection;

class GetData
{
    protected IDBConnection $dbConnection;

    /**
     * @param IDBConnection $dbConnection
     */
    public function __construct(IDBConnection $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function getData(): void
    {
        echo $this->dbConnection->connect();
    }

}

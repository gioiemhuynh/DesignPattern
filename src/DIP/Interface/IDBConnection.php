<?php

namespace Tlait\DesignPattern\DIP\Interface;
interface IDBConnection
{
    /**
     * @return string
     */
    public function connect(): string;
}

<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 8:44 AM
 */

class DBConnection
{
    private $host="127.0.0.1";
    private $userName="root";
    private $password="1234";
    private $database="roomBookingProject";
    private $port="3306";

    private $connection;

    /**
     * DBConnction constructor.
     */
    public function __construct()
    {
        $this->connection=new mysqli($this->host,$this->userName,$this->password,$this->database,$this->port);
    }

    public function getDBConnection(){
        return $this->connection;
    }
}
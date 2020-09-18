<?php
class ConnectClass{

    var $conn;

    public function openConnect()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'pw_exemple1';
        $this -> conn = new mysqli($servername, $username, $password, $dbname);
    }

    public function getConn()
    {
        return $this -> conn;
    }
}


?>
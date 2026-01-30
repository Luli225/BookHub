<?php
class Connect{
private $user='root';
private $host='localhost';
private $pass='';
private $db='web_project';

function getConnection()
{
    $conn=new mysqli($this->host,$this->user,$this->pass,$this->db);
    if($conn->connect_error)
    {
        die('connection doent work'.$conn->connect_error);
    }
    return $conn;
}
}

?>
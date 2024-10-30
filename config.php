<?php 

class Database
{
    public $connect;

    public function __construct()
    {
        $this->connect = mysqli_connect("localhost","root","","b25kasir");
    }

    function return_db()
    {
        return $this->connect;
    }
}
?>
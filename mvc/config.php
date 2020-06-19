<?php
class connection{
    
    function connect(){
        $ser='localhost';
        $user='root';
        $pass='';
        $db='blood_bank';
        $con= new mysqli($ser,$user,$pass,$db);
        return $con;
    }
    
}


?>
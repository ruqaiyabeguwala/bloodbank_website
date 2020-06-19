<?php
include "model_android.php";
$obj= new model;

if(isset($_POST['elogin']) && isset($_POST['plogin'])){
   $e=$_POST['elogin'];
    $p=$_POST['plogin'];
    
    $obj->signin($cn,'signup',$e,$p);
}
if(isset($_POST['mail'])){
    $mail=$_POST['mail'];
$s= array('email'=>$mail);
    $obj->getId($cn,'signup',$s);
}
if(isset($_POST['b_id']))
{
    $id=$_POST['b_id'];
    $where= array('b_id'=>$id);
    $obj->getList($cn,'donation',$where);
}
if(isset($_POST['gt'])){
    $id=$_POST['b_id'];
    $where= array('b_id'=>$id);
    $obj->getList($cn,'signup',$where);
}
if(isset($_POST['hos'])){
    $obj->searchh($cn,'hospital');
}

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['bgroup']) && isset($_POST['pass'])){
    
$data=array( 'name'=>$_POST['name'],
             'email'=>$_POST['email'],
             'address'=>$_POST['address'],
             'bgroup'=>$_POST['bgroup'],
             'pass'=>$_POST['pass']
              );
    $obj->insert($cn,'signup',$data);
}

if(isset($_POST['bg']) && isset($_POST['hosp']) && isset($_POST['id'])){
    
 $d=array(
        'bgroup'=>$_POST['bg'],
        'hospital'=>$_POST['hosp'],
        'b_id'=>$_POST['id'],  
               'sold'=>'no'
               );
    
   $obj->insertdon($cn,'donation',$d,$_POST['hosp']);
 
}



?>
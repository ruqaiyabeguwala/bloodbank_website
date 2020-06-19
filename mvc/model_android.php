<?php
include "config.php";
$c= new connection;
$cn=$c->connect();
 class model{
 function signin($cn,$table,$e,$p){
        $qry="select * from $table";
         $ex=$cn->query($qry);
         $a=0;
         while($rs=$ex->fetch_object()){ 
                      if($rs->email==$e && $rs->pass==$p){
                  $a=1;
                          echo "yes"; 
                          break;
                }
             
            
         }
     if($a==0){
         echo "no";
     }
         }
     function getList($cn,$table,$where){
       $key= implode(array_keys($where));
         $value=implode(array_values($where));
        $qry="select * from $table where $key='$value' ORDER BY bd_id DESC";
       $ex=$cn->query($qry);
        
           while($rs=$ex->fetch_object()){
               
               $res[]=$rs;
           }
        
        echo json_encode($res);
        
        
    }
     function getId($cn,$table,$b){
          $key=implode(array_keys($b));
         $value=implode(array_values($b));
         $qry= "select * from $table where $key='$value'";
         $ex= $cn->query($qry);
         while($rs=$ex->fetch_object()){
             $res[]=$rs;
           
         }
          echo json_encode($res);
     }
     
     function searchh($cn,$table){
       
        $qry="select * from $table";
       $ex=$cn->query($qry);
        
           while($rs=$ex->fetch_object()){
               
               $res[]=$rs;
           }
        
        echo json_encode($res);
        
        
    }
      function insert($cn,$table,$ar){
         $key=implode(',',array_keys($ar));
          $value=implode("','",array_values($ar));
         $qry="insert into $table($key) values('$value')";
         $ex=$cn->query($qry);
          if($ex>0){
              echo "success";
          }
          else{
              echo "fail";
          }
        
     }
     
     function getHos($cn,$table){
         $qry="select * from $table";
         $ex=$cn->query($qry);
         
           while($rs=$ex->fetch_object()){
               
               $res[]=$rs;
           }
        
        echo json_encode($res);
        
         
     }
     
     function insertdon($cn,$table,$ar,$hos){
         $key=implode(',',array_keys($ar));
          $value=implode("','",array_values($ar));
         $qry="insert into $table($key) values('$value')";
         $ex=$cn->query($qry);
        if($ex>0){
            $last_id= $cn->insert_id;
            
        echo json_encode($last_id).",";
        echo json_encode($hos);
            
        }
         else{
             echo "fail";
         }
     }
         }// end of class
?>
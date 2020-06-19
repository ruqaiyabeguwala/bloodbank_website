<?php
include "config.php";
$c= new connection;
$cn=$c->connect();
 class model{
     function sign($cn,$table,$ar,$e){
         $key=implode(',',array_keys($ar));
          $value=implode("','",array_values($ar));
         $qry0= "select * from signup";
         $ex0= $cn->query($qry0);
         $b=0;
         while($rs= $ex0->fetch_object()){
             if($rs->email==$e){
                 $b=1;
                 echo "<script type='text/javascript'>alert( 'This email is already occupied..!! ')</script>";
                 break;
             }
         }
         if($b==0){
         $qry="insert into $table($key) values('$value')";
         $ex=$cn->query($qry);
         if($ex>0){
             echo "<script type='text/javascript'>alert( 'Successfully registered. Login now to get the full benefits. ')</script>";
         }
         }
     }
     
     function insert($cn,$table,$ar){
         $key=implode(',',array_keys($ar));
          $value=implode("','",array_values($ar));
         $qry="insert into $table($key) values('$value')";
         $ex=$cn->query($qry);
        
     }
     
     function insertd($cn,$table,$ar){
         $key=implode(',',array_keys($ar));
          $value=implode("','",array_values($ar));
         $qry="insert into $table($key) values('$value')";
         $ex=$cn->query($qry);
    if($ex>0){
    //   header("location:blood.php#donate");
       /*   echo '<script>
        $(function() {
            $.snackbar({content: "Your download link has been sent, thanks!", timeout: 10000});
        });
    </script>'; */
        echo "<script type='text/javascript'>if(!confirm('Donation registered successfully..!!')){
      window.location.href='blood.php#donate';
        }
        </script>"; 
    } 
         else{
              echo "<script type='text/javascript'>if(!confirm('Donation unsuccessfull. Try again!!')){
             window.location.href='blood.php#donate';
              }
              </script>"; 
         }
         
     }
     function signin($cn,$table,$e,$p){
        $qry="select * from $table";
         $ex=$cn->query($qry);
         $a=0;
         while($rs=$ex->fetch_object()){
             
            
                 if($table=="signup"){
                      if($rs->email==$e && $rs->pass==$p){
                 session_start();
                 $a=1;
                  $_SESSION['id']=$rs->b_id;
                  $_SESSION['name']=$rs->name;
                  $_SESSION['email']=$rs->email;
                  $_SESSION['bg']=$rs->bgroup;
                  $_SESSION['ad']=$rs->address;
                          echo "success";
                          
                 header('location:mvc/blood.php');
                 }
                 }
                 else if($table=="hospital"){
                      if($rs->rid==$e && $rs->pass==$p){
                 session_start();
                 $a=1;
                  $_SESSION['id']=$rs->rid;
                  $_SESSION['name']=$rs->name;
                  $_SESSION['email']=$rs->email;
                  $_SESSION['ad']=$rs->address;
                 header('location:mvc/hospital.php');
                 }
             }
            
         }
         if($a==0){
           
             echo "<script type='text/javascript'>alert(' Incorrect Password ')</script>";
        
         }
     }
    function search($cn,$table,$b,$c,$d){
        $key=implode(array_keys($b));
         $value=implode(array_values($b));
        $key1=implode(array_keys($c));
         $value1=implode(array_values($c));
          $key2=implode(array_keys($d));
         $value2=implode(array_values($d));
        $qry="select * from $table where $key='$value' AND $key1='$value1' AND $key2='$value2'";
       $ex=$cn->query($qry);
        
           while($rs=$ex->fetch_object()){
               
               $res[]=$rs;
           }
        
        return @$res;
        
        
    }
     function cdsearch($cn,$table,$table1,$a,$b,$c){
         $key0=implode(array_keys($a));
         $value0=implode(array_values($a));
         $key=implode(array_keys($b));
         $value=implode(array_values($b));
        $key1=implode(array_keys($c));
         $value1=implode(array_values($c));
       
        $qry="select * from $table d,$table1 s where $key0='$value0'  AND $key='$value' AND $key1='$value1' AND d.b_id=s.b_id ";
       $ex=$cn->query($qry);
        
           while($rs=$ex->fetch_object()){
               
               $res[]=$rs;
           }
        
        return @$res;
        
        
    }
      function searchh($cn,$table){
       
        $qry="select * from $table";
       $ex=$cn->query($qry);
        
           while($rs=$ex->fetch_object()){
               
               $res[]=$rs;
           }
        
        return @$res;
        
        
    }
    
     function search1($cn,$table,$b){
        $key=implode(array_keys($b));
         $value=implode(array_values($b));
       
        
        $qry="select * from $table where $key='$value'";
       $ex=$cn->query($qry);
        
           while($rs=$ex->fetch_object()){
               
              if(!empty($rs)){
                  $true=1;
              }
               else{
                   $true=0;
               }
           }
        return $true;
        
        
    }
     function bank($cn,$from,$where,$c){
         $key=implode(',',array_keys($where));
       $value=implode("','",array_values($where));
           $key3=implode(',',array_keys($c));
          $value3=implode("','",array_values($c));
        $qry="update $from set $key3='$value3'  where $key='$value'";

      $ex=$cn->query($qry);
       if($ex){
         echo "<script type='text/javascript'>if(!alert('Confirmed successfully..!!'))
         {window.location.href='hospital.php#search';
         }
         </script>"; 
         //header("location:hospital.php#search");

          
         
       }
   
         
     }
   function blood_bank($cn,$from,$to,$where,$c){
       $key=implode(',',array_keys($where));
       $value=implode("','",array_values($where));
       $qry1="select * from $from where $key='$value'";
       $ex1=$cn->query($qry1);
       $a=0;
       $bh="";
       $b=0;
      while($rs=$ex1->fetch_object()){
          $a=$rs->bamount;
          $bh=$rs->hospital;
          $b=$rs->bgroup;
          $ar=array(
                    'bgroup'=>$rs->bgroup,
                   'amount'=>$rs->bamount,
                    'hospital'=>$rs->hospital,
                    'date'=>date("Y-m-d h:i:sa"),
                    'bd_id'=>$rs->bd_id,
              'b_id'=>$rs->b_id
                   );
      }
      // function insert($cn,$to,$ar);
       $key1=implode(',',array_keys($ar));
          $value1=implode("','",array_values($ar));
       
         $qry2="insert into $to($key1) values('$value1')";
         $ex2=$cn->query($qry2);
        $key3=implode(',',array_keys($c));
          $value3=implode("','",array_values($c));
        $qry="update $from set $key3='$value3'  where $key='$value'";

      $ex=$cn->query($qry);
       if($ex){
         echo "<script type='text/javascript'>if(!alert('Retrieval registered successfully..!!')){
          window.location.href='blood.php#search'; 
         }
         </script>"; 
      
       }
       else{
         echo "<script type='text/javascript'>if(!alert('Retrieval unsuccessfull. Try again!!')){
          window.location.href='blood.php#search'; 
         }
         </script>"; 
      
       }
   
     
   }
  function update($cn,$table,$data,$where){
    
      $k=array_keys($data);
    $v=array_values($data);
    //update table_name set key=value, key=value where key=value
      
     $up="update $table set";
     $size=count($data);

     $i=0;
     foreach($data as $d)
     {
           if($size==$i+1)
           {
               $up .=" ".$k[$i]."='".$v[$i]."'";
               $i++;

           }
           else
           {
               $up .=" ".$k[$i]."='".$v[$i]."',";
               $i++;
           }

     }
      
     $up .=" where 1=1 "; 
     $wk=array_keys($where);
     $wv=array_values($where);
      
     $j=0;

     foreach ($where as $w) {
       
       $up .=" && ".$wk[$j]."='".$wv[$j]."'";
       $j++;
     }
   $ex=$cn->query($up);
       $key2=implode(array_keys($where));
          $value2=implode(array_values($where));
       

      $qry1="select * from $table where $key2='$value2'";
         @$ex1=$cn->query($qry1);
         $a=0;
         while(@$rs=$ex1->fetch_object()){
             
        
unset($_SESSION['bg']);//remove $_SESSION['name']
session_regenerate_id();
                 $a=1;
                  $_SESSION['id']=$rs->b_id;
                  $_SESSION['name']=$rs->name;
                  $_SESSION['email']=$rs->email;
                  $_SESSION['bg']=$rs->bgroup;
                  $_SESSION['ad']=$rs->address;
               //  header('location:mvc/blood.php');
             }
     
      if($ex>0)
      {   echo "<script type='text/javascript'>if(!alert('Updated Successfully')){
      window.location.href='blood.php#update';
      }
      </script>";
      }
  } 
     
 }


?>
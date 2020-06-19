<?php
include "model.php";
$obj= new model;

/*$ar=array('name'=>$_SESSION['name']);
    $b=array('confirm'=>'no');
  $donate=$obj->search($cn,'donation',$ar,$b);
*/
$name= $obj->searchh($cn,'hospital');
if(isset($_POST['sub'])){
    $z=$_POST['n1']." ";
    $e= $_POST['e'];
    $data=array('name'=>$z.$_POST['n2'],
                'email'=>$_POST['e'],
                'bgroup'=>$_POST['b'],
                'address'=>$_POST['ad'],
                'pass'=>$_POST['p1']
               
               );
    $obj->sign($cn,'signup',$data,$e);
}
if(isset($_POST['elogin']) && isset($_POST['plogin'])){
   $e=$_POST['elogin'];
    $p=$_POST['plogin'];
    
    $obj->signin($cn,'signup',$e,$p);
}
if(isset($_POST['subh'])){
    $random=time().rand(10*45, 100*98);
     $e= $_POST['e'];
    $data=array('rid'=> $random,
                'name'=>$_POST['n1'],
                'email'=>$_POST['e'],
                
                'address'=>$_POST['ad'],
                'pass'=>$_POST['p1']
               
               );
    $obj->sign($cn,'hospital',$data,$e);
}
if(isset($_POST['sub1h'])){
   $e=$_POST['e1'];
    $p=$_POST['p2'];
    
    $obj->signin($cn,'hospital',$e,$p);
}
if(isset($_POST['sub2'])){
    
    $d=array(
        'bgroup'=>$_POST['bg'],
                'hospital'=>$_POST['hos'],
        
        'b_id'=>$_POST['id'],
             'sold'=>'no'   
               
               );
    $s=array('b_id'=>$_POST['id']);
   $obj->insertd($cn,'donation',$d);
 
}

if(isset($_POST['sub3'])){
    
    $blood=$_POST['bl'];
  $ar=array('bgroup'=>$blood);
    $b=array('sold'=>'no');
   $c=array('confirm'=>'yes');
    $n=$obj->search($cn,'donation',$ar,$b,$c);
     
}
if(isset($_POST['cdsub'])){
    
    $blood=$_POST['id'];
    $ar1=array('bd_id'=>$blood);
  $ar=array('hospital'=>$_POST['name']);
    $b=array('confirm'=>'no');
  //  $c=array('sold'=>'yes');
    $n=$obj->cdsearch($cn,'donation','signup',$ar,$ar1,$b);
     
}
if(isset($_POST['crsub'])){
    
    $blood=$_POST['id'];
    $ar1=array('id'=>$blood);
  $ar=array('hospital'=>$_POST['name']);
    $b=array('confirm'=>'no');
  //  $c=array('sold'=>'yes');
    $r=$obj->cdsearch($cn,'bank','signup',$ar,$ar1,$b);
     
}
if(isset($_POST['cddsub'])){
    
   
    $ar1=array('1'=>'1');
  $ar=array('hospital'=>$_POST['name']);
    $b=array('confirm'=>'no');
  $c=array('sold'=>'yes');
    $donation=$obj->cdsearch($cn,'donation','signup',$ar,$ar1,$b,$c);
     
}



 if(isset($_GET['delid'])){
    
    $del=$_GET['delid'];
    $where=array('bd_id'=>$del);
  /* $wher=array('bgroup'=>$n->bgroup,
               'amount'=>$n->bamount,
               'hospital'=>$n->hospital,
               'date'=>date()
              );
  $obj->insert($cn,'bank',$wher);*/
     $c=array('sold'=>'yes');
    $obj->blood_bank($cn,'donation','bank',$where,$c);
}
if(isset($_GET['upid'])){
    $up=$_GET['upid'];
     $where=array('bd_id'=>$up);
 
     $c=array('confirm'=>'yes');
    $obj->bank($cn,'donation',$where,$c);
}

if(isset($_GET['rtid'])){
    $up=$_GET['rtid'];
     $where=array('id'=>$up);
 
     $c=array('confirm'=>'yes');
    $obj->bank($cn,'bank',$where,$c);
}
if(isset($_GET['gen'])){
    $ar= array('b_id'=>$_SESSION['id']);
    $true=$obj->search1($cn,'donation',$ar);
   // header("location:cer.php");
    
}
if(isset($_POST['update'])){
 $editid=$_POST['id'];
$where= array('b_id'=>$editid);
    $b=array('name'=>$_POST['nm'],
             'email'=>$_POST['e'],
            'bgroup'=>$_POST['b'],
            'address'=>$_POST['ad']
            
            );
    
    $obj->update($cn,'signup',$b,$where);
    
}
?>
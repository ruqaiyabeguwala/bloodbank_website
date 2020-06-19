<?php include "control.php";
session_start();
if(!isset($_SESSION['ad'])){
    header('location:../signup.php');
    echo "Login First";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
      <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome.css">

<style>
    
    #cer{
    background: url('../images/ab.jpg')no-repeat;
    background-size: cover;
    min-height: 500px;
    margin: 0px;
    padding: 0px;
        font-size: 18px;    
}
    h1{
        margin-top: 50px;
        text-align: center;
    }
    </style>


</head>
<body>
    <div class="container-fluid" id="cer">
       
       
        <h1><b><i>CERTIFICATE OF APPRECIATION</i></b></h1> 
       
        <div class="col-sm-8">
          <center style="margin-top:40px">This certificate is awarded to <br></center>
        <center style="text-decoration:underline;margin-top:10px"><?php echo $_SESSION['name'];  ?> <br></center>
          
        <center style="margin-top:10px">for his/her contribution in making  <br></center>
        <center style="margin-top:10px">Ruqaiya's Blood donation Camp <br></center>
        <center style="margin-top:10px">"A Big Success"</center>
        <div class="col-sm-6">
        <p style="margin-left:100px;font-size:10px;margin-top:60px"><img src="../images/sign.jpg" alt="" width="100px" height="60px">   <br>
        David Peterson <br>
            Chief Executive </p>
            </div>
            <div class="col-sm-6">
                 <p style="margin-left:100px;font-size:10px;margin-top:60px"><img src="../images/Signature_of_Robert_Mugabe_clear.svg" alt="" width="100px" height="60px">   <br>
        Robert Mugabe<br>
            Director Abc hospital </p>
            </div>
        </div>
        <div class="col-sm-4">
            <img src="../images/Donate-Drop.jpg" alt="" width="300px" height="300px">
            
        </div>
       
    </div>
    <a class=" btn btn-default" href="blood.php" >Back</a>
    <center>
     <button class="btn" onclick="window.print()">Print</button>
    </center>
</body>
</html>
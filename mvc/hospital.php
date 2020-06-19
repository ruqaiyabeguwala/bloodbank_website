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
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>document</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/bvalidator.css">
   
    <!-- Custom CSS -->
    <link href="../css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome.css">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<style type="text/css">
    /* Style the tab */

    </style>
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
   <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Blood Camp</a>
            </div>

            
           <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                   
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="hospital.php#donate">Add Blood </a>
                    </li>
                    <li>
                        <a class="page-scroll" href="hospital.php#search">Confirm Donation</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="hospital.php#per">Confirm Retrieval</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="hospital.php#update">Update your profile</a>
                    </li>
                       
                    <li>
                        <a class="page-scroll " href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
         
        </div>
      
    </nav>
    
 
    

    <!-- Intro Section -->
    <section id="intro2" class="intro-section" >
        <div class="container">
            <div class="row">
               <h1><?php echo "Welcome ".$_SESSION['name'];  ?></h1>
                <div class="col-lg-12">
                   
                   <br> <?php echo "Full Name: ".$_SESSION['name']; ?> <br>
                    <?php echo "Email: ".$_SESSION['email']; ?> <br>
                    <?php echo "Address: ".$_SESSION['ad']; ?>  <br>
              
                </div>
                <br><br>
                 <center><a class="btn btn-success btn-lg page-scroll" href="#search" style="margin-top:20px">Get blood now!</a></center>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="donate" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Register Donation Manually</h2><br><br>
                    <form action="" method="post" class="form-inline" id="form1">
                       <tr>
                            <td>Your Donate Id:</td>
                            <td><input type="text" value="<?php echo $_SESSION['id'];?>"  name="id" class="form-control" readonly>
                            
                            </td>
                        </tr> 
                        <br>
                        <tr>
                           
                        </tr> 
                        <br>
                        
                        
                       
                        <tr>
                            <td>Select your hospital preference</td>
                            <td>
                                <select name="hos" class="form-control" data-bvalidator="required">
                  <option value="">Select</option>
                  <?php    
                            if(@$name){
                                foreach(@$name as $s){
                                    ?>
                                     <option value="<?php echo $s->name  ?>"><?php echo $s->name  ?></option>
                               <?php }
                                
                            }        
                                    ?>
                 
                 
                  
               </select>   
                            </td>
                            <br>
                        </tr> 
                        <input class="btn btn-success" name="sub2" type="submit" value="Book now!" >
                             
                   
                
                   </form>
                  
                
                </div>
            </div>
        </div>
    </section>


   
   
    <!-- Services Section -->
    <section id="search" class="services-section">
        <div class="container">
            <div class="row">
                <h2>Confirm Donation</h2>
                 
                
                <div class="col-sm-10" >
                  
                    <form action="" method="post" id="form1" class="form-inline">
                        
                           <input type="text" name="id" class="form-control" placeholder="Search by Id">
                             <input type="text" name="name"
                             value="<?php echo $_SESSION['name'];  ?>" class="form-control" style="display:none;">
                           <button class="btn btn-info" type="submit" name="cdsub"><i class="fa fa-search" aria-hidden="true"> Search</i></button> 
                        
                        <br>
                        <br>
                        
                        
                    </form>
                    <table>
	
                    <?php
                 if(isset($_POST['cdsub'])){
            //  header("location:blood.php#search");
                    if(empty(@$n)){
                    echo "No record found";
                    }
                    else{
                        ?>
                        <tr>
		<th>Id </th>
		<th>Name</th>
         <th>Blood group </th>
         <th>User Id</th>
		<th>Action </th>
	</tr>  
                       <?php
                        foreach(@$n as $s){
                             ?>
                 <tr>
		              <td><?php echo $s->bd_id." "; ?></td>
                    <td><?php echo $s->name." "; ?></td>
                     <td><?php echo $s->bgroup; ?></td>
		             <td><?php echo $s->b_id; ?></td>  
                     <td><a href="hospital.php?upid=<?php echo $s->bd_id ; ?>">Confirm</a></td>
	</tr>

   <?php    
                            
                        }
                    }
                 }
                        else if(isset($_POST['cddsearch'])){
                           if(empty(@$donation)){
                    echo "No record found";
                    }
                    else{
                        ?>
                        <tr>
		<th>Id </th>
		<th>Name</th>
         <th>Blood group </th>
		<th>Action </th>
	</tr>  
                       <?php
                        foreach($donation as $s){
                             ?>
                 <tr>
		              <td><?php echo $s->bd_id." "; ?></td>
                    <td><?php echo $s->name." "; ?></td>
                     <td><?php echo $s->bgroup; ?></td>
		               
                     <td><a href="hospital.php?delid=<?php echo $s->bd_id ; ?>">Confirm Donation</a></td>
	</tr>
  
                      <?php  }
                        }
                        }
                    ?>
                    </table>
               <?php  
                   if(isset($_GET['msg'])) 
                   {
                       echo "<script type='text/javascript'>alert(' Incorrect Password ')</script>";
                   }
                  
                    
                    ?>
                </div>
               <div class="col-sm-2">
                   <form action="" method="post">
                   <input type="text" name="name" value="<?php echo $_SESSION['name']; ?>" style="display:none;">
                    <input type="submit" name="cddsub" class="btn btn-success" value="Show All">
                    </form>
                </div>
            </div>
        </div>
    </section> 

    <!-- Contact Section -->
    <section id="per" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Copnfirm Retrieval</h2>
                      <div class="col-sm-10" >
                  
                    <form action="" method="post" id="form1" class="form-inline">
                        
                           <input type="text" name="id" class="form-control" placeholder="Search by Id">
                             <input type="text" name="name"
                             value="<?php echo $_SESSION['name'];  ?>" class="form-control" style="display:none;">
                           <button class="btn btn-info" type="submit" name="crsub"><i class="fa fa-search" aria-hidden="true"> Search</i></button> 
                        
                        <br>
                        <br>
                        
                        
                    </form>
                    <table>
	
                    <?php
                 if(isset($_POST['crsub'])){
            //  header("location:blood.php#search");
                    if(empty(@$r)){
                    echo "No record found";
                    }
                    else{
                        ?>
                        <tr>
		<th>Id </th>
		<th>Name</th>
         <th>Blood group </th>
         <th>User Id</th>
		<th>Action </th>
	</tr>  
                       <?php
                        foreach(@$r as $s){
                             ?>
                 <tr>
		              <td><?php echo $s->id." "; ?></td>
                    <td><?php echo $s->name." "; ?></td>
                     <td><?php echo $s->bgroup; ?></td>
		             <td><?php echo $s->b_id; ?></td>  
                     <td><a href="hospital.php?rtid=<?php echo $s->id ; ?>">Confirm</a></td>
	</tr>

   <?php    
                            
                        }
                    }
                 }
                        else if(isset($_POST['cddsearch'])){
                           if(empty(@$donation)){
                    echo "No record found";
                    }
                    else{
                        ?>
                        <tr>
		<th>Id </th>
		<th>Name</th>
         <th>Blood group </th>
		<th>Action </th>
	</tr>  
                       <?php
                        foreach($donation as $s){
                             ?>
                 <tr>
		              <td><?php echo $s->bd_id." "; ?></td>
                    <td><?php echo $s->name." "; ?></td>
                     <td><?php echo $s->bgroup; ?></td>
		               
                     <td><a href="hospital.php?delid=<?php echo $s->bd_id ; ?>">Confirm Donation</a></td>
	</tr>
  
                      <?php  }
                        }
                        }
                    ?>
                    </table>
               <?php  
                   if(isset($_GET['msg'])) 
                   {
                       echo "<script type='text/javascript'>alert(' Incorrect Password ')</script>";
                   }
                  
                    
                    ?>
                </div>
               <div class="col-sm-2">
                   <form action="" method="post">
                   <input type="text" name="name" value="<?php echo $_SESSION['name']; ?>" style="display:none;">
                    <input type="submit" name="cddsub" class="btn btn-success" value="Show All">
                    </form>
                </div>
           
                </div>
                
               
            </div>
        </div>
    </section>

    <section id="update" class="services-section" style="text-align:left;">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-sm-offset-1 ">
                    <h1 style="margin:50px;">update profile Section</h1>
                 
                         <form action="" method="post" id="form1">
                            <div class="form-group">
                                <label for="">ID</label>
                                <input type="text" value="<?php echo $_SESSION['id']  ?>" class="form-control" readonly name="id">
                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" value="<?php echo $_SESSION['name']  ?>" class="form-control" name="nm">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" value="<?php echo  $_SESSION['email']  ?>" class="form-control" name="e" data-bvalidator="email,required">
                            </div>
                            <div class="form-group">
                                <label for="">Blood Group</label>
                                 <select name="b" class="form-control" data-bvalidator="required">
                  <option value="<?php echo $_SESSION['bg'] ?>"><?php echo $_SESSION['bg'] ?></option>
                  <option value="A+">A+</option>
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
                  <option value="AB-">AB-</option>
               </select>
                            </div>
                             <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" value="<?php echo  $_SESSION['ad']  ?>" class="form-control" name="ad" data-bvalidator="alpha,required">
                            </div>
                             
                             <div class="form-group">
                               
                                 <input type="submit"  name="update" value="Update" class="btn btn-success">
                            </div>
                         </form> 
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-1.11.0.min.js"></script>
    <script src="../js/jquery.bvalidator.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/scrolling-nav.js"></script>
   
<script type="text/javascript"> 
    $(document).ready(function () {
        $('#form1').bValidator();
    });
</script> 

   
</body>

</html>

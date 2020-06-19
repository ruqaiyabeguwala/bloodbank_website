
<?php include "mvc/control.php";  ?>

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
    <link href="css/bootstrap.min.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
   <link rel="stylesheet" href="css/bvalidator.css">
   <link rel="stylesheet" href="Dynamic-Circular-Progress-Bar-with-jQuery-CSS3/jQuery-plugin-progressbar.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
   <link rel="stylesheet" href="css/font-awesome.css">
   
   <style type="text/css">
    
    .c {
    position: relative;
    
}

.image {
  opacity: 1;
  display: block;
 
 
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 25%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.c:hover .image {
  opacity: 0.3;
}

.c:hover .middle {
  opacity: 1;
}

.text {

  
  font-size: 16px;
  
}
       .text a{
           background: grey;
           text-decoration: none;
           color: white;
           padding: 6px;
       }
    
       #bk:hover{
           color: black;
       }
    div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
    
    .tabcontent {
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s; /* Fading effect takes 1 second */
}

@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}
    
    </style>
  
</head>



<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="images/logo4.png"     alt="" class="img img-circle" width="60px" height="50px" style="margin-top:0px">
                </a>
            </div>

           
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#achieve">Achievements</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#list">Hospials</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li class="nav navbar-right">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Connect with us<i class="fa fa-heart"></i> 
                            <span class="caret"></span></a>
                     <ul class="dropdown-menu" style="background:black;color:white;">
                           <li>
                        <a href="" data-toggle="modal" data-target="#myModal1" style="color:grey" id="bk">Login</a>
                        </li>
                        <li >
                        <a href="" data-toggle="modal" data-target="#myModal2" style="color:grey" id="bk">Signup</a>
                        
                    </li>
                       </ul>
                       
                        
                        
                        <li class="nav navbar-right">
                        <a data-target="#myModal3"
                           data-toggle="modal" href="">Hospital Connect<i class="fa fa-heart"></i> 
                            </a>
                    
                    </li>
                        
            
                    
                </ul>
            </div>
            
        </div>    
        
    </nav>
 
   <!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background:grey;color:white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" >Login Now...!!</h4>
      </div>
      <div class="modal-body" style="height:200px">
      
       <div class="col-sm-12" id="signup">
       <form action="" method="post" class="form-inline" id="form1">
           <div class="form-group" >
           <label for="">Email</label>
           <input type="email" name="elogin"  data-bvalidator="email,required"  class="form-control">
           </div>
           <br>
            <div class="form-group" style="margin-top:20px">
           <label for="">Password</label>
           <input type="password" name="plogin" class="form-control" data-bvalidator="required" >
           </div>
           <br>
           <button class="btn btn-info" name="sub1" type="submit" style="margin-top:20px">Sign In</button>
           <br>
          
       </form>
   </div>
      
      </div>
      <div class="modal-footer" style="background:grey;color:white">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
   
   
     <!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog" style="min-height:1000px">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background:grey;color:white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" >SignUp Now...!!</h4>
      </div>
      <div class="modal-body" style="height:500px">
      
       <form action="" role="form" method="post" id="form1">
        <tr>
            <td>First Name</td>
            <td><input type="text" name="n1" class="form-control" data-bvalidator="alpha,required,minlength[3]" required></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="n2" class="form-control"
            data-bvalidator="alpha,required,minlength[3]" required
            ></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="e" class="form-control" data-bvalidator="email,required" ></td>
            
        </tr>
        <tr>
            <td>Blood group</td>
            <td>
                <select name="b" class="form-control" data-bvalidator="required">
                  <option value="">Select</option>
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
                
            </td>
        </tr>
        <tr>
            <td>Address</td>
            <td><textarea name="ad" id="" cols="5" rows="2" class="form-control" data-bvalidator="alpha,required" required></textarea></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="p1" class="form-control" data-bvalidator="minlength[6],required" required></td>
        </tr>
        <tr>
            <br>
            <td><input type="submit" value="Sign Up" name="sub" class=" btn btn-info btn-sm"></td>
            
        </tr>
    </form>
    
      
      </div>
      
    </div>

  </div>
</div>
   
   
          <!-- Modal -->
<div id="myModal3" class="modal fade" role="dialog" style="min-height:1000px">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background:grey;color:white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" >Hospital Connect...!!</h4>
      </div>
      <div class="modal-body" style="height:500px">
      
      <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Login</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">SignUp</button>
  
</div>

<div id="London" class="tabcontent">
  <h3>Login</h3>
 
  <form action="" method="post" class="form-inline" id="form1">
           <div class="form-group" >
           <label for="">Ref-ID</label>
           <input type="text" name="e1"  data-bvalidator="number,required"  class="form-control">
           </div>
           <br>
            <div class="form-group" style="margin-top:20px">
           <label for="">Password</label>
           <input type="password" name="p2" class="form-control" data-bvalidator="required" >
           </div>
           <br>
           <button class="btn btn-info" name="sub1h" type="submit" style="margin-top:20px">Sign In</button>
           <br>
          
       </form>
 
 
</div>

<div id="Paris" class="tabcontent">
  <h3>SignUp</h3>
 <form action="" role="form" method="post" id="form1">
        <tr>
            <td>Hospital Name</td>
            <td><input type="text" name="n1" class="form-control" data-bvalidator="alpha,required,minlength[3]" required></td>
        </tr>
       
        <tr>
            <td>Email</td>
            <td><input type="email" name="e" class="form-control" data-bvalidator="email,required" ></td>
            
        </tr>
        <tr>
          
        <tr>
            <td>Address</td>
            <td><textarea name="ad" id="" cols="5" rows="2" class="form-control" data-bvalidator="alpha,required" required></textarea></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="p1" class="form-control" data-bvalidator="minlength[6],required" required></td>
        </tr>
        <tr>
            <br>
            <td><input type="submit" value="Sign Up" name="subh" class=" btn btn-info btn-sm"></td>
            
        </tr>
    </form>
    
</div>

      </div>
      
    </div>

  </div>
</div>
   
    <!-- Intro Section -->
    <section id="intro1" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1> Reaching out of blood..??</h1><br>
                      <h3> Get your required blood from our donors connected with hundreds of hospitals..</h3><br> 
                    
                    <a class="btn btn-default btn-lg page-scroll" style="margin-top:100px;" href="#about" >Explore more..!!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                
                <h2 ><b>About</b></h2><br>
                    <div class="col-sm-8">
                        The purpose of Blood bank system is to develop a blood management information system to assist in the management of blood donor records and ease/or control the distribution of blood in various parts of the country basing on the hospital demands. 

Without quick and timely access to donor records, creating market strategies for blood donation, lobbying and sensitization of blood donors becomes very difficult. The blood management information system offers functionality to quick access to donor records collected from various parts of the country.
It enables monitoring of the results and performance of the blood donation activity such that relevant and measurable objectives of the organization can be checked. 



                    </div>
                    <div class="col-sm-4">
                        <center>  <img src="images/images(34).jpg" alt="" width="300px" height="300px"></center>
                    </div>
                </div>
            
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
           
              
                    <h2><b>Services</b></h2><br>
                
          
            <div class="row">
               <div class="c col-sm-4">
  <img src="images/blood-donation-medical-background-vector-illustration-eps-71333326.jpg" alt="Avatar" class="image img-circle" width="50%" height="150px"  >
  <div class="middle">
      <div class="text"><a href="mvc/blood.php#donate">Donate Blood</a></div>
  </div>
</div>
                 <div class="c col-sm-4">
                    <img src="images/Heartinhands-638x425.jpg" class="img-circle image" width="50%" height="150px"  alt="">
                     <div class="middle">
      <div class="text"><a href="mvc/blood.php#search">Search for Blood</a></div>
  </div>
                </div>
                 <div class="c col-sm-4">
                   <img src="images/World_Blood_Donor_Day_2013.jpg" class="img-circle " width="50%" height="150px"  alt="">
                   <div class="middle">
      <div class="text"><a href="mvc/blood.php#per">Get permanent Card</a></div>
  </div>
                </div>
                
            </div>
            <br>
            <div class="row">
                <div class="c col-sm-4 col-sm-offset-2">
                    <img src="images/blood-donors-united-editedne-new.jpg" class="img-circle image" width="50%" height="150px"  alt="">
                        <div class="middle">
                         <div class="text"><a href="signup.php">Already connected? </a></div>
                    </div>

                </div>
                 <div class="c col-sm-4 ">
                    <img src="images/blood-donation-word-collage-27312134.jpg" class="img-circle image" width="50%" height="150px"  alt="">
                    <div class="middle">
      <div class="text"><a href="mvc/blood.php">More Info</a></div>
  </div>
                </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    
    <section id="achieve" class="achieve-section">
        <div class="container">
            <div class="row">
               
                <h2><b>Achievements</b></h2>
             <div class="progress-bar">Hospitals Involved<br> <br></div>
<div class="progress-bar" data-percent="60" data-duration="1000" data-color="#ffe4e1,#a87378">Total Lives Saved <br> <br></div>
<div class="progress-bar" data-percent="90" data-color=" 
#c3cf9f,#2c3619">Blood availability<br> <br></div>
   <div class="progress-bar" data-percent="45" data-color=" 
#dfe4fb,#70f17b">Govt. cooperation <br> <br> </div>
        </div>
        </div>
    </section>
    
    
    <section id="list" class="list-section">
        <div class="container">
            <div class="row">
               
                <h2><b>Hospitals in bound</b></h2>
         
                        <table class="table table-striped" style="margin-top:50px">
                           <?php if(!@$name){
                           echo "No Hospital list found";
                             }
                            else{
                                ?>
                              <tr>
                            <th>Name</th>
                            <th>Address</th>
                           </tr>
                         <?php  foreach(@$name as $s){
                                    ?>
                            <tr>
                                <td><?php echo $s->name." "; ?></td>
                                <td><?php echo $s->address; ?></td>
                            </tr>  
                            <?php
                            }
                            }
                           ?>
                            
                        </table>
         
           
            </div>
        </div>
    </section>
    
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                
                    <h2><b>Contact Section</b></h2>
                    <div class="col-sm-6" id="map" style="margin-top:30px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.260531922673!2d77.43118691354205!3d23.233604614241234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c4267a46afeeb%3A0xab502869c5827843!2sPlot+No+216%2CBehind+Jyoti+Cinema!5e0!3m2!1sen!2sin!4v1508488113252" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-sm-6" id="ad">
                       <h3> 
                            Vasant vihaar,<br>
                            Opposite Jyoti complex <br>
                            M.P. Nagar Bhopal (M.P) <br>
                            Pin: 462023 <br>
                            Phone:458745 <br>
                            Email:abcdyrhr@gmail.com <br>
                        </h3> <br> <br>
                        <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-youtube fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-pinterest fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-googleplus fa-2x" aria-hidden="true"></i>
                    </div>
               
            </div>
        </div>
    </section>
<div class="footer">
    Ruqaiya.fundamentals limited &copy;
</div>
   
   
 
   
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>
   <script src="js/jquery.bvalidator.js"></script>
    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script type="application/javascript" src="Dynamic-Circular-Progress-Bar-with-jQuery-CSS3/jQuery-plugin-progressbar.js"></script>
    
    <script>
	$(".progress-bar").loading();				// you can load automatically
	$('input').on('click', function () {		// use some events to control the loading like this 
		 $(".progress-bar").loading();
	});
        setTimeout(function () {	
	$rotate.css({
		'transition': 'transform ' + opts.duration + 'ms linear',
		'transform': 'rotate(' + opts.percent * 3.6 + 'deg)'
	});
},5000);	
</script>
<script>
function myMap() {
    var mapCanvas = document.getElementById("map");
    var mapOptions = {
        center: new google.maps.LatLng(51.5, -0.2),
        zoom: 10
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
}
 </script>
 
 <script type="text/javascript"> 
    $(document).ready(function () {
        $('#form1').bValidator();
    });
</script> 
<script type="application/javascript">
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
<script type="application/javascript">
    $('#myModal1').on('hidden.bs.modal', function() {
  return false;
});
    </script>
    <script>
    document.getElementById("defaultOpen").click();
</script>
    
</body>

</html>

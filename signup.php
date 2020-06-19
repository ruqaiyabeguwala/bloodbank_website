<?php include "mvc/control.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/scrolling-nav.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="application/javascript" src="js/bootstrap.js"></script>
     <!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>
<body>
   
   
    <div class="container-fluid" style=" background: url('images/images(33).jpg')no-repeat;
    background-size:cover; ">
     <ul class="nav nav-tabs">
       <li class="active"><a href="index.php">Home</a></li>
       <li><a href="">About</a></li> 
   </ul>
   <div class="row">
    <div class="col-sm-6">
        <h2 style="text-align:center;color:grey;">Donate Blood..!! Donate Life..!!</h2>
    </div>
      <div class="col-sm-6 " id="signup">
       <form action="" method="post" class="form-inline">
           <div class="form-group">
           <label for="">Email</label>
           <input type="email" name="e1" class="form-control">
           </div>
            <div class="form-group">
           <label for="">Password</label>
           <input type="password" name="p2" class="form-control">
           </div>
           <button class="btn btn-info" name="sub1" type="submit"
           >Sign In</button>
           
       </form>
   </div>
   </div>
   <div class="row">
   <div class="col-sm-7" id="slider">
        
         
       <!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/blooddonationmedicalbackgroundvectorillustrationeps71333326.jpg" alt="" title="" id="wows1_0"/></li>
		<li><img src="data1/images/blooddonationwordcollage27312134.jpg" alt="" title="" id="wows1_1"/></li>
		<li><img src="data1/images/blooddonorsunitededitednenew.jpg" alt="" title="" id="wows1_2"/></li>
		<li><img src="data1/images/banner.jpg" alt="" title="" id="wows1_3"/></li>
		<li><img src="data1/images/canstock32394646.jpg" alt="" title="" id="wows1_4"/></li>
		<li><a href="http://wowslider.com"><img src="data1/images/heartinhands638x425.jpg" alt="jquery slider" title="" id="wows1_5"/></a></li>
		<li><img src="data1/images/world_blood_donor_day_2013.jpg" alt="" title="" id="wows1_6"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title=""><span><img src="data1/tooltips/blooddonationmedicalbackgroundvectorillustrationeps71333326.jpg" alt=""/>1</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/blooddonationwordcollage27312134.jpg" alt=""/>2</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/blooddonorsunitededitednenew.jpg" alt=""/>3</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/banner.jpg" alt=""/>4</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/canstock32394646.jpg" alt=""/>5</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/heartinhands638x425.jpg" alt=""/>6</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/world_blood_donor_day_2013.jpg" alt=""/>7</span></a>
        </div></div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->  
         
     
       
   </div>
   <div class="col-sm-4 " id="s">
   <h2>Create your own account</h2>
    <form action="" role="form" method="post">
        <tr>
            <td>First Name</td>
            <td><input type="text" name="n1" class="form-control"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="n2" class="form-control"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="e" class="form-control"></td>
            
        </tr>
        <tr>
            <td>Blood group</td>
            <td>
                <select name="b" class="form-control">
                  <option>Select</option>
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
            <td><textarea name="ad" id="" cols="5" rows="2" class="form-control"></textarea></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="p1" class="form-control"></td>
        </tr>
        <tr>
            <br>
            <td><input type="submit" value="Sign Up" name="sub" class=" btn btn-info btn-sm"></td>
            
        </tr>
    </form>
       </div>
        </div>
    
</div>
</body>

</html>
<!doctype html>
<html>
<head>
<title>Project C.H.A.M.P. - CHAMPmvc</title>
<link href="http://127.0.0.1/mvc/public/css/bootstrap.min.css" rel="stylesheet" />
<link href="http://127.0.0.1/mvc/public/css/basic.css" rel="stylesheet" />
<script src="http://127.0.0.1/mvc/public/js/jquery.min.js"></script>
<script src="http://127.0.0.1/mvc/public/js/bootstrap.min.js"></script>

<script src="http://127.0.0.1/mvc/public/js/textition.js"></script><script>
// handler on element
$(function() {
	
	$('#sliding').textition({
		speed: 0.5,
		animation: 'ease-out',
		map: {
			x: 0,
			y: 40,
			z: 0
		},
				autoplay: true,
		element: $('#arrow-next')
	})		
});
</script>

</head>
<body>

<?php include('http://127.0.0.1/mvc/public/php/header.php'); ?>
<!-----------div id="menu">
<div id="wrapper">

<ul>
<li style="display:inline;float:left;"><a href="#">HOME</li>
<li style="display:inline;float:left;"><a href="#">ABOUT US</li>
<li style="display:inline;float:left;"><a href="#">OUR SERVICES</li>
<li style="display:inline;float:left;"><a href="#">OUR CLIENTS</li>
<li style="display:inline;float:left;"><a href="#">CONTACT US</li>
</ul>
</div>
</div----------->
<?php include('http://127.0.0.1/mvc/public/php/menu.php'); ?>
<?php include('http://127.0.0.1/mvc/public/php/slider.php'); ?>
<br>
<div class="container">
            <div class="row">
                <!--<div class="col-md-4">
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
							FACEBOOK LIKES
							</button>
							<br>CONTENT GOES HERECONTENT GOES HERECONTENT GOES HERECONTENT GOES HERECONTENT GOES HERECONTENT GOES HERE
							<br><br><br><br><br>
							<br><br><br><br><br>
							
                </div>end of col-md-4-->
                <div class="col-md-8" style="width:100%">
                    <div class="row">
                        <div class="col-md-8">
<h1>CONTACT US</h1>					
<hr>	
<?php
if(isset($_GET['succ'])){
	
                        	echo 'Thank You';
				}
?>				
	  <form class="form-horizontal" role="form" action="<?php echo URL ?>/contact/getModel" method="GET" enctype="multipart/form-data" name="feedbackfrm">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="feed_name" name="name" placeholder="Please Enter Your Name">
    </div>
  </div>
  
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input class="form-control" type="email" id="feed_email" name="email" placeholder="Please Enter Your Valid Email-Id" required="required" value="<?php if(isset($errorup)){ echo $_POST['feed_email']; } ?>" tabindex="2" >
    </div>
  </div>
 
  <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Mobile Number</label>
  <div class="col-sm-10">  
	<input type="tel" class="form-control" id="feed_phone" name="mobNum" placeholder="Please Enter Your Phone Number" value="<?php if(isset($errorup)){ echo $_POST['feed_phone']; } ?>" tabindex="3" > 
    </div> 
    </div>
  
  
  <div class="form-group">
	<label for="inputPassword" class="col-sm-2 control-label">Message</label>
   <div class="col-sm-10">  
   <textarea class="form-control" rows="3" placeholder="Enter your text here . ." id="feed_content" name="msg" required="required" rows="5" cols="60" value="<?php if(isset($errorup)){ echo $_POST['feed_content']; } ?>" tabindex="4" ></textarea><br><br>
    </div>
  </div>
  

  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" id="feed_sub" name="feed_sub" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
                        </div><!--end of col-md-8-->
                      <?php include('http://127.0.0.1/mvc/public/php/sidenav.php')?>
                </div><!--end of col-md-8-->
            </div><!--end of row-->

</div><!--end of container-->
</div>     
<?php include('http://127.0.0.1/mvc/public/php/footer.php'); ?>
 
		

		</body>
</html>

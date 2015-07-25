<?php //include('http://127.0.0.1/mvc/public/conn.php'); ?>
<! doctype html>
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
<h1>OUR TEAM</h1>
<hr>
				  <?php include('http://127.0.0.1/mvc/public/php/team.php'); ?>
				  
                        </div><!--end of col-md-8-->
						<?php include('http://127.0.0.1/mvc/public/php/sidenav.php')?>
                </div><!--end of col-md-8-->
            </div><!--end of row--> 
        </div><!--end of container-->
	</div><!--end of container-->
     
<?php include('http://127.0.0.1/mvc/public/php/footer.php'); ?>
 
 
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">CONTACT US</h4>
      </div>
      <div class="modal-body">

       				<?php
				//checking errors
				if(isset($errorup)){
					foreach($errorup as $errorup){
						echo '<p style="color: red;">'.$errorup.'</p>';
					}
				}
				//if no errors, show success
				else if(isset($succ)){
                        	echo $succ;
				}
?>                
	  <form class="form-horizontal" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data" name="feedbackfrm">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input class="form-control" type="email" id="feed_email" name="feed_email" required="required" value="<?php if(isset($errorup)){ echo $_POST['feed_email']; } ?>" tabindex="2" >
    </div>
  </div>
 
  <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Mobile Number</label>
  <div class="col-sm-10">  
	<input type="number" class="form-control" id="feed_phone" name="feed_phone" value="<?php if(isset($errorup)){ echo $_POST['feed_phone']; } ?>" tabindex="3" > 
    </div> 
    </div>
  
  
  <div class="form-group">
	<label for="inputPassword" class="col-sm-2 control-label">Query</label>
   <div class="col-sm-10">  
   <textarea class="form-control" rows="3" placeholder="Enter your text here . ." id="feed_content" name="feed_content" required="required" rows="5" cols="60" value="<?php if(isset($errorup)){ echo $_POST['feed_content']; } ?>" tabindex="4" ></textarea><br><br>
    </div>
  </div>
  
  <div class="form-group">
	<label for="capthcha" class="col-sm-2 control-label"></label>
   <div class="col-sm-10">
  
<?php		if(isset($capt)){
							echo $capt.'';
							}
                          require_once 'http://127.0.0.1/mvc/public/pgp/captcha/securimage.php';
                          $options = array();
                      $options['input_name'] = 'ct_captcha';                        
                            echo Securimage::getCaptchaHtml($options);                           
                ?>   
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" id="feed_sub" name="feed_sub" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>



		

		</body>
</html>

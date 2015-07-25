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
</div-----------><?php include('http://127.0.0.1/mvc/public/php/menu.php'); ?>
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
<h1>ABOUT US</h1>
<hr>
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."<br><br>
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."<br><br>
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."<br><br>
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."<br><br>
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."<br><br>				  

                        </div><!--end of col-md-8-->


			<?php include('http://127.0.0.1/mvc/public/php/sidenav.php')?>
                </div><!--end of col-md-8-->
            </div><!--end of row--> 
		
        </div><!--end of container-->
	 </div><!--end of container-->
     
<?php include('http://127.0.0.1/mvc/public/php/footer.php'); ?>
 
 


		

		</body>
</html>

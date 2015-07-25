<?php
include('conn.php');
if(!$link1)
  {
  die('Could not link1: ' . mysql_error());
  }
//if form has been submitted, process it
if(isset($_POST['feed_sub'])){
	//validation
	$namepattern="/[0-9@#%_+*()$]/";
	if(preg_match($namepattern,$_POST['feed_name']) > 0)
	{	$errorup[] = 'Invalid Name.';}
	else if(strlen($_POST['feed_name']) < 3){
		$errorup[] = 'Name is too short.';
	}		
	// phone validation
        if($_POST['feed_phone']!=="")
        {
	$phonepattern="/^[0-9]{10,10}$/";
	if(!preg_match($phonepattern,$_POST['feed_phone'])==1)
	{	$errorup[] = 'Invalid Contact Number '.$_POST['feed_phone'];}
        }

	//email validation
	if(!filter_var($_POST['feed_email'], FILTER_VALIDATE_EMAIL)){
	    $errorup[] = 'Please enter a valid email address.';
	} 
       
        
        if(strlen($_POST['feed_content']) < 3)
        {
	    $errorup[] = 'Please enter a Valid Feedback.';            
        }

        //captcha verification
        //require_once 'captcha/securimage.php';
          //  $image = new Securimage();
           //$captcha = @$_POST['ct_captcha'];
           //if($image->check($captcha) !== true)
           //{
               //$capt  = '<p style="color: red;">Incorrect Captcha Entered.</p>';
           //}
	//if no errors have been created.
	if(!isset($errorup) && !isset($capt)){
                    $quer="INSERT INTO feedback (name,email,phone,feed) VALUES ('$_POST[feed_name]','$_POST[feed_email]','$_POST[feed_phone]','$_POST[feed_content]')";
                    if(!mysql_query($quer))
                    {
                        die('Error: ' . mysql_error());
                    }
                    else
                    {
                        $succ = '<b style="color:red">Thanks for your feedback, '.$_POST['feed_name'].'.</b><br>';
                    }
        }
}
?>

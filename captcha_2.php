<?php
	session_start();
	error_reporting(0);
?>

<?php
	if(isset($_POST['submit'])){
		if(isset($_POST['vname'])){
			$user_entered_captcha = $_POST['vname'];
			$system_generated_captcha = $_SESSION['image_captcha'];
			if($user_entered_captcha == $system_generated_captcha){
				include 'welcome.php';
			}else{
				include("index.php");
			}
		}else{
			echo "Captcha Not Entered";
		}
	}else{
		echo "Please Submit the Form";
	}

?>
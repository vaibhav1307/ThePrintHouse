<?php
// variable setting
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$Message = $_REQUEST['Your Message'];

//check input fields
if (empt($name) || empty($email) || empty($phone))
{
	echo "Please fill all the fields";

}
else
{
	mail("vsr.bruh@gmail.com", "User Query", $Message , $phone , "From: $name <$email>");
	echo "<script type='text/javascript'>alert('Your message sent successfull');
	     window.history.log(-1);
	</script>";
}
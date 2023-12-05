<?php

include "con.php";


 if (isset($_SESSION['username'])) {
 	header("Location: Dash.php");
 }

if (isset($_POST['submit'])) {
$name = $_POST['name'];

$email = $_POST['email'];
 	$password = ($_POST['password']);
 	$cpassword = ($_POST['cpassword']);
	 $mobile = ($_POST['mobile']);
	 
 
//  echo "$name";
//  echo "<br>";
//  echo "$e_no";
//  echo "<br>";
//  echo "$email";
//  echo "<br>";
//  echo "$password";
//  echo "<br>";
//  echo "$cpassword";
//  echo "<br>";
// echo $Department;
// echo "<br>";
// echo $Division;
// }

	if ($password == $cpassword) {

    

        //		$sql = "select * from user WHERE email='$email'";
        $sql = "SELECT * FROM `faculty` WHERE email='$email'";
		$result = mysqli_query($con, $sql);
		$record = mysqli_num_rows($result);
		if ($record <= 0) {
			// $sql = "insert into user(user_name, email, con_number, password)
			// 		values('$username', '$email', '$phonenumber', '$password')";
			// INSERT INTO `user`( `user_name`, `email`, `con_number`, `password`, `area_id`) VALUES ('$username', '$email', '$phonenumber', '$password'));
			$sql = "INSERT INTO `temp_faculty`(`name`, `email`,`password`,`mobile`) VALUES ('$name','$email','$password','$mobile')";
            $result = mysqli_query($con, $sql);
			if ($result) {
                
				$_SESSION['username'] = $username;
				echo "<script>alert('Wow! User Registration Completed.  Your Account will be activated in 24 Hours')</script>";
				$username = "";
				$email = "";
			
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				echo "<script>window.location.replace('login.html');</script>";
			} else {
				echo "<script>alert('Woops! Something Went Wrong.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>
<?php

include "con.php";

$e_no = "";
 if (isset($_SESSION['username'])) {
 	header("Location: Dash.php");
 }

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$e_no = $_POST['e_no'];
$email = $_POST['email'];
 	$password = ($_POST['password']);
 	$cpassword = ($_POST['cpassword']);
     $Department = ($_POST['Department']);
	 $sem = ($_POST['sem']);
     $Division = ($_POST['Division']);
 
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
        $sql = "SELECT * FROM `student` WHERE email='$email'";
		$result = mysqli_query($con, $sql);
		$record = mysqli_num_rows($result);
		if ($record <= 0) {
            
			// $sql = "insert into user(user_name, email, con_number, password)
			// 		values('$username', '$email', '$phonenumber', '$password')";
			// INSERT INTO `user`( `user_name`, `email`, `con_number`, `password`, `area_id`) VALUES ('$username', '$email', '$phonenumber', '$password'));
			$sql = "INSERT INTO `temp_student`(`name`, `e_no`, `email`, `password`, `Department`, `sem`, `Division`) VALUES ('$name','$e_no','$email','$password','$Department','$sem','$Division')";
            $result = mysqli_query($con, $sql);
			if ($result) {
                
				// $_SESSION['username'] = $username;
				echo "<script>alert('Wow! User Registration Completed.Your account will be activated after 12 hours....!')</script>";
				// $username = "";
				// $email = "";
			
				// $_POST['password'] = "";
				// $_POST['cpassword'] = "";
				echo "<script>window.location.replace('login.html');</script>";
			} else {
				echo "<script>alert('Woops! Something Went Wrong.')</script>";
				echo "<script>window.location.replace('index.php');</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
			echo "<script>window.location.replace('index.php');</script>";
		}
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
		echo "<script>window.location.replace('index.php');</script>";
	}
}

?>
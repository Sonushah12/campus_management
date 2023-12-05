<?php
        include "con.php";
        // $Divison = "";
        $id = $_GET['id'];
        // echo $id;
        $sql = "SELECT * FROM temp_student where sid=$id";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        
            // Now, $row contains all the details of the row
            // You can access the columns like $row['column_name']
            
            // For example:
            $name = $row['name'];
            $email = $row['email'];
            $e_no = $row['e_no'];
            $password = $row['password'];
            $Department = $row['Department'];
            $sem = $row['sem'];
            $Division = $row['Division'];

            // echo "<br>";
            // echo $name;
            // echo "<br>";
            // echo $email;
            // echo "<br>";
            // echo $e_no;
            // echo "<br>";
            // echo $password;
            // echo "<br>";
            // echo $Department;
            // echo "<br>";
            // echo $Division;

            $sql = "DELETE FROM `temp_student` WHERE sid=$id";
            $result = $con->query($sql);

            $sql = "INSERT INTO `student`(`name`, `e_no`, `email`, `password`, `Department`, `sem` , `Division`) VALUES ('$name','$e_no','$email','$password','$Department','$sem','$Division')";
            $result = $con->query($sql);
            if($result)
            {
                echo "<script>alert('User created successfully.')</script>";


                echo "<script>window.location.replace('srequets.php');</script>";
                        // // Recipient's email address
                        // $to = $email;

                        // // Email subject
                        // $subject = "Account Activation";

                        // // Email message
                        // $message = "Hello ".$name." Your Account has been created succesfully. Now you can login.";

                        // // Sender's email address
                        // $from = "22004401110182@ljku.edu.in";

                        // // Additional headers
                        // $headers = "From: $from\r\n";
                        // $headers .= "Reply-To: $from\r\n";
                        // $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

                        // ini_set("SMTP", "localhost");
                        // ini_set("smtp_port", 587);
                        

                        // // Send the email
                        // $mailSent = mail($to, $subject, $message, $headers);

                        // if ($mailSent) {
                        //     echo "Email sent successfully!";
                        // } else {
                        //     echo "Email sending failed.";
                        // }


            }


        
            // Do something with the data
        } else {
            echo "No results found";
        }
        
?>
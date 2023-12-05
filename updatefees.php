<?php
include "con.php";
if (isset($_POST['submit'])) {
    // Check if any value is empty
    if (!empty($_POST['amount']) && !empty($_POST['year']) && !empty($_POST['Department']) && !empty($_POST['Semester'])) {
        // Perform the task if values are not empty
        $amount = $_POST['amount'];
        $year = $_POST['year'];
        $Department = $_POST['Department'];
        $Semester = $_POST['Semester'];
        $fid = $_POST['fid'];

        // echo $amount;
        // echo $year;
        // echo $Department;
        // echo $Semester;





        $sql = "DELETE FROM `fees` WHERE `af_id`='$fid'";
        $result = $con->query($sql);
        if($result){
                $sq1 = "INSERT INTO `fees`(`af_id`, `fees_amount`, `year`, `Department`, `sem`) VALUES ('$fid','$amount','$year','$Department','$Semester')";
                $r = mysqli_query($con,$sq1);
                if($r){
                    echo "<script>alert('Fees updated Successsfully......!.')</script>";
                    echo "<script>window.location.replace('see_fees.php');</script>";
                }else{
                    echo "<script>alert('Something went wrong......!.')</script>";
                    echo "<script>window.location.replace('see_fees.php');</script>";
                }
        }
        else {
            echo "<script>alert('Something went wrong......!.')</script>";
                    echo "<script>window.location.replace('see_fees.php');</script>";
        }
        // if ($con->query($sql) === TRUE) {
        //     echo "<script>alert('Fees created Successsfully......!.')</script>";
        //     echo "<script>window.location.replace('make_fees.php');</script>";
        //     } else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
            
        //     }
        }else {
            // Inform the user if any value is empty
            echo "<script>alert('please fill all the details......!.')</script>";
            echo "<script>window.location.replace('see_fees.php');</script>";
        }
    } else {
        echo "<script>alert('Something went wrong......!.')</script>";
                    echo "<script>window.location.replace('see_fees.php');</script>";
    }
    


?>
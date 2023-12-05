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

        // echo $amount;
        // echo $year;
        // echo $Department;
        // echo $Semester;





        $sql = "SELECT * FROM fees WHERE year='$year' AND Department='$Department' AND sem='$Semester'";
        $result = $con->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<script>alert('Fees already exist......!.')</script>";
            echo "<script>window.location.replace('make_fees.php');</script>";
            }
        } else {

            $random_number = rand(100, 999);
            $sql = "SELECT * FROM fees WHERE af_id=$random_number";
            $result = $con->query($sql);

// Fetch the rows
            if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
             // Access the columns of the row here
             echo "<script>alert('Something Went wrong try again......!.')</script>";
             echo "<script>window.location.replace('make_fees.php');</script>";
            }
            } else {
                $sql = "INSERT INTO `fees`(`af_id`, `fees_amount`, `year`, `Department`, `sem`) VALUES ('$random_number','$amount','$year','$Department','$Semester')";
            }
            
            //echo "No matching records found";
           

        if ($con->query($sql) === TRUE) {
            echo "<script>alert('Fees created Successsfully......!.')</script>";
            echo "<script>window.location.replace('make_fees.php');</script>";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }





        
        // Add your desired task here
    } else {
        // Inform the user if any value is empty
        echo "<script>alert('please fill all the details......!.')</script>";
        echo "<script>window.location.replace('make_fees.php');</script>";
    }
    
}

?>
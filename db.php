<?php
$host= "localhost";
$username = "root";
$password = "kalash72";
$database = "task2";
 
// Create connection
$conn = mysqli_connect($host, $username, $password ,$database);

// Check if connection was successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

// Check if form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Get values from form
    $employee_id = $_POST['employee_id'];
    $employee_first_name = $_POST['employee_first_name'];
    $employee_last_name = $_POST['employee_last_name'];
    $graduation_percentile = $_POST['graduation_percentile'];
    $employee_salary = $_POST['employee_salary'];
    $employee_code = $_POST['employee_code'];
    $employee_code_name = $_POST['employee_code_name'];
    $employee_domain = $_POST['employee_domain'];

    // Insert data into employee_code_table
    $sql1 = "INSERT INTO `employee_code_table` (`employee_code`, `employee_code_name`, `employee_domain`)
             VALUES ('$employee_code', '$employee_code_name', '$employee_domain')";
    $result1 = mysqli_query($conn, $sql1);
    if(!$result1){
        echo "Error inserting data into employee_code_table: " . mysqli_error($conn);
    }

    // Insert data into employee_salary_table
    $sql2 = "INSERT INTO `employee_salary_table` (`employee_id`, `employee_salary`, `employee_code`)
             VALUES ('$employee_id', '$employee_salary', '$employee_code')";
    $result2 = mysqli_query($conn, $sql2);
    if(!$result2){
        echo "Error inserting data into employee_salary_table: " . mysqli_error($conn);
    }

    // Insert data into employee_details_table
    $sql3 = "INSERT INTO employee_details_table (`employee_id`, `employee_first_name`, `employee_last_name`, `graduation_percentile`)
             VALUES ('$employee_id', '$employee_first_name', '$employee_last_name', '$graduation_percentile')";
    $result3 = mysqli_query($conn, $sql3);
    if(!$result3){
        echo "Error inserting data into employee_details_table: " . mysqli_error($conn);
    }

    // Check if all queries were successful
    if($result1 && $result2 && $result3){
        echo "The record has been inserted successfully!<br>";
    }else{
        echo "The record was not inserted successfully.";
    }
}

?>
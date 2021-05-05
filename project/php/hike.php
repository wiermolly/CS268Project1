<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $num = $_POST['num'];
    $date = $_POST['date'];

    //database connection
    $conn = new mysqli('localhost', 'root', '', 'project');
    if($conn->connect_error){
        die('Connection failed : ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("INSERT INTO appointments (lesson_id, fname, lname, email, phone, num_people, day) values (?,?,?,?,?,?,?);");
        $stmt->bind_param("issssis", 5, $fname, $lname, $email, $phone, $num, null);
        $stmt->execute();
        echo "appointment added";
        $stmt->close();
        $conn->close();
        }

?>
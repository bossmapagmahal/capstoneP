<?php
    $firstname = $_POST['firstname'];
     $middlename = $_POST['middlename'];
     $lastname = $_POST['lastname'];
     $address = $_POST['address'];
     $graduated = $_POST['graduated'];
     $schooladdress = $_POST['schooladdress'];
     $emailaddress = $_POST['emailaddress'];
     $grades = $_POST['grades'];
     $form = $_POST['form'];
     $picture = $_POST['picture'];

$ conn = new mysqli('localhost' , 'root' '' '' 'test');
if($conn->connect_error){
    die('Connection Fieled :' . $conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(firstname, middlename, lastname, address, graduated, schooladdress, emailaddress, grades, form, picture)"
    values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?));
    $stmt->bind_param("ssssssssss", $firstname, $middlename, $lastname, $address, $graduated, $schooladdress, $emailaddress, $grades, $form, $picture);
    $stmt->execute();
    echo "registration successfully";
    $stmt->close();
    $conn->close();
}
?>
    
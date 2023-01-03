<?php include 'connection.php'; ?>

<?php
//  $id = $_POST['id'];
 $name = $_POST['name'];
 $status = $_POST['status'];

 


    $sql = "INSERT INTO faqs (question,name,status) VALUES ('$name','$status')";
    $result = mysqli_query($conn, $sql);
    if($result === TRUE){
        echo "<script type=text/javascript>alert('Notification Added');</script>";
    }
    

header("Location: http://testlinks.code7labs.com/seven-draft/Dashboard/add-brands.php");
?>
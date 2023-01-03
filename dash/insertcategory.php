<?php include 'connection.php'; ?>

<?php
 $name = $_POST['name'];
 $is_child = $_POST['is_child'];
 $child_of = $_POST['child_of'];

 


    $sql = "INSERT INTO categories (name,is_child,child_of) VALUES ('$name','$is_child','$child_of')";
    $result = mysqli_query($conn, $sql);
    if($result === TRUE){
        echo "<script type=text/javascript>alert('Categories Added');</script>";
    }
    

header("Location: http://testlinks.code7labs.com/seven-draft/Dashboard/categories-add.php");
?>
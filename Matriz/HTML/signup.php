<?php
$conn=mysqli_connect("localhost","root","","students")or die(mysqli_error($conn));
if(isset($_POST['submit'])){
    $fname= $_POST['fname'];
    $class= $_POST['class'];
    $adm = $_POST['adm'];
    $age = $_POST['age'];

    $query = mysqli_query($conn,"INSERT INTO register(id , firstname, class, adm, age)
    VALUES(null,'$fname', '$class', '$adm','$age')") or die(mysqli_error($conn));
    if($query){
        echo "success";
        header('refresh:2;url=index.php');
    }else{
        echo "failed";
    }
}

?>
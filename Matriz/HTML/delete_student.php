<?php
$conn =mysqli_connect("localhost","root","","students")or die(mysqli_error($conn));
$id=$_GET['id'];
//delete query
$delete = mysqli_query($conn,"delete from register where id='$id'")or die(mysqli_error($conn));
if($delete){
    echo "success";
    header('refresh:2;url=index.php');
}else{
    echo "failed";
}

?>
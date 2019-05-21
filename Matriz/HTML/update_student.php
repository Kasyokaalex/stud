<?php
  $id=$_GET['id'];
  $conn=mysqli_connect("localhost", "root", "", "students")or die(mysqli_error($conn));
  $query=mysqli_query($conn, "select * from register where id='$id'")or die(mysqli_error($conn));
  foreach($query as $record){
      $pfname=$record['firstname'];
      $pclass=$record['class'];
      $padm=$record['adm'];
      $age=$record['age'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/colorpicker.css" />
<link rel="stylesheet" href="css/datepicker.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link rel="stylesheet" href="css/bootstrap-wysihtml5.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Students</a></h1>
</div>
 

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i>Forms</a>
  <ul>
    <li><a href="index.php"><i class="icon icon-home"></i> <span>All Students</span></a> </li>
    <li><a href="add_student.html"><i class="icon icon-home"></i> <span>Add Student</span></a> </li>
    
  </ul>
</div>

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Common elements</a> </div>
  <h1>Students Addition Form</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Student</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="index.php" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">First Name :</label>
              <div class="controls">
                <input type="text" name="fname" class="span11"  value="<?php echo$pfname?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Class :</label>
              <div class="controls">
                <input type="text" class="span11" name="class" value="<?php echo$pclass?>" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Adm</label>
              <div class="controls">
                <input type="text"  class="span11" name="adm" value="<?php echo$padm?>"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Age :</label>
              <div class="controls">
                <input type="number" class="span11" name="age" value="<?php echo$age?>"/>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" name="save" class="btn btn-success">update</button>
            </div>
          </form>
        </div>
      </div>
      
</div></div>

<!--end-Footer-part--> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-colorpicker.js"></script> 
<script src="js/bootstrap-datepicker.js"></script> 
<script src="js/jquery.toggle.buttons.js"></script> 
<script src="js/masked.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.form_common.js"></script> 
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/bootstrap-wysihtml5.js"></script> 
<script>
	$('.textarea_editor').wysihtml5();
</script>
</body>
</html>




           
 

 <?php
if(isset($_POST['save'])){
    $upfname=$_POST['fname'];
    $upclass=$_POST['class'];
    $upadm=$_POST['adm'];
    $upage=$_POST['age'];
    $update=mysqli_query($conn,"update student set fname='$upfname',class='$upclass',adm='$upadm',age='$age' where id='$id' ")or die(mysqli_error($conn));
     if($update){
         echo"success";
     }else{
         echo"fail";
     }

}



?>
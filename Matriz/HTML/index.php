<?php
$conn=mysqli_connect("localhost", "root", "", "students")or die(mysqli_error($conn));
$query=mysqli_query($conn, "select * from register")or die(mysqli_error($conn));
if($query){
  echo"success";
}else{
  echo"fail";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Students</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Students</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<

<!--start-top-serch-->

<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Tables</a>
  <ul>
    <li><a href="index.php"><i class="icon icon-home"></i> <span>All Students</span></a> </li>
    <li><a href="add_student.html"><i class="icon icon-signal"></i> <span>Add Student</span></a> </li>
    
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>All Students</h1>
  </div>
<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title"></h4>
                                <p class="category"></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <th>ID</th>
                                        <th>First name</th>
                                    	<th>Class</th>
                                    	<th>Adm</th>
                                        <th>Age</th>
                                        
                                    	
                                    </thead>
                                    <tbody>
                                    <?php foreach($query as $record){?>
                                        <tr>
                                        	<td><?php echo$record['id']?></td>
                                        	<td><?php echo$record['firstname']?></td>
                                        	<td><?php echo$record['class']?></td>
                                            <td><?php echo$record['adm']?></td>
                                            <td><?php echo$record['age']?></td>
                                            <td>
                                                
                                                <a href="update_student.php?id=<?php echo$record['id']?>" class="btn btn-success">Update</a>
                                                <a href="delete_student.php?id=<?php echo$record['id']?>" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                          </div>
                        </div>
                    </div>


                </div>
            </div>
</div>

        
<!--Footer-part-->

<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
</body>
</html>

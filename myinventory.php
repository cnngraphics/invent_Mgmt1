<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cargo Cube</title>
<link rel="stylesheet" href="style.css" type="text/css" />

<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css" />
<link rel="stylesheet" href="js/bootstrap.js" type="text/javascript" />


</head>
<body>



<div id="header">
<label ><a href="index.php"  style="text-decoration: none;"><span style="color: white;">Inventory Manager</span></a></label>
</div>

<div class="container">
    <div class="row">

        <!--For mobile devices <768px - Extra small devices Phones -->
        <div id="main-frame" class="col-xs silver-bg main-frame-xs">
            <div id="right-block" class="right-block"></div>
            <div id="left-block" class="left-block"></div>

        </div>

        <!--For mobile devices between 768px and 992px - Small devices Tablets -->

        <div id="main-frame" class="col-sm main-frame-sm">
            <div id="right-block" class="right-block"></div>
            <div id="left-block" class="left-block"></div>

        </div>

        <!--For Medium devices >= 992px - DESKTOPS -->

        <div id="main-frame" class="col-md col-lg main-frame-md main-frame-lg">
            <div id="right-block" class="right-block"></div>
            <div id="left-block" class="left-block"></div>

        </div>



        <div id="body">
        	<table width="80%" border="1" class="table table-responsive table-striped">
            <tr>
                <?php 
                    $itemCount = "SELECT count(*) FROM tbl_uploads"; 
                    $categoryCount = "SELECT count(*) FROM categories"; 

                    $countItems = mysqli_fetch_array(mysqli_query($dbh,$itemCount));
                    $countCategories = mysqli_fetch_array(mysqli_query($dbh,$categoryCount));


                ?>
            <th colspan="7"><h3><?php print ($countItems[0]); ?> uploads...<?php print ($countCategories[0])." Categories...=>> "; ?><label><a href="index.php">upload new files...</a></h3></label>
            </th>
            </tr>
            <tr style="background: silver;">
            <td>File Name</td>
            <td>File Type</td>
            <td>File Size(KB)</td>
            <td>Cubic Size</td>
            <td>Weight</td>
            <td>Preview</td>
            <td>Link</td>
            </tr>
            <?php
        	$sql="SELECT * FROM tbl_uploads";
            

        	$result_set=mysqli_query($dbh,$sql);
        	while($row=mysqli_fetch_array($result_set))
        	{
        		?>
                <tr>
                <td><?php echo $row['file'] ?></td>
                <td><?php echo $row['type'] ?></td>
                <td><?php echo $row['size'] ?></td>
                
                <td><?php echo $row['cubicSize'] ?></td>
                <td><?php echo $row['weight'] ?></td>
                <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank"><img src="uploads/<?php echo $row['file'] ?>" width="100"></a></td>
                <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>

                </tr>
                <?php
        	}
        	?>
            </table>
            
        </div>

    </div>
</div>


<link rel="stylesheet" href="js/jquery-1.11.3.js" type="text/javascript" />


</body>
</html>
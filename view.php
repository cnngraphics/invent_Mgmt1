<?php include('header.php'); ?>
  
    
<div class="container">
    <div class="row">
        <div id="body">
        	<table width="80%" border="1" class="table table-responsive table-striped">
            <tr>
                <?php 
                    $itemCount = "SELECT count(*) FROM tbl_uploads"; 
                    $categoryCount = "SELECT count(*) FROM categories"; 

                    $countItems = mysqli_fetch_array(mysqli_query($dbh,$itemCount));
                    $countCategories = mysqli_fetch_array(mysqli_query($dbh,$categoryCount));


                ?>
            <th colspan="10"><h3><?php print ($countItems[0]); ?> uploads...<?php print ($countCategories[0])." Categories...=>> "; ?>
                <label>
                <a href="index.php"><button class="btn btn-primary">upload new files...</button></a></h3>
                </label>
            </th>
            </tr>
            <tr style="background: silver;">
            <td>Category</td>
            <td>Sub Category</td>            
            <td>Title</td>                
            <td>File Name</td>
            <td>File Type</td>
            <td>File Size(KB)</td>
            <td>Cubic Size</td>
            <td>Weight</td>
            <td>Preview</td>
            <td>Link</td>
            </tr>
            <?php
            $sql = "SELECT * FROM tbl_uploads 
					join categories on tbl_uploads.categoryId=categories.id
					join subcategories  on subcategoryId=subcategories.id";
					            
        	//$sql="SELECT * FROM tbl_uploads join categories on tbl_uploads.categoryId=categories.id";
            

        	$result_set=mysqli_query($dbh,$sql);
        	while($row=mysqli_fetch_array($result_set))
        	{
        		?>
                <tr>
                <td><?php echo $row['categoryName'] ?></td>
                 <td><?php echo $row['subCategoryName'] ?></td>
                <td><?php echo $row['title'] ?></td>                    
                <td><?php echo $row['file'] ?></td>
                <td><?php echo $row['type'] ?></td>
                <td><?php echo $row['size'] ?></td>
                
                <td><?php echo $row['cubicSize'] ?></td>
                <td><?php echo $row['weight'] ?></td>
                <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank"><img class="img-polaroid" src="uploads/<?php echo $row['file'] ?>" height="100"></a></td>
                <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>

                </tr>
                <?php
        	}
        	?>
            </table>
            
        </div>

    </div>
</div>

 <P>
   
   <img src="images/b4.jpg">
</body>
</html>
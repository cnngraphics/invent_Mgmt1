<?php include('header.php'); ?>
  
    
<div class="container">
    <div class="row">
        <div id="body" class="silver-bg main-block">

            <!-- here comes the tabs for each Main category -->

            <div id="tab-block" class="tab-header-bg">
              
              <div>
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                    <!-- get the categories -->
                    <?php 
                   
                    $sql = "SELECT `categoryName` FROM categories"; 
                    $result_set=mysqli_query($dbh,$sql);

                    while($row=mysqli_fetch_array($result_set)){

                       $item=$row['categoryName'];
                       $itemCssIdName = str_replace(' ', '', $item);

                        ?>

                        <span role="presentation" class="btn btn-primary pull-left">
                            <a href="#<?php echo $itemCssIdName; ?>" 
                            aria-controls="<?php echo $itemCssIdName; ?>" role="tab" data-toggle="tab">
                            <?php echo $item; ?></a>
                        </span>
              	</ul>
              </div>
              
            </div>

              <!-- Tab panes -->
                <div class="tab-content">
                     
                            <div role="tabpanel" class="tab-pane " id="<?php echo $item; ?> ">
                                <?php echo $item; ?>

                                dczxc zxc zxc 

                            </div>
                </div>

               <?php
                    }
                   ?>
                

        </div>

            <!-- End comes the tabs for each Main category -->


        <!--	<table width="80%" border="1" class="table table-responsive table-striped">
            <tr>
                <?php 
                    $itemCount = "SELECT count(*) FROM tbl_uploads"; 
                    $categoryCount = "SELECT count(*) FROM categories"; 

                    $countItems = mysqli_fetch_array(mysqli_query($dbh,$itemCount));
                    $countCategories = mysqli_fetch_array(mysqli_query($dbh,$categoryCount));


                ?>
            <th colspan="9"><h3><?php print ($countItems[0]); ?> uploads...<?php print ($countCategories[0])." Categories...=>> "; ?><label>
                <a href="index.php"><button class="btn btn-primary">upload new files...</button></a></h3></label>
            </th>
            </tr>
            <tr style="background: silver;">
            <td>Category</td>
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
        	$sql="SELECT * FROM tbl_uploads join categories on tbl_uploads.categoryId=categories.id";
            

        	$result_set=mysqli_query($dbh,$sql);
        	while($row=mysqli_fetch_array($result_set))
        	{
        		?>
                <tr>
                <td><?php echo $row['categoryName'] ?></td>
                <td><?php echo $row['title'] ?></td>                    
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
            </table>-->
            
            <div id="main-frame" >
            
            </div>
            
        </div>

    </div>



</body>
</html>
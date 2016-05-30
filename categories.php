<?php include('header.php');
//        echo "<pre>";
//        print_r($_POST);
//    echo "</pre>]";

 if(isset($_POST['categoryName'])){ 
     $categoryName = $_POST['categoryName'];
 }

//GET parent category ID if exist. And if exist insert in subcategory only by identifying parent with it's ID
//if not exist insert in main category
    if(isset($_POST['parentCategoryId']) && $_POST['parentCategoryId']!="... Parent Category" )
    {
            
//            $categorie = "SELECT* FROM categories"; 
            $parentCategoryId = substr($_POST['parentCategoryId'], 0,strpos($_POST['parentCategoryId'], '-')); 
            //echo $parentCategoryId;
            
         
            $sql = "Insert into subCategories values($parentCategoryId,'$categoryName')";

            //verify successful entry in subcategoy
            
            if(mysqli_query($dbh,$sql))
            {
                echo '<div class="alert alert-success alert-dismissible" role="alert">Sub-Category Added successfully</div>';
            }
            else{
                 echo '<div class="alert alert-danger alert-dismissible" role="alert">There was a problem adding your category</div>';
                echo mysqli_error($dbh);
            }
    }
    else{
        
      if(isset($_POST['categoryName']) && $_POST['parentCategoryId']=="... Parent Category")
      {
          
        $categoryName = $_POST['categoryName'];
         
          
            $sql= "insert into categories values('', '$categoryName')";
       
          if(mysqli_query($dbh,$sql))
              {
                 echo '<div class="alert alert-success alert-dismissible" role="alert">Category Added successfully</div>';
              }
          
          else
              {
                  echo '<div class="alert alert-danger alert-dismissible" role="alert">There was a problem adding your category</div>';
                    echo mysqli_error($dbh);
              }
        
      }
       
        
    }
        

?>
  
    
 

<div class="container">
    <div class="row">
        <div id="body">
        	<table width="80%" border="1" class="table table-responsive table-striped">
            <tr>
                <?php 
                   // $itemCount = "SELECT count(*) FROM tbl_uploads"; 
                 //$countItems = mysqli_fetch_array(mysqli_query($dbh,$itemCount));
                    $categoryCount = "SELECT count(*) FROM categories"; 
                    $countCategories = mysqli_fetch_array(mysqli_query($dbh,$categoryCount));

                ?>
            <th colspan="7"><h3><?php print print ($countCategories[0])." Categories "; ?><!--<label><a href="index.php"> Add Category</a></h3></label>-->
                
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg pull-right" data-toggle="modal" data-target="#myModal">
  Add Category
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Category</h4>
      </div>
      <div class="modal-body">
          <form method="POST" action="" id="accCategoryForm">

                Category Name: <input type="text" name="categoryName"><br>
                Parent Category <select type="text" name="parentCategoryId">
                                        <option>... Parent Category</option>
                                        <?php
                                            $sql="SELECT * FROM categories Order By id ASC";
                                            $result_set=mysqli_query($dbh,$sql);
                                            while($row=mysqli_fetch_array($result_set))
                                            {
                                            ?>
                                            <option><?php echo $row['id']."- ".$row['categoryName']; ?></option>
                                            <?php 
                                                }
                                            ?>
                                    </select>
           
		        </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		          <input type="submit" name="submit" value="Submit Change" class="btn btn-primary">
		        <!--<button type="button" name="send" class="btn btn-primary" onclick="document.getElementById('accCategoryForm').submit();">Save changes</button> -->
		      </div>
          
           </form>
    </div>
  </div>
</div>
                
                <!--END MODAL -->
                
                
                
                
                
            </th>
            </tr>
            <tr style="background: silver;">
            <td>Category ID</td>
            <td>File Name</td>                
            <td>Category Image</td>
            </tr>
            <?php
        	//$sql="SELECT * FROM tbl_uploads";
            $sql="SELECT * FROM categories";

        	$result_set=mysqli_query($dbh,$sql);
        	while($row=mysqli_fetch_array($result_set))
        	{
        		?>
                <tr>
                    <td><?php echo $row['id'] ?></td>                    
                    <td><a href="#"><?php echo $row['categoryName'] ?></a></td>
                    <td><?php //echo $row[''] ?>Category Image coming soon 
                        <button class="btn btn-primary">Update</button>
                        <button class="btn btn-warning" onclick="">Delete</button>
                    </td>
                </tr>
                <?php
        	}
        	?>
            </table>
            
        </div>

    </div>
</div>


</body>
</html>
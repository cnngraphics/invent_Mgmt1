
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Category</h4>
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
 </div>
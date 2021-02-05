<!-- delete -->
<div class="modal fade" id="del<?php echo $row['loan_type_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Delete</h4>
      </div>
      <div class="modal-body">

        Confirm delete? 

      </div>
      <div class="modal-footer">
	  <form id="form1" name="form2" method="post" action="loan_script.php?del=<?php echo $row['loan_type_id'];?>&loan_file_name=<?php echo $row['loan_attachment_name'];?>">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        <input type="submit" name="delete" value="Delete" class="btn btn-warning" required>;
	  </form>
      </div>
    </div>
  </div>
</div>

<!-- edit -->
<div class="modal fade" id="modal<?php echo $row['loan_type_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Upadate Loan </h4>
      </div>
      <div class="modal-body">

       <!-- bodyyyyyyyyyyyy -->
       
       <form id="form1" name="form1" method="post" action="loan_script.php?id=<?php echo $row['loan_type_id'];?>">
        <div class="form-group">
         <label for="exampleInputEmail1"></label>
         <input type="hidden" name="loan_name" value="<?php echo $row['loan_type_name'];?>"class="form-control" id="exampleInputEmail1" placeholder="">
       </div>
       <div class="form-group">
         <label for="exampleInputEmail1">Rate Per Month</label>
         <input type="text" name="loan_rate"  value="<?php echo $row['loan_type_rate'];?>" class="form-control" id="exampleInputEmail1" placeholder="'.$desc.'" required>
       </div>
       <input type="submit" name="update" value="Save Changes" class="btn btn-primary">
     </form>
     
     <!-- bodyyyyyyyyyyyy///// -->
   </div>
   <div class="modal-footer">
    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
  </div>
</div>
</div>
</div>
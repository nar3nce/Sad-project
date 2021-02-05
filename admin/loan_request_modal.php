<!-- accept -->
<div class="modal fade" id="accept<?php echo $row['user_loan_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Accept</h4>
      </div>
      <div class="modal-body">

        Accept this loan request? 

      </div>
      <div class="modal-footer">
	  <form id="form1" name="form2" method="post" action="loan_request_script.php?accept=<?php echo $row['user_loan_id'];?>">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        <input type="submit" name="accept" value="accept" class="btn btn-primary" required>;
	  </form>
      </div>
    </div>
  </div>
</div>

<!-- deny -->
<div class="modal fade" id="deny<?php echo $row['user_loan_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Deny</h4>
      </div>
      <div class="modal-body">

        Deny this loan request? 

      </div>
      <div class="modal-footer">
	  <form id="form1" name="form2" method="post" action="loan_request_script.php?deny=<?php echo $row['user_loan_id'];?>">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        <input type="submit" name="accept" value="deny" class="btn btn-danger" required>;
	  </form>
      </div>
    </div>
  </div>
</div>
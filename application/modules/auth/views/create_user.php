<div class="modal fade" id="modal-users">
  <div class="modal-dialog">
    <div class="modal-content">      
      <?=form_open('auth/create_user', ['id'=>'form_cuser']);?>
      <div class="modal-header">
        <h4 class="modal-title"><?=lang('create_user_heading');?></h4>
        <button type="button" class="close" onclick="location.reload();" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">        
        <p><?=lang('create_user_subheading');?></p>        
        <div class="text-danger" id="infoMessage"><?=$message;?></div>
        <p>
          <?=lang('create_user_fname_label', 'first_name');?> <br />
          <?=form_input($first_name);?>
        </p>
        <p>
          <?php echo lang('create_user_lname_label', 'last_name');?> <br />
          <?php echo form_input($last_name);?>
        </p>
      <?php
      if($identity_column!=='email') {
          echo '<p>';
          echo lang('create_user_identity_label', 'identity');
          echo '<br />';
          echo form_error('identity');
          echo form_input($identity);
          echo '</p>';
      }
      ?>
      <p>
        <?=lang('create_user_company_label', 'company');?> <br />
        <?=form_input($company);?>
      </p>
      <p>
        <?=lang('create_user_email_label', 'email');?> <br />
        <?=form_input($email);?>
      </p>
      <p>
        <?=lang('create_user_phone_label', 'phone');?> <br />
        <?=form_input($phone);?>
      </p>
      <p>
        <?=lang('create_user_password_label', 'password');?> <br />
        <?=form_input($password);?>
      </p>
      <p>
        <?=lang('create_user_password_confirm_label', 'password_confirm');?> <br />
        <?=form_input($password_confirm);?>
      </p>
      </div>
      <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" onclick="location.reload();">Close</button>
        <?=form_submit('submit', lang('create_user_submit_btn'), 'class="btn btn-primary"');?>
      </div>
      <?=form_close();?>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<script>
$("#form_cuser").submit(function(event){
	event.preventDefault(); //prevent default action 
	var post_url = $(this).attr("action"); //get form action url
	var request_method = $(this).attr("method"); //get form GET/POST method
	var form_data = $(this).serialize(); //Encode form elements for submission
	
	$.ajax({
            url : post_url,
            type: request_method,
            data : form_data,
	}).done(function(response){ //          
        if (response) {
          $("#mymodal").html(response);
          $("#modal-users").modal('show');
        } else {
          location.reload();
        }
        
	});
});

</script>



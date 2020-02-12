
<div class="modal fade" id="modal-groups">
  <div class="modal-dialog">
    <div class="modal-content">      
      <?=form_open("auth/create_group", ['id'=>'form_cgroup']);?>
      <div class="modal-header">
        <h4 class="modal-title"><?=lang('create_group_heading');?></h4>
        <button type="button" class="close" onclick="location.reload();" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <p><?=lang('create_group_subheading');?></p>
         <div class="badge badge-danger" id="infoMessage"><?=$message;?></div>
        <p>
          <?php echo lang('create_group_name_label', 'group_name');?> <br />
          <?php echo form_input($group_name);?>
        </p>
        <p>
          <?php echo lang('create_group_desc_label', 'description');?> <br />
          <?php echo form_input($description);?>
        </p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" onclick="location.reload();">Close</button>
        <?=form_submit('submit', lang('create_group_submit_btn'), 'class="btn btn-primary"');?>
      </div>
      <?=form_close();?>
    </div>
  </div>
</div>

<script>
  $("#form_cgroup").submit(function(event){
	event.preventDefault(); //prevent default action 
	var post_url = $(this).attr("action"); //get form action url
	var request_method = $(this).attr("method"); //get form GET/POST method
	var form_data = $(this).serialize(); //Encode form elements for submission
	
	$.ajax({
		url : post_url,
		type: request_method,
		data : form_data
	}).done(function(response){ 
        if (response) {
          $("#mymodal").html(response);
          $("#modal-groups").modal('show');
        } else {
          location.reload();
        }
        
	});
  });  
</script>
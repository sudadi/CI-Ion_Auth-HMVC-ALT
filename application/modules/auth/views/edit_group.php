
<div class="modal fade" id="modal-groups">
  <div class="modal-dialog">
    <div class="modal-content">
        <?=form_open("auth/edit_group/".$group->id, ['id'=>'form_egroup']);?>
      <div class="modal-header">
        <h4 class="modal-title"><?=lang('edit_group_heading');?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">         
        
        <p><?=lang('edit_group_subheading');?></p>
        <p>
              <?=lang('edit_group_name_label', 'group_name');?> <br />
              <?=form_input($group_name);?>
        </p>
        <p>
              <?=lang('edit_group_desc_label', 'description');?> <br />
              <?=form_input($group_description);?>
        </p>

      </div>
      <div class="modal-footer">
        <p><?=form_submit('submit', lang('edit_group_submit_btn'), 'class="btn btn-primary"');?></p>
      </div>
        <?=form_close();?>
    </div>
  </div>
</div>

<script>
  $("#form_egroup").submit(function(event){
	event.preventDefault(); //prevent default action 
	var post_url = $(this).attr("action"); //get form action url
	var request_method = $(this).attr("method"); //get form GET/POST method
	var form_data = $(this).serialize(); //Encode form elements for submission
	
	$.ajax({
		url : post_url,
		type: request_method,
		data : form_data
	}).done(function(response){ 
        location.reload();
        
	});
  });  
</script>
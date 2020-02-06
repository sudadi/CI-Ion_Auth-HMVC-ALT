

<div class="modal-dialog">
  <div class="modal-content">
      <?=form_open("auth/edit_group/".$group->id);?>
    <div class="modal-header">
      <h4 class="modal-title"><?=lang('edit_group_heading');?></h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body"> 
      <p><?=lang('edit_group_subheading');?></p>
      <div id="infoMessage"><?=$message;?></div>
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
      <p><?=form_submit('submit', lang('edit_group_submit_btn'));?></p>
    </div>
      <?=form_close();?>
  </div>
</div>

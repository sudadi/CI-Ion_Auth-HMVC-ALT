
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title"><?=lang('create_group_heading');?></h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <p><?=lang('create_group_subheading');?></p>
      <?php echo form_open("auth/create_group");?>
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
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <?=form_submit('submit', lang('create_group_submit_btn'), 'class="btn btn-primary"');?>
    </div>
  </div>
</div>

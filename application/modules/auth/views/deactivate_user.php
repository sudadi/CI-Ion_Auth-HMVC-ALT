<div class="modal fade" id="modal-users">
  <div class="modal-dialog">
    <div class="modal-content"> 
      <?=form_open("auth/deactivate/".$user->id);?>
      <div class="modal-header">
        <h4 class="modal-title"><?=lang('deactivate_heading');?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
        <p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>
        <p>
        <?php echo lang('deactivate_confirm_y_label', 'confirm');?>
        <input type="radio" name="confirm" value="yes" checked="checked" />
        <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
        <input type="radio" name="confirm" value="no" />
        </p>
        <?php echo form_hidden($csrf); ?>
        <?php echo form_hidden(['id' => $user->id]); ?>
      </div>
      <div class="modal-footer">
        <p><?php echo form_submit('submit', lang('deactivate_submit_btn'), 'class="btn btn-primary"');?></p>
      </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>
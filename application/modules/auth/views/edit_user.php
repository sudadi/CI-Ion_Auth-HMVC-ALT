
<div class="modal-dialog">
  <div class="modal-content">      
    <?=form_open("auth/edit_user");?>
    <div class="modal-header">
      <h4 class="modal-title"><?=lang('edit_user_heading');?></h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <p><?=lang('edit_user_subheading');?></p>
      <div id="infoMessage"><?=$message;?></div>
      <p>
        <?=lang('edit_user_fname_label', 'first_name');?> <br />
        <?=form_input($first_name);?>
      </p>
      <p>
        <?=lang('edit_user_lname_label', 'last_name');?> <br />
        <?=form_input($last_name);?>
      </p>
      <p>
        <?=lang('edit_user_company_label', 'company');?> <br />
        <?=form_input($company);?>
      </p>
      <p>
        <?=lang('edit_user_phone_label', 'phone');?> <br />
        <?=form_input($phone);?>
      </p>
      <p>
        <?=lang('edit_user_password_label', 'password');?> <br />
        <?=form_input($password);?>
      </p>
      <p>
        <?=lang('edit_user_password_confirm_label', 'password_confirm');?><br />
        <?=form_input($password_confirm);?>
      </p>
    </div>

    <?php if ($this->ion_auth->is_admin()): ?>
    <div class="form-group pl-2">
      <h4><?=lang('edit_user_groups_heading');?></h4>
      <?php foreach ($groups as $group):?>
        <label class="checkbox">
        <?php
          $gID=$group['id'];
          $checked = null;
          $item = null;
          foreach($currentGroups as $grp) {
            if ($gID == $grp->id) {
              $checked= ' checked="checked"';
            break;
            }
          }
        ?>
          <input type="checkbox" name="groups[]" value="<?=$group['id'];?>"<?=$checked;?>>
          <?=htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
          </label>
        <?php endforeach?>

      <?php endif ?>

      <?=form_hidden('id', $user->id);?>
      <?=form_hidden($csrf); ?>
    </div>

    <p><?=form_submit('submit', lang('edit_user_submit_btn'));?></p>

    <?=form_close();?>
  </div>
</div>

      

      

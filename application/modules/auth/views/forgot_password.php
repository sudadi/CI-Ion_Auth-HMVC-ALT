<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

echo form_open("auth/forgot_password",'class="login100-form validate-form"');?>
  <span class="login100-form-title p-b-43">
    <?=lang('forgot_password_heading');?>
  </span>
  <p><?=sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
  <div id="infoMessage"><?=$message;?></div>

  <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
      <?=form_input($identity,'','class="input100"');?>
      <span class="focus-input100"></span>
      <span class="label-input100">
        <?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?>
      </span>
  </div>
  <div class="container-login100-form-btn">
    <?=form_submit('submit', lang('forgot_password_submit_btn'),'class="login100-form-btn"');?>  
  </div>
<?=form_close();?>
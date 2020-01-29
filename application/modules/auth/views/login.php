<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

echo form_open("auth/login",'class="login100-form validate-form"');?>
  <span class="login100-form-title p-b-43">
    <?=lang('login_heading');?>
  </span>
  <p><?=lang('login_subheading');?></p>
  <div id="infoMessage" class="alert-default-danger"><?=$message;?></div>

  <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
      <?=form_input($identity,'','class="input100"');?>
      <span class="focus-input100"></span>
      <span class="label-input100"><?=lang('login_identity_label');?></span>
  </div>

  <div class="wrap-input100 validate-input" data-validate="Password is required">
      <?=form_input($password,'','class="input100"');?>
      <span class="focus-input100"></span>
      <span class="label-input100"><?=lang('login_password_label');?></span>
  </div>
  
  
  <div class="flex-sb-m w-full p-t-3 p-b-32">
      <div class="contact100-form-checkbox">
          <?=form_checkbox('remember', '', FALSE, 'id="remember" class="input-checkbox100"');?>
          <label class="label-checkbox100" for="remember">
              <?=lang('login_remember_label');?>
          </label>
      </div>

      <div>
          <a href="forgot_password"><?=lang('login_forgot_password');?></a>
      </div>
  </div>

  <div class="container-login100-form-btn">
    <?=form_submit('submit', lang('login_submit_btn'),'class="login100-form-btn"');?>  
  </div>
<?=form_close();?>
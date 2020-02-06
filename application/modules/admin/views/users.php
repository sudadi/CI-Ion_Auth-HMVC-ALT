<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header border-transparent">
        <h3 class="card-title"><?php echo lang('index_subheading');?></h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive p-0">
          <table class="table table-striped m-0">
            <tr>
              <th><?php echo lang('index_fname_th');?></th>
              <th><?php echo lang('index_lname_th');?></th>
              <th><?php echo lang('index_email_th');?></th>
              <th><?php echo lang('index_groups_th');?></th>
              <th><?php echo lang('index_status_th');?></th>
              <th><?php echo lang('index_action_th');?></th>
            </tr>
            <?php foreach ($users as $user):?>
            <tr>
              <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
              <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
              <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
              <td>
                <?php foreach ($user->groups as $group):?>
                  <?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                <?php endforeach?>
              </td>
              <td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
              <td><a href="#" onclick="edituser('<?=$user->id;?>');">Edit</a></td>
            </tr>
            <?php endforeach;?>
          </table>
        </div>
      </div>
      <div class="card-footer">
        <a href="#" id="adduser" onclick="adduser()" class="btn btn-sm btn-info"><i class="fas fa-user-plus"></i> <?=lang('index_create_user_link');?></a>
        <a href="#" id="addgroup" onclick="addgroup()" class="btn btn-sm btn-primary"><i class="fas fa-user-friends"></i> <?=lang('index_create_group_link');?></a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-users"></div>

<script>
  function adduser(){
    $.ajax({
      url : "<?php echo base_url('auth/create_user')?>",
      type: "GET",
      dataType: "HTML",
      success: function(data)
      {
        $("#modal-users").html(data);
        $("#modal-users").modal();
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        alert('Error : Data tidak ditemukan..!');
        location.reload();
      }
    });
  };
  
  function edituser(id){
    $.ajax({
      url : "<?php echo base_url('auth/edit_user/')?>"+id,
      type: "GET",
      dataType: "HTML",
      success: function(data)
      {
        $("#modal-users").html(data);
        $("#modal-users").modal();
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        alert('Error : Data tidak ditemukan..!');
        location.reload();
      }
    });
  }
  
  function addgroup(){
    $.ajax({
      url : "<?php echo base_url('auth/create_group')?>",
      type: "GET",
      dataType: "HTML",
      success: function(data)
      {
        $("#modal-users").html(data);
        $("#modal-users").modal();
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        alert('Error : Data tidak ditemukan..!');
        location.reload();
      }
    });
  };
</script>


<p><?php //echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php //echo anchor('auth/create_group', lang('index_create_group_link'))?></p>
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
                  <?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8') ;?><br />
                <?php endforeach?>
              </td>
              <td><a href="javascript: void(0)" onclick="userman(2, '<?=$user->id;?>','<?=$user->active;?>');"><?=($user->active) ? lang('index_active_link') : lang('index_inactive_link');?></a></td>
              <td><a href="javascript: void(0)" onclick="userman(1, '<?=$user->id;?>');">Edit</a></td>
            </tr>
            <?php endforeach;?>
          </table>
        </div>
      </div>
      <div class="card-footer">
        <a href="javascript: void(0)" id="adduser" onclick="userman()" class="btn btn-sm btn-info"><i class="fas fa-user-plus"></i> <?=lang('index_create_user_link');?></a>
        
      </div>
    </div>
  </div>
</div>
<div id="mymodal"></div>
<script>
  function userman(type, id, status) {
    var url = "<?php echo base_url('auth/create_user');?>";
    if (type == 1) { 
      url = "<?php echo base_url('auth/edit_user/')?>"+id; 
    } else if (type == 2) {
      if (status != 0) {
        url = "<?=base_url('auth/deactivate/');?>"+id; 
      } else {
        url = "<?=base_url('auth/activate/');?>"+id; 
      }
    }
    
    $.ajax({
      url : url,
      type : "GET",
      dataType : "HTML",
      success : function(data)
      {
        if (status == 0)  {
          location.reload()
        } else {
          $("#mymodal").html(data);
          $("#modal-users").modal('show');
        }
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        alert('Error : Data tidak ditemukan..!');
        location.reload();
      }
    })
  }

</script>
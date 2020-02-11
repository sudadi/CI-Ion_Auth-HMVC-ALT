<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header border-transparent">
        <h3 class="card-title"><?=lang('groups_subheading');?></h3>
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
              <th><?=lang('groups_id_th');?></th>
              <th><?=lang('groups_name_th');?></th>
              <th><?=lang('group_desc_th');?></th>
              <th><?=lang('index_action_th');?></th>
            </tr>
            <?php foreach ($groups as $group):?>
            <tr>
              <td><?=$group->id;?></td>
              <td><?=htmlspecialchars($group->name,ENT_QUOTES,'UTF-8');?></td>
              <td><?=htmlspecialchars($group->description,ENT_QUOTES,'UTF-8');?></td>
              <td><a href="javascript: void(0)" onclick="groupman('<?=$group->id;?>');">Edit</a></td>
            </tr>
            <?php endforeach;?>
          </table>
        </div>
      </div>
      <div class="card-footer">
        <a href="javascript: void(0)" id="addgroup" onclick="groupman()" class="btn btn-sm btn-primary"><i class="fas fa-user-friends"></i> <?=lang('index_create_group_link');?></a>
      </div>
    </div>
  </div>
</div>
<div id="mymodal"></div>

<script>  
  function groupman(id){
    if (id) {
      var url = "<?=base_url('auth/edit_group/')?>"+id;
    } else {
      var url = "<?=base_url('auth/create_group/')?>";
    }
    
    $.ajax({
      url : url,
      type: "GET",
      dataType: "HTML",
      success: function(data)
      {
        $("#mymodal").html(data);
        $("#modal-groups").modal();
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        alert('Error : Data tidak ditemukan..!');
        location.reload();
      }
    });
  }
  
</script>
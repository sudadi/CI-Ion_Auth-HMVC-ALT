<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
     <li class="nav-item">
        <a href="<?=base_url();?>" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>Dashboard </p>
        </a>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-users"></i>
          <p>
            Manajer User
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?=base_url('admin/groups');?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Grup</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('admin/users');?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>User</p>
            </a>
          </li>
        </ul>
      </li>
  </ul>
</nav>
<!-- /.sidebar-menu -->
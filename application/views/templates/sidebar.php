    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('home'); ?>">
        <div class="sidebar-brand-icon">
          <i class="fas fa-mosque"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Jami Assalam</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Pengaturan Menu Sidebar -->
      <?php
      $role_id = $this->session->userdata('role_id');
      $queryMenu = "SELECT `tbl_user_menu`.`id`, `menu`
                      FROM `tbl_user_menu` JOIN `tbl_user_access_menu`
                        ON `tbl_user_menu`.`id` = `tbl_user_access_menu`.`menu_id`
                     WHERE `tbl_user_access_menu`.`role_id` = $role_id
                  ORDER BY `tbl_user_access_menu`.`menu_id` ASC
                  ";
      $menu = $this->db->query($queryMenu)->result_array();
      ?>

      <!-- looping Menu -->
      <?php foreach ($menu as $m) : ?>
        <!-- heading -->
        <div class="sidebar-heading text-white">
          <?= $m['menu']; ?>
        </div>


        <!-- Looping sub menu -->
        <?php
        $menuId = $m['id'];
        $querySubMenu = "SELECT * FROM `tbl_user_sub_menu`
                          WHERE `menu_id` = $menuId 
                          AND `is_active` = 1";
        $subMenu = $this->db->query($querySubMenu)->result_array();
        ?>
        <?php foreach ($subMenu as $sm) : ?>
          <?php if ($judul == $sm['title']) : ?>
            <li class="nav-item active bg-gradient-success">
            <?php else : ?>
            <li class="nav-item">
            <?php endif; ?>
            <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
              <i class="<?= $sm['icon']; ?>"></i>
              <span><?= $sm['title']; ?></span></a>
            </li>

          <?php endforeach; ?>
          <hr class="sidebar-divider d-none d-md-block mt-2">

        <?php endforeach; ?>


        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <!-- End of Sidebar -->
<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <img src="<?php echo base_url() ?>assets/images/logo.svg" alt="" srcset="">
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class='sidebar-title'>Main Menu</li>
                <li class="sidebar-item">
                    <a href="<?php echo base_url('admin') ?>" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo base_url('admin/shownasabah') ?>" class='sidebar-link'>
                        <i data-feather="grid" width="20"></i>
                        <span>Daftar Nasabah</span>
                    </a>
                </li>
                <?php if ($this->session->userdata('role_id') == 2) { ?>
                    <li class="sidebar-item">
                        <a href="<?php echo base_url('admin/showcs') ?>" class='sidebar-link'>
                            <i data-feather="grid" width="20"></i>
                            <span>Daftar Customer Service</span>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($this->session->userdata('role_id') == 1) { ?>
                    <li class="sidebar-item">
                        <a href="<?php echo base_url('admin/all') ?>" class='sidebar-link'>
                            <i data-feather="grid" width="20"></i>
                            <span>Daftar User</span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
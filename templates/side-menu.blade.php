<ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <li class="sidebar-toggler-wrapper hide">
        <div class="sidebar-toggler">
            <span></span>
        </div>
    </li>
    <!-- END SIDEBAR TOGGLER BUTTON -->
    <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->

    <?php if ($_SESSION['user']['role'][0] == '2'||$_SESSION['user']['role'][0] == '3') : ?>
        <!-- <li class="nav-item">
            <a href="<?php echo URL::site('#') ?>" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title">My Profil</span>
            </a>
        </li> -->
        <li class="nav-item">
            <a href="<?php echo URL::site('pekerjaan') ?>" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title">Daftar Pekerjaan</span>
            </a>
        </li>
    <?php endif ?>
    <?php if ($_SESSION['user']['role'][0] == '6') : ?>
       <!--  <li class="nav-item">
            <a href="<?php echo URL::site('#') ?>" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title">My Profil</span>
            </a>
        </li> -->
        <li class="nav-item">
            <a href="<?php echo URL::site('pekerjaan') ?>" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title">Progress</span>
            </a>
        </li>
    <?php endif ?>
    <?php if ($_SESSION['user']['role'][0] == '5') : ?>
        <!--  <li class="nav-item start">
            <a href="<?php echo URL::site() ?>" class="nav-link nav-toggle">
                <i class="icon-home"></i>
                <span class="title">Dashboard</span>
                <span class="selected"></span> -->
                <!-- <span class="arrow open"></span> -->
            <!-- </a> -->
        </li>
        <li class="nav-item  ">
            <a href="<?php echo URL::site('user'); ?>" class="nav-link nav-toggle">
                <i class="icon-user"></i>
                <span class="title">User</span>
            </a>
        </li>
        <li class="heading">
            <h3 class="uppercase">Features</h3>
        </li>
        <li class="nav-item">
            <a href="<?php echo URL::site('pekerjaan') ?>" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title">Pekerjaan</span>
            </a>
        </li>
         <li class="nav-item">
            <a href="<?php echo URL::site('status') ?>" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title">Status</span>
            </a>
        </li>
        <li class="heading">
            <h3 class="uppercase">System</h3>
        </li>
        <li class="nav-item  ">
            <a href="<?php echo URL::site('role'); ?>" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                <span class="title">Role</span>
            </a>
        </li>

        <li class="nav-item  ">
            <a href="<?php echo URL::site('previleges'); ?>" class="nav-link nav-toggle">
                <i class="icon-docs"></i>
                <span class="title">Previleges</span>
            </a>
        </li>

       <!--  <li class="nav-item  ">
            <a href="<?php echo URL::site('sysparam'); ?>" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                <span class="title">System Parameter</span>
            </a>
        </li> -->
    <?php endif ?>

   
   
</ul>
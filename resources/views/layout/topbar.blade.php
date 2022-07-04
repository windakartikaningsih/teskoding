<!-- Top Bar Start -->
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="<?= asset('dashboardApps') ?>" class="logo">
            <span>
                <i class="mdi mdi-file-multiple text-primary" style="font-size: 1.5em;"></i>&nbsp; <b style="color:white;">Web</b>
            </span>
        </a>
    </div>
    <!--end logo-->
    <!-- Navbar -->
    <nav class="navbar-custom">
        <ul class="list-unstyled topbar-nav float-right mb-0">
            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <div class='avatar-box thumb-sm align-self-center mr-2'>
                        <span class='avatar-title  rounded-circle bg-dark'><i class='fas fa-user'></i></span>
                    </div>
                    <span class="ml-1 nav-user-name hidden-sm">Winda Kartika Ningsih <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <span class="dropdown-item"><i class="dripicons-user text-muted mr-2"></i> IT Analyst</span>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg"><i class="dripicons-gear text-muted mr-2"></i> Change Password</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                </div>
            </li>
        </ul><!--end topbar-nav-->

        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <button class="button-menu-mobile nav-link waves-effect waves-light">
                    <i class="dripicons-menu nav-icon"></i>
                </button>
            </li>
        </ul>
    </nav>
    <!-- end navbar-->
</div>
<!-- Top Bar End -->

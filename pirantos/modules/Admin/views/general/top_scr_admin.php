<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Unmer - Administrator</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description"
            content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
        <meta name="keywords"
            content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template">
        <meta name="author" content="Codedthemes" />
        <link rel="icon" href="<?php echo base_url() ?>prabotan/image/logo/unmerbaya.png" type="image/x-icon">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <script src="<?php echo base_url() ?>prabotan/js/jquery-2.2.3.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
            integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet"
            href="<?php echo base_url() ?>prabotan/admin/fonts/fontawesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>prabotan/admin/plugins/animation/css/animate.min.css">
        <link rel="stylesheet"
            href="<?php echo base_url() ?>prabotan/admin/plugins/notification/css/notification.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>prabotan/admin/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>prabotan/admin/css/custom-astro.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>prabotan/admin/plugins/data-tables/css/datatables.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>prabotan/admin/plugins/pnotify/css/pnotify.custom.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>prabotan/admin/css/pages/pnotify.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>prabotan/css/form_generator.css">
    </head>

    <body>
        <div class="loader_body loading">
            <div class="loader">
                <div class="loader__ball"></div>
                <div class="loader__ball"></div>
                <div class="loader__ball"></div>
            </div>
        </div>
        <!-- <?php 
    $uri1 = $this->uri->segment(2);
    $uri2 = $this->uri->segment(3); 
    ?> -->
        <div class="loader-bg">
            <div class="loader-track">
                <div class="loader-fill"></div>
            </div>
        </div>
        <nav class="pcoded-navbar">
            <div class="navbar-wrapper">
                <div class="navbar-brand header-logo">
                    <a href="default/index.html" class="b-brand">
                        <div class="b-bg">
                            <img src="<?php echo base_url() ?>prabotan/image/logo/unmerbaya.png" width="130%">
                        </div>
                        <span class="b-title">Admin</span>
                    </a>
                    <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
                </div>
                <div class="navbar-content scroll-div">
                    <ul class="nav pcoded-inner-navbar">
                        <li data-username="Dashboard"
                            class="nav-item <?php if($uri1 == 'dashboard'){ echo 'active'; } ?>">
                            <a href="<?php echo base_url('admin/dashboard') ?>" class="nav-link">
                                <span class="pcoded-micon"><i class="feather icon-home"></i></span><span
                                    class="pcoded-mtext">Dashboard</span>
                            </a>
                        </li>

                       <!--  <?php 
                    $admin_auth = $this->session->userdata('admin_auth'); 
                    if ($admin_auth->privilege == 'Super Admin' || $admin_auth->privilege == 'Super User') { ?>
                        <li data-username="Users" class="nav-item <?php if($uri1 == 'users'){ echo 'active'; } ?>">
                            <a href="<?php echo base_url('admin/users') ?>" class="nav-link">
                                <span class="pcoded-micon"><i class="feather icon-user-plus"></i></span><span
                                    class="pcoded-mtext">Users</span>
                            </a>
                        </li>
                        <?php 
                       }
                    
                    ?> -->
                        <li data-username="USERS"
                            class="nav-item <?php if($uri1 == 'users'){ echo 'active'; } ?>">
                            <a href="<?php echo base_url('admin/users') ?>" class="nav-link">
                                <span class="pcoded-micon"><i class="feather icon-user-plus"></i></span><span
                                    class="pcoded-mtext">Users</span>
                            </a>
                        </li>

                        <li data-username="Members" class="nav-item <?php if($uri1 == 'members'){ echo 'active'; } ?>">
                            <a href="<?php echo base_url('admin/members') ?>" class="nav-link">
                                <span class="pcoded-micon"><i class="feather icon-users"></i></span><span
                                    class="pcoded-mtext">Members</span>
                            </a>
                        </li>

                        <li data-username="Calon Mahasiswa"
                            class="nav-item <?php if($uri1 == 'calon_mahasiswa'){ echo 'active'; } ?>">
                            <a href="<?php echo base_url('admin/calon_mahasiswa') ?>" class="nav-link">
                                <span class="pcoded-micon"><i class="feather icon-user"></i></span><span
                                    class="pcoded-mtext">Calon Mahasiswa</span>
                            </a>
                        </li>

                        <li data-username="Bank Soal"
                            class="nav-item <?php if($uri1 == 'bank_soal'){ echo 'active'; } ?>">
                            <a href="<?php echo base_url('admin/bank_soal') ?>" class="nav-link">
                                <span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span
                                    class="pcoded-mtext">Bank Soal</span>
                            </a>
                        </li>

                        <li data-username="Persyaratan" class="nav-item <?php if($uri1 == 'persyaratan'){ echo 'active'; } ?>">
                            <a href="<?php echo base_url('admin/persyaratan') ?>" class="nav-link">
                                <span class="pcoded-micon"><i class="feather icon-user-check"></i></span><span
                                    class="pcoded-mtext">Persyaratan</span>
                            </a>
                        </li>

                        <li data-username="Information"
                            class="nav-item <?php if($uri1 == 'information'){ echo 'active'; } ?>">
                            <a href="<?php echo base_url('admin/information') ?>" class="nav-link">
                                <span class="pcoded-micon"><i class="feather icon-info"></i></span><span
                                    class="pcoded-mtext">Information</span>
                            </a>
                        </li>

                        <li data-username="Saran" class="nav-item <?php if($uri1 == 'saran'){ echo 'active'; } ?>">
                            <a href="<?php echo base_url('admin/saran') ?>" class="nav-link">
                                <span class="pcoded-micon"><i class="feather icon-mail"></i></span><span
                                    class="pcoded-mtext">Saran dan Masukan</span>
                            </a>
                        </li>

                        <li data-username="CONTACT US" class="nav-item <?php if($uri1 == 'contact'){ echo 'active'; } ?>">
                            <a href="<?php echo base_url('admin/contact') ?>" class="nav-link">
                                <span class="pcoded-micon"><i class="feather icon-mail"></i></span><span
                                    class="pcoded-mtext">Contact Us</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="navbar pcoded-header navbar-expand-lg navbar-light">
            <div class="m-header">
                <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
                <a href="default/index.html" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title">Astro Admin</span>
                </a>
            </div>
            <a class="mobile-menu" id="mobile-header" href="javascript:">
                <i class="feather icon-more-horizontal"></i>
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i
                                class="feather icon-maximize"></i></a></li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown"
                            aria-expanded="false">Account</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="<?php echo base_url('authenticate/change_password') ?>">Change Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <div class="main-search">
                            <div class="input-group">
                                <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                                <a href="javascript:" class="input-group-append search-close">
                                    <i class="feather icon-x input-group-text"></i>
                                </a>
                                <span class="input-group-append search-btn btn btn-primary">
                                    <i class="feather icon-search input-group-text"></i>
                                </span>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li>
                        <div class="dropdown">
                            <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon feather icon-settings"></i>
                            </a>
                            <?php 
                         $admin_auth = $this->session->userdata('admin_auth'); 
                        ?>
                            <div class="dropdown-menu dropdown-menu-right profile-notification">
                                <div class="pro-head">
                                    <img src="<?php echo base_url() ?>prabotan/admin/images/user/avatar-2.jpg"
                                        class="img-radius" alt="User-Profile-Image">
                                    <span>
                                         <?php 
                                         echo $admin_auth->name ?>
                                    </span>
                                    <a href="<?php echo base_url('authenticate/logout') ?>" class="dud-logout"
                                        title="Logout">
                                        <i class="feather icon-log-out"></i>
                                    </a>
                                </div>
                                <ul class="pro-body">
                                    <li><a href="javascript:" class="dropdown-item">Hai, Have a nice day..</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <section class="header-user-list">
            <div class="h-list-header">
                <div class="input-group">
                    <input type="text" id="search-friends" class="form-control" placeholder="Search Friend . . .">
                </div>
            </div>
            <div class="h-list-body">
                <a href="javascript:" class="h-close-text"><i class="feather icon-chevrons-right"></i></a>
                <div class="main-friend-cont scroll-div">
                    <div class="main-friend-list">
                    </div>
                </div>
            </div>
        </section>
        <!-- [ chat user list ] end -->

        <!-- [ chat message ] start -->
        <section class="header-chat">

            <div class="h-list-body">
                <div class="main-chat-cont scroll-div">
                    <div class="main-friend-chat">
                    </div>
                </div>
            </div>


            <div class="h-list-footer">
                <div class="input-group">
                    <input type="file" class="chat-attach" style="display:none">
                    <a href="javascript:" class="input-group-prepend btn btn-success btn-attach">
                        <i class="feather icon-paperclip"></i>
                    </a>
                    <input type="text" name="h-chat-text" class="form-control h-send-chat"
                        placeholder="Write hear . . ">
                    <button type="submit" class="input-group-append btn-send btn btn-primary">
                        <i class="feather icon-message-circle"></i>
                    </button>
                </div>
            </div>
        </section>

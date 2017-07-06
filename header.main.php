<body class="preload">
    <?php
    include_once 'rights_check.php';
    ?>
    <div id="top-alert"
         class="alert alert-promo alert-dismissible fade in text-center"
         role="alert" style="display: none">
        <span id="top-alert-close" aria-hidden="true"
              class="icon icon_close close"></span> <strong>Welcome to Weattach
            CRM!</strong> Your trial will run out in 30 days <a
            class="btn btn-success btn-sm margin-left-sm" href="pricing.html">Upgrade
            Now</a>
    </div>
    <header class="header">
        <div class="branding float-left">
            <h1 class="logo text-center">
                <a href="index.php"><span class="nav-label"> W<span
                            class="highlight">A</span>TR
                    </span> </a>
            </h1>
        </div>

        <div class="topbar">
            <?php include_once 'header/toggleSidebar.php'; ?>
                <?php include_once 'header/searchBar.php'; ?>
            <div class="navbar-tools">
<?php include_once 'header/topbar.utilities.php'; ?>
                <div class="user-container dropdown">
                    <div class="dropdown-toggle" id="dropdownMenu-user"
                         data-toggle="dropdown" aria-expanded="true" role="button">
                        <i class="fa fa-caret-down"></i>
                    </div>
                    <ul class="dropdown-menu" role="menu"
                        aria-labelledby="dropdownMenu-user">
                        <li><span class="arrow"></span><a role="menuitem"
                                                          href="UserDetail.php?u=<?php echo encryptor('encrypt', $_SESSION ['userid']); ?>"><span
                                    class="pe-icon pe-7s-user icon"></span>My Account</a></li>
                        <li><a role="menuitem" href="login.php?t=signout"><span
                                    class="pe-icon pe-7s-power icon"></span>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
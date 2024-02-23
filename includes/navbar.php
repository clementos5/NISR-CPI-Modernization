       <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header" style="background:#005091;">
                <button class="navbar-toggler" style ="background: blue !important;" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- <a class="navbar-brand" href="./"><img src="images/CPI1.png" alt="Logo"></a> -->
                <!-- <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a> -->
                <a class="navbar-brand" href="./">
                    <img src="images/cpi-image.png" alt="Logo" style="max-height: 100px;">
                </a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                     <li>
                        <a href="live_data.php"><i class="menu-icon fa fa-table"></i>Live Data </a>
                    </li>
                    <h3 class="menu-title">CPI Menus</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>ADMINISTRATION</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-user"></i><a href="users.php">Users</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="#">Assign Roles</a></li>
                            <li><i class="fa fa-bars"></i><a href="outlet.php">Outlet</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="item.php">Item</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="#">Roles & Privileges</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>COICOP</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="#">Division</a></li>
                            <li><i class="fa fa-table"></i><a href="#">Group</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="#">Class</a></li>
                            <li><i class="fa fa-spinner"></i><a href="#">Sub-Class</a></li>
                            <li><i class="fa fa-fire"></i><a href="#">Micro Class</a></li>
                            <li><i class="fa fa-book"></i><a href="#">Elemantary Aggregate</a></li>
                            <li><i class="fa fa-th"></i><a href="#">HCPI Category</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="#">Elementary Aggregate Weights</a></li>
                            <li><i class="fa fa-spinner"></i><a href="#">Elementary Aggregate Indices</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="menu-icon fa fa-globe"></i> LOCATION
                  </a>
                     <ul class="sub-menu children dropdown-menu">
                         <li><i class="menu-icon fa fa-globe"></i><a href="#">Province</a></li>
                         <li><i class="menu-icon fa fa-map-marker"></i><a href="#">Districts</a></li>
                         <li><i class="menu-icon fa fa-building"></i><a href="#">Sectors</a></li>
                         <li><i class="menu-icon fa fa-street-view"></i><a href="#">Cells</a></li>
                         <li><i class="menu-icon fa fa-home"></i><a href="#">Villages</a></li>
                      </ul>
                    </li>

                      <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cube"></i>ITEMS</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-cube"></i><a href="item.php">Items</a></li>
                        <li><i class="fa fa-info-circle"></i><a href="#">Item Specification</a></li>
                        <li><i class="fa fa-shopping-cart"></i><a href="#">Outlet Items</a></li>
                        <li><i class="fa fa-money"></i><a href="#">Item Price Data</a></li>
                        <li><i class="fa fa-cog"></i><a href="#">Configuration</a></li>
                    </ul>
                   </li>

                    <li class="menu-item-has-children dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
        <i class="menu-icon fa fa-cubes"></i>OUTLETS</a>
    <ul class="sub-menu children dropdown-menu">
        <li><i class="fa fa-tags"></i><a href="outlet.php">Outlets</a></li>
        <li><i class="fa fa-tags"></i><a href="#">Outlets Types</a></li>
        <li><i class="fa fa-tags"></i><a href="#">Consumption Segments</a></li>
        <li><i class="fa fa-cubes"></i><a href="#">Outlet Items</a></li>
        <li><i class="fa fa-tags"></i><a href="#">Price Relatives</a></li>
        <li><i class="fa fa-database"></i><a href="#">Items Price Data</a></li>
        <li><i class="fa fa-calculator"></i><a href="#">Compute Price Relatives</a></li>
        <li><i class="fa fa-cogs"></i><a href="#">Configuration</a></li>
    </ul>
</li>
<li class="menu-item-has-children dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-clone"></i>DATA COLLECTIONS</a>
    <ul class="sub-menu children dropdown-menu">
        <li><i class="fa fa-table"></i><a href="#">Data Collections</a></li>
        <li><i class="fa fa-clone"></i><a href="#">Dashboard</a></li>
        <li><i class="fa fa-list-alt"></i><a href="#">Price Collection Codes</a></li>
        <li><i class="fa fa-question"></i><a href="#">Questionnaire Indices</a></li>
    </ul>
</li>
<li class="menu-item-has-children dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
        <i class="menu-icon fa fa-th"></i>PRICE SHEETS</a>
    <ul class="sub-menu children dropdown-menu">
        <li><i class="fa fa-clone"></i><a href="#">Basket Elementary Aggregate Indices</a></li>
        <li><i class="fa fa-clone"></i><a href="#">Basket Elementary Aggregate Composite Indices</a></li>
    </ul>
</li>
<li class="menu-item-has-children dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
        <i class="menu-icon fa fa-table"></i>REPORTS</a>
    <ul class="sub-menu children dropdown-menu">
        <li><i class="fa fa-clone"></i><a href="#">Data Collectors Report</a></li>
        <li><i class="fa fa-clone"></i><a href="#">Dataset Report</a></li>
        <li><i class="fa fa-cogs"></i><a href="#">Processing Report</a></li>
        <li><i class="fa fa-cogs"></i><a href="#">Graphs Report</a></li>
        <li><i class="fa fa-cog"></i><a href="#">Visualization</a></li>
        <li><i class="fa fa-file"></i><a href="#">Publish Index Report</a></li>
        <li><i class="fa fa-list"></i><a href="#">Threshold Report</a></li>
        <li><i class="fa fa-list"></i><a href="#">Outliers Listing Report</a></li>
        <li><i class="fa fa-tasks"></i><a href="#">Quality Assurance Report</a></li>
    </ul>
</li>
<li class="menu-item-has-children dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
        <i class="menu-icon fa fa-file"></i>PAPER FORMS</a>
    <ul class="sub-menu children dropdown-menu">
        <li><i class="fa fa-clone"></i><a href="#">Mobile Form</a></li>
        <li><i class="fa fa-users"></i><a href="#">Enumerators Form</a></li>
        <li><i class="fa fa-file"></i><a href="#">All Forms</a></li>
    </ul>
</li>
<li class="menu-item-has-children dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cog"></i>SYSTEMS</a>
    <ul class="sub-menu children dropdown-menu">
        <li><i class="fa fa-save"></i><a href="#">Backup files</a></li>
        <li><i class="fa fa-history"></i><a href="#">User logs</a></li>
        <li><i class="fa fa-upload"></i><a href="#">Upgrade</a></li>
    </ul>
</li>


                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

<!--                         <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red"> Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div> -->

<!--                         <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div> -->
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="login.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-rw"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->



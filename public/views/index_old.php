<!doctype html>
<html lang="en" ng-app="RobustWealthApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Robust Wealth</title>
    <!-- STYLES -->
    <!-- build:css lib/css/main.min.css -->

    <!-- endbuild -->
    <!-- SCRIPTS -->
    <!-- build:js lib/js/main.min.js -->
    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/1.0.3/ui-bootstrap-tpls.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-cookie/4.1.0/angular-cookie.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.3.2/angular-ui-router.min.js"></script>
    <!-- endbuild -->
    <!-- Custom Scripts -->


    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
    <link rel="stylesheet" type="text/css" href="css/rdash.css">
    <style>
        body        { padding-top:30px; }
        form        { padding-bottom:20px; }
        .comment    { padding-bottom:20px; }
    </style>

    <script type="text/javascript" src="js/dashboard.min.js"></script>
    <script type="text/javascript" src="js/controllers/alert-ctrl.js"></script>
    <script type="text/javascript" src="js/controllers/mainController.js"></script>
    <script type="text/javascript" src="js/application.js"></script>
    <script type="text/javascript" src="js/module.js"></script>
    <script type="text/javascript" src="js/routes.js"></script>

</head>
<div id="page-wrapper" ng-class="{'open': true}" ng-cloak>

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar">
            <li class="sidebar-main">
                <a ng-click="toggleSidebar()">
                    Dashboard
                    <span class="menu-icon glyphicon glyphicon-transfer"></span>
                </a>
            </li>
            <li class="sidebar-title"><span>NAVIGATION</span></li>
            <li class="sidebar-list">
                <a href="#">Dashboard <span class="menu-icon fa fa-tachometer"></span></a>
            </li>
            <li class="sidebar-list">
                <a href="#/tables">Tables<span class="menu-icon fa fa-table"></span></a>
            </li>
        </ul>
        <div class="sidebar-footer">
            <div class="col-xs-4">
                <a href="https://github.com/rdash/rdash-angular" target="_blank">
                    Github
                </a>
            </div>
            <div class="col-xs-4">
                <a href="https://github.com/pupimvictor/rwPhpTest" target="_blank">
                    About
                </a>
            </div>
            <div class="col-xs-4">
                <a href="#">
                    Support
                </a>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->

    <div id="content-wrapper">
        <div class="page-content">

            <!-- Header Bar -->
            <div class="row header">
                <div class="col-xs-12">
                    <div class="user pull-right">
                        <div class="item dropdown" uib-dropdown>
                            <a href="#" class="dropdown-toggle" uib-dropdown-toggle>
                                <img src="img/avatar.jpg">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header">
                                    Joe Bloggs
                                </li>
                                <li class="divider"></li>
                                <li class="link">
                                    <a href="#">
                                        Profile
                                    </a>
                                </li>
                                <li class="link">
                                    <a href="#">
                                        Menu Item
                                    </a>
                                </li>
                                <li class="link">
                                    <a href="#">
                                        Menu Item
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li class="link">
                                    <a href="#">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="item dropdown" uib-dropdown>
                            <a href="#" class="dropdown-toggle" uib-dropdown-toggle>
                                <i class="fa fa-bell-o"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header">
                                    Notifications
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">Server Down!</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="meta">
                        <div class="page">
                            Dashboard
                        </div>
                        <div class="breadcrumb-links">
                            Home / Dashboard
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Bar -->

            <!-- Main Content -->
            <div ui-view></div>

        </div><!-- End Page Content -->
    </div><!-- End Content Wrapper -->
</div><!-- End Page Wrapper -->
</body>
</html>


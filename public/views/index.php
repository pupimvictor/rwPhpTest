<!doctype html>
<html lang="en" ng-app="RobustWealthApp">
<head>
    <meta charset="UTF-8">
    <title>Robust Wealth</title>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.2.0/ui-bootstrap-tpls.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.2.0/ui-bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.3.2/angular-ui-router.min.js"></script>

    <script type="text/javascript" src="js/application.js"></script>
    <script type="text/javascript" src="js/controllers/mainController.js"></script>
    <script type="text/javascript" src="js/controllers/fundController.js"></script>
    <script type="text/javascript" src="js/services/fundService.js"></script>
    <script type="text/javascript" src="js/routes.js"></script>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>

<body>
<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Investments</a>
            </li>
            <li>
                <a href="#">Clients</a>
            </li>
            <li>
                <a href="#">Funds</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div ui-view></div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>



</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: victorpupim
 * Date: 11/6/16
 * Time: 11:32 PM
 */
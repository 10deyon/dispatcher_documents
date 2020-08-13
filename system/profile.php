<?php
session_start();
include_once('../library/connect.inc.php');

?>
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2019 13:49:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Dispatcher | Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
        />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="main.87c0748b313a1dda75f5.css" rel="stylesheet"></head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    <?php include('header.php') ?>

    <div class="app-main">
        <?php  include('sidebar.php') ?>
        <div class="app-main__outer">
            <div class="app-main__inner">
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            My Profile

                        </div>

                    </div>
                </div>
                <div class="bg-white">
                    <div class="mb-3 card">
                        <div class="card-header">
                            <ul class="nav">
                                <li class="nav-item"><a data-toggle="tab" href="#profile" class="active nav-link">My Profile</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#editprofile" class="nav-link">Update Profile</a></li>

                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="profile" role="tabpanel">
                                    <div class="row">

                                    </div>
                                </div>

                                <div class="tab-pane" id="editprofile" role="tabpanel">

                                    <div class="d-block text-right card-footer">
                                        <button class="btn-wide btn-shadow btn btn-primary">Update Profile</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <?php include_once('footer.php')  ?>
            </div>
        </div>

        <div class="app-drawer-overlay d-none animated fadeIn"></div>
        <script type="text/javascript" src="assets/scripts/main.87c0748b313a1dda75f5.js"></script></body>

<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2019 13:53:33 GMT -->
</html>

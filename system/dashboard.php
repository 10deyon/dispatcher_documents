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
    <title>Dispatcher | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
        />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="main.87c0748b313a1dda75f5.css" rel="stylesheet"></head>
<body>
<?php if(isset($message)){ echo Alert(); } ?>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
<?php include('header.php') ?>

    <div class="app-main">
        <?php  include('sidebar.php') ?>

        <div class="app-main__outer">
            <div class="app-main__inner">

                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            Dashboard

                        </div>

                </div>
            </div>
                    <div class="bg-white">
                        <div class="table-responsive">
                            <table class="text-nowrap table-lg mb-0 table table-hover">
                                <tbody>
                                <tr>
                                    <td class="text-left pl-1">
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Alina Mcloughlin</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-left">Nullam dictum felis eu pede mollis pretium...
                                    <button class="btn btn-primary btn-sm btn-pill">READ MORE</button>
                                    </td>
                                    <td>
                                        <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                        7 Dec
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left pl-1">
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Alina Mcloughlin</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-left">Nullam dictum felis eu pede mollis pretium...
                                        <button class="btn btn-primary btn-sm btn-pill">READ MORE</button>
                                    </td>
                                    <td>
                                        <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                        7 Dec
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left pl-1">
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Alina Mcloughlin</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-left">Nullam dictum felis eu pede mollis pretium...
                                        <button class="btn btn-primary btn-sm btn-pill">READ MORE</button>
                                    </td>
                                    <td>
                                        <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                        7 Dec
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left pl-1">
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Alina Mcloughlin</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-left">Nullam dictum felis eu pede mollis pretium...
                                        <button class="btn btn-primary btn-sm btn-pill">READ MORE</button>
                                    </td>
                                    <td>
                                        <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                        7 Dec
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left pl-1">
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Alina Mcloughlin</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-left">Nullam dictum felis eu pede mollis pretium...
                                        <button class="btn btn-primary btn-sm btn-pill">READ MORE</button>
                                    </td>
                                    <td>
                                        <i class="fa fa-calendar-alt opacity-4 mr-2"></i>
                                        7 Dec
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
               <div>
                   <ul class="nav flex-column">
                       <li class="nav-item-divider nav-item"></li>
                       <li class="nav-item-btn text-right nav-item">
                           <button class="btn-shadow btn-wide btn-pill btn btn-primary btn-sm">View All Messages</button>
                       </li>
                   </ul>
               </div>
            <?php include_once('footer.php')  ?>
    </div>
</div>

<div class="app-drawer-overlay d-none animated fadeIn"></div>
<script type="text/javascript" src="assets/scripts/main.87c0748b313a1dda75f5.js"></script></body>

<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2019 13:53:33 GMT -->
</html>

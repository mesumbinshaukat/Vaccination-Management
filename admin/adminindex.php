<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Hospital</title>
    <link rel="icon" href="img/logo.png" type="image/png">

    <link rel="stylesheet" href="../css/bootstrap1.min.css" />

    <link rel="stylesheet" href="../vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="../vendors/swiper_slider/css/swiper.min.css" />

    <link rel="stylesheet" href="../vendors/select2/css/select2.min.css" />

    <link rel="stylesheet" href="../vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="../vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="../vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="../vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="../vendors/tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="../vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="../vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="../vendors/datatable/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="../vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="../vendors/morris/morris.css">

    <link rel="stylesheet" href="../vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="../css/metisMenu.css">

    <link rel="stylesheet" href="../css/style1.css" />
    <link rel="stylesheet" href="../css/colors/default.css" id="colorSkinCSS">
</head>

<body class="crm_body_bg">



<nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <img src="img/logo3.png" alt="">
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu" class="p-2">

            <li class="side_menu_title">
                <a href="vacrequest.php" style="text-decoration: none;"><span>Dashboard</span></a>
            </li>

            <a href="vacrequest.php" style="text-decoration: none;">
                <li class="fs-5 mt-4 "><span style="color: black;">Vaccination Request</span></li>
            </a>

            <a href="hospital_credentials.php" style="text-decoration: none;">
                <li class="fs-5 mt-4 "><span style="color: black;">Hospital Credentials</span></li>
            </a>



            <a href="vaccination_report.php" style="text-decoration: none;">
                <li class="fs-5 mt-4 "><span style="color: black;">Vaccination Report</span></li>
            </a>



            <a href="vaccinated_report.php" style="text-decoration: none;">
                <li class="fs-5 mt-4 "><span style="color: black;">Patients Vaccinated</span></li>
            </a>


            <a href="vacreport.php" style="text-decoration: none;">
                <li class="mt-4  fs-5"> <span style="color: black;">Report</span></li>
            </a>


            <a href="logout.php" style="text-decoration: none;">
                <li class=" mt-4 fs-5"><span style="color: black;">Logout</span></li>
            </a>

        </ul>
    </nav>
    


    <section class="main_content dashboard_part">

        <div class="container-fluid no-gutters">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area">
                          <h2><b>Admin Panel</b></h2>
                          <hr>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            
                            <div class="profile_info">
                                <img src="../img/admin.jpg" alt="#">
                                <div class="profile_info_iner">
                                    <p>Profile</p>
                                    <h5><?php echo $_SESSION['aemail'] ?></h5>
                                    <div class="profile_info_details">
                                        <a href="adminlogout.php">Log Out <i class="ti-shift-left"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
   
      


        <script src="../js/jquery1-3.4.1.min.js"></script>

        <script src="../js/popper1.min.js"></script>

        <script src="../js/bootstrap1.min.js"></script>

        <script src="../js/metisMenu.js"></script>

        <script src="../vendors/count_up/jquery.waypoints.min.js"></script>

        <script src="../vendors/chartlist/Chart.min.js"></script>

        <script src="../vendors/count_up/jquery.counterup.min.js"></script>

        <script src="../vendors/swiper_slider/js/swiper.min.js"></script>

        <script src="../vendors/niceselect/js/jquery.nice-select.min.js"></script>

        <script src="../vendors/owl_carousel/js/owl.carousel.min.js"></script>

        <script src="../vendors/gijgo/gijgo.min.js"></script>

        <script src="../vendors/datatable/js/jquery.dataTables.min.js"></script>
        <script src="../vendors/datatable/js/dataTables.responsive.min.js"></script>
        <script src="../vendors/datatable/js/dataTables.buttons.min.js"></script>
        <script src="../vendors/datatable/js/buttons.flash.min.js"></script>
        <script src="../vendors/datatable/js/jszip.min.js"></script>
        <script src="../vendors/datatable/js/pdfmake.min.js"></script>
        <script src="../vendors/datatable/js/vfs_fonts.js"></script>
        <script src="../vendors/datatable/js/buttons.html5.min.js"></script>
        <script src="../vendors/datatable/js/buttons.print.min.js"></script>
        <script src="../js/chart.min.js"></script>

        <script src="../vendors/progressbar/jquery.barfiller.js"></script>

        <script src="../vendors/tagsinput/tagsinput.js"></script>

        <script src="../vendors/text_editor/summernote-bs4.js"></script>
        <script src="../vendors/apex_chart/apexcharts.js"></script>

        <script src="../js/custom.js"></script>

</body>

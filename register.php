<?php
include('connection.php');



if (isset($_POST['submit'])) {
    $name = $_POST['Uname'];
    $email = $_POST['Uemail'];
    $password = $_POST['pass'];
    $travel = $_POST['travel'];
    if (!empty($name) && !empty($email) && !empty($password)) {

        if ($travel == '1') {
            $hname = $_POST['hname'];
            $haddress = $_POST['haddress'];
            $hadminno = $_POST['hadminno'];

            $insert_query = "INSERT INTO `hospital_register`(`name`, `Hemail`, `Hpass`, `Hname`, `Haddress`, `Hnumber`) VALUES ('$name','$email','$password','$hname','$haddress','$hadminno')";

            $run_query = mysqli_query($conn, $insert_query);

            if ($run_query) {
                header('location:index.html');
                exit();
            } else {
                die("Error");
            }

        } elseif ($travel == '0') {
            $insert_query = "INSERT INTO `parent_register`(`Pname`, `Pemail`, `password`) VALUES ('$name','$email','$password')";
            $run_query = mysqli_query($conn, $insert_query);

            if ($run_query) {
                header('location:login.html');
                exit();
            } else {
                die("Error");
            }

        }
    } else {
        echo "<script>alert('Empty Data Can Not Be Registered')</script>";
    }




}


?>


<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Hospital</title>
    <link rel="icon" href="img/logo.png" type="image/png">

    <link rel="stylesheet" href="css/bootstrap1.min.css" />

    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="vendors/swiper_slider/css/swiper.min.css" />

    <link rel="stylesheet" href="vendors/select2/css/select2.min.css" />

    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="vendors/morris/morris.css">

    <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="css/metisMenu.css">

    <link rel="stylesheet" href="css/style1.css" />
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>



<style>
    #hidden-panel {
        display: none;
    }
</style>

<body class="crm_body_bg">





    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="row justify-content-center">

                            <div class="col-lg-6">

                                <div class="modal-content cs_modal">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-center">Resister For Vaccination</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" name="Uname"
                                                    placeholder="Full Name">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" name="Uemail"
                                                    placeholder="Enter your email">
                                            </div>
                                            <div class="mb-3">
                                                <input type="password" class="form-control" name="pass"
                                                    placeholder="Password">
                                            </div>

                                            <div name="drop-down">
                                                <h6>Register AS Hospital</h6>
                                                <select name="travel" id="travel" class="form-control  "
                                                    onChange=showHide()>
                                                    <option value="1">Yes</option>
                                                    <option value="0" selected>No</option>
                                                </select>
                                            </div>

                                            <div class="mt-4" name="hidden-panel" id="hidden-panel">

                                                <input type="text" name="hname" id="country" class="form-control"
                                                    placeholder="Hospital Name" />

                                                <input type="text" name="haddress" id="country" class="form-control"
                                                    placeholder="Hospital Address" />

                                                <input type="text" name="hadminno" id="country" class="form-control"
                                                    placeholder="Hospital Admin_NO." />


                                            </div>
                                            <!-- <button class="btn btn-primary form-control mt-3" type="submit"
                                                name="submit" value="submit">Submit</button> -->
                                            <input type="submit" name="submit" value="SUBMIT"
                                                class="btn btn-outline-warning">

                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </section>

    <script>
        function showHide() {
            let travelhistory = document.getElementById('travel')

            if (travelhistory.value == 1) {
                document.getElementById('hidden-panel').style.display = 'block'
            } else {
                document.getElementById('hidden-panel').style.display = 'none'
            }
        }
    </script>


</body>

</html>
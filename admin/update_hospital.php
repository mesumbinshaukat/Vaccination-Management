<?php


include("../connection.php");

$id = $_GET['id'];

if (isset($_POST['btn_submit'])) {
    $o_name = $_POST['o_name'];
    $h_email = $_POST['h_email'];
    $h_name = $_POST['h_name'];
    $h_pass = $_POST['h_pass'];
    $h_address = $_POST['h_address'];
    $h_number = $_POST['h_number'];

    $update_query = "UPDATE `hospital_register` SET `name`='$o_name',`Hemail`='$h_email',`Hpass`='$h_pass',`Hname`='$h_name',`Haddress`='$h_address',`Hnumber`='$h_number' WHERE `id` = '$id'";

    $run_query = mysqli_query($conn, $update_query);

    if ($run_query) {
        // echo "<script>alert('Updated Successfuly')</script>";
        header('location:hospital_credentials.php');
        exit();
    } else {
        die("Unexpected Error Occured. ERROR:" . mysqli_error($conn));
    }

}


$select_query = "SELECT * FROM `hospital_register` WHERE `id` = '$id'";

$run_select_query = mysqli_query($conn, $select_query);

$fetch_details = mysqli_fetch_assoc($run_select_query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Hospital Credentials</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php include("adminindex.php"); ?>
    <center>

        <section>
            <div class="container-lg">
                <main>
                    <div class="row justify-content-center">

                        <form method="POST">

                            <div class="col-lg-6 ">
                                <div class="mb-3">
                                    <input type="text" name="o_name" class="form-control" placeholder="Owner Name"
                                        value="<?php echo $fetch_details['name']?>">
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="mb-3">
                                    <input type="email" name="h_email" class="form-control" placeholder="Hospital Email"
                                        value="<?php echo $fetch_details['Hemail'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" name="h_name" class="form-control" placeholder="Hospital Name"
                                        value="<?php echo $fetch_details['Hname'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="password" name="h_pass" class="form-control"
                                        placeholder="Hospital Password" value="<?php echo $fetch_details['Hpass'] ?>">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" name="h_address" class="form-control"
                                        placeholder="Hospital Address" value="<?php echo $fetch_details['Haddress'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="tel" name="h_number" class="form-control"
                                        placeholder="Hospital Contact Number"
                                        value="<?php echo $fetch_details['Hnumber'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-center">
                                <input type="submit" name="btn_submit" class="btn btn-outline-dark">
                            </div>




                        </form>

                    </div>
                </main>
            </div>

        </section>
    </center>

</body>

</html>
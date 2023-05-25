<?php
include('../connection.php');

$hospital_select = "SELECT * FROM `hospital_register`";

$run_hospital_query = mysqli_query($conn, $hospital_select);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Credentials</title>
</head>
<style>


</style>

<body>
    <?php include('adminindex.php') ?>

    <section>
        <main>
            <h1 class = "text-center">All Hospitals</h1>
            <div class="container-fluid">
                <?php
                for ($row = 1; $row <= mysqli_num_rows($run_hospital_query); $row++) {
                    $fetch_details = mysqli_fetch_assoc($run_hospital_query);

                    ?>
                <div class="row row-cols-1 row-cols-md-2 g-4 d-flex justify-content-center mt-2  ">
                    <div class="col-sm-6 col-lg-6 mb-3 mb-sm-0 ">
                        <div class="card border border-danger ">
                            <div class="card-body ">
                                <h5 class="card-text"> Hospital-Admin : <b> <?php echo $fetch_details['name'] ?> </b> </h5>
                                <h5 class="card-text">Email : <b><?php echo $fetch_details['Hemail'] ?> </b></h5>
                                <h5 class="card-text"> Password : <b><?php echo $fetch_details['Hpass'] ?> </b></h5>
                                <h5 class="card-text"> Hospital-Name : <b><?php echo $fetch_details['Hname'] ?> </b></h5>
                                <h5 class="card-text"> Address : <b><?php echo $fetch_details['Haddress'] ?> </b></h5>
                                <h5 class="card-text"> Number : <b><?php echo $fetch_details['Hnumber'] ?> </b></h5>
                                <a href="update_hospital.php?id=<?php echo $fetch_details['id'] ?>"
                                    class="btn btn-outline-primary">Update
                                    Details</a>

                            </div>
                        </div>
                    </div>

                </div>
                <?php } ?>
            </div>
        </main>
    </section>

</body>

</html>
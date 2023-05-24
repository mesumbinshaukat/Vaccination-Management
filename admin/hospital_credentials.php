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

<body>
    <?php include('adminindex.php') ?>

    <section>
        <main>
            <div class="container-fluid">
                <?php
                for ($row = 1; $row <= mysqli_num_rows($run_hospital_query); $row++) {
                    $fetch_details = mysqli_fetch_assoc($run_hospital_query);

                    ?>
                <div class="row">
                    <div class="col-sm-6 col-lg-6 mb-3 mb-sm-0">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-text"> <?php echo $fetch_details['name'] ?></h5>
                                <h5 class="card-text"><?php echo $fetch_details['Hemail'] ?></h5>
                                <h5 class="card-text"> <?php echo $fetch_details['Hpass'] ?></h5>
                                <h5 class="card-text"><?php echo $fetch_details['Hname'] ?></h5>
                                <h5 class="card-text"> <?php echo $fetch_details['Haddress'] ?></h5>
                                <h5 class="card-text"><?php echo $fetch_details['Hnumber'] ?></h5>
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
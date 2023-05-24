<?php 
include('../connection.php');

$current_date = date('Y-m-d');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccination Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<?php include('adminindex.php') ?>


<section>
    <header>
        <div class="container-sm text-center">
            <h1>Upcoming Vaccination Appointments</h1>
        </div>
    </header>
</section>

<section>
    <main>
        <div class="container-fluid">

        <table class="table table-dark table-hover">
            <thead>
                <th>
                    Child Name
                </th>
                <th>
                    Appointment Date
                </th>
                <th>
                    Parent Name
                </th>
                </thead>

                <tbody>
                <?php       
    $select_query = "SELECT * FROM `book_appointment`";

    $select_query_run = mysqli_query($conn, $select_query);
    for($row = 0; $row <= mysqli_num_rows($select_query_run); $row++){
            $fetch_details = mysqli_fetch_assoc($select_query_run); 
                    
                   if(!empty($fetch_details["appointment_date"])){
                        if($fetch_details["appointment_date"] > $current_date){?>
                            <tr>
                        <td>Zohair</td>
                        <td> <?php echo date("Y-m-d")?></td>
                        <td>Mashood</td>
                    </tr>
                    <?php
                        echo $fetch_details["appointment_date"];
                    }
                }
           
            }?>
                </tbody>
        </table>
            
            
            
           
            
        </div>
    </main>
</section>

</body>
</html>
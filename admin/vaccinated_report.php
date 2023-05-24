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
            <h1>Patients Vaccination Report</h1>
        </div>
    </header>
</section>

<section>
    <main>
        <div class="container-fluid">

        <table class="table table-dark table-hover text-center">
            <thead>
                <th>
                    Child Name
                </th>
                <th>
                    Vaccination Date
                </th>
                <th>
                    Parent Name
                </th>
                <th>
                    Patient Vaccinated
                </th>
                </thead>

                <tbody>
                <?php       
    $select_query = "SELECT * FROM `book_appointment`";

    $select_query_run = mysqli_query($conn, $select_query);
    for($row = 0; $row <= mysqli_num_rows($select_query_run); $row++){
            $fetch_details = mysqli_fetch_assoc($select_query_run); 
            if(!empty($fetch_details["appointment_date"])){
                if($fetch_details["vaccinated"] == '1'){
                    if($fetch_details["appointment_date"] <= $current_date){
                    $parent_id = $fetch_details["Pname"];
                    $child_id = $fetch_details["child_name"];

                    $select_parent_table = "SELECT * FROM `parent_register` WHERE `id` =  '$parent_id'";        
                    $run_select_parent = mysqli_query($conn, $select_parent_table);
                    $fetch_parent_details = mysqli_fetch_assoc($run_select_parent);
                    $parent_name_fetched = $fetch_parent_details["Pname"];

                    $select_child_table = "SELECT * FROM `childinfo` WHERE `id` = '$child_id'";
                    $run_select_child = mysqli_query($conn, $select_child_table);
                    $fetch_child_details = mysqli_fetch_assoc($run_select_child);
                    $child_name_fetched = $fetch_child_details["child_name"];
                    ?>
                        
                        <tr>
                        <td><?php echo $child_name_fetched;?></td>
                        <td> <?php echo $fetch_details["appointment_date"];?></td>
                        <td><?php echo $parent_name_fetched;?></td>
                        <td class="text-success fw-bold">Vaccinated</td>
                    </tr>
                    <?php
                    
                }
            }elseif($fetch_details["vaccinated"] == '0'){
                if($fetch_details["appointment_date"] <= $current_date || $fetch_details["appointment_date"] >= $current_date){
                $parent_id = $fetch_details["Pname"];
                $child_id = $fetch_details["child_name"];

                $select_parent_table = "SELECT * FROM `parent_register` WHERE `id` =  '$parent_id'";        
                $run_select_parent = mysqli_query($conn, $select_parent_table);
                $fetch_parent_details = mysqli_fetch_assoc($run_select_parent);
                $parent_name_fetched = $fetch_parent_details["Pname"];

                $select_child_table = "SELECT * FROM `childinfo` WHERE `id` = '$child_id'";
                $run_select_child = mysqli_query($conn, $select_child_table);
                $fetch_child_details = mysqli_fetch_assoc($run_select_child);
                $child_name_fetched = $fetch_child_details["child_name"];
                ?>
                    
                    <tr>
                    <td><?php echo $child_name_fetched;?></td>
                    <td> <?php echo $fetch_details["appointment_date"];?></td>
                    <td><?php echo $parent_name_fetched;?></td>
                    <td class="text-danger fw-bold">Not Vaccinated</td>
                </tr>
                <?php
                
            }
        }
                
           
            }}?>
                </tbody>
        </table>
            
            
            
           
            
        </div>
    </main>
</section>

</body>
</html>
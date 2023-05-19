<?php
include('connection.php');


$search_value = $_POST['data_search'];
$selected_data_fetch = "SELECT * FROM `addvaccine` WHERE Hname LIKE '%{$search_value}%'";
$run = mysqli_query($conn,$selected_data_fetch);

if ($run) {
   header('location:allhospital.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Search</title>

</head>
<body>


<table class="table">
    <thead>
        <tr>
            <th>Hospital</th>
            <th>Vaccination</th>
            <th>Type</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row=mysqli_fetch_array($run)){ ?>
        <tr>
            <td> <?php echo $row['Hname'] ?> </td>
            <td> <?php echo $row['Vname'] ?> </td>
            <td> <?php echo $row['Vtype'] ?> </td>
        </tr>
        <?php } ?>
    </tbody>
</table>



</div>


    
</body>
</html>

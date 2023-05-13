<?php
include('../connection.php');
$fetch_query ="SELECT * FROM book_appointment";
$run = mysqli_query($conn ,$fetch_query);
$fetch_data = mysqli_fetch_array($run);
$c_id = $fetch_data['c_id'];
$p_id = $fetch_data['p_id'];
$v_id = $fetch_data['v_id'];
$h_id = $fetch_data['h_id'];


$s_query = "SELECT * FROM `childinfo` WHERE id = '$c_id'";
$run_q = mysqli_query($conn , $s_query); 

$s1_query = "SELECT * FROM `addvaccine` WHERE id = '$v_id'";
$run1_q = mysqli_query($conn , $s1_query); 

$s2_query = "SELECT * FROM `parent_register` WHERE id = '$p_id'";
 $run2_q = mysqli_query($conn , $s2_query); 

$s3_query = "SELECT * FROM `book_appointment` WHERE id = '$p_id'";
$run3_q = mysqli_query($conn , $s3_query); 

 






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Document</title>

</head>
<body>
<div class="container">
<table class ="table table-bordered">
   
<tr>
<th>child name</th>
<th>hospital id</th>
<th>vaccination id</th>
<th>Parent id</th>
<th>Appointment Date</th>




</tr>
<?php  
        while ($row = mysqli_fetch_array($run_q)) { 
            while ($row1 = mysqli_fetch_array($run1_q)) { 

                while ($row2= mysqli_fetch_array($run2_q)) { 
                    while ($row3= mysqli_fetch_array($run3_q)) { 


             ?>
        
        <tr>
                <td> <?php echo $row['child_name'] ?> </td>
                <td> <?php echo $row1['Hname'] ?> </td>
                <td> <?php echo $row1['Vname'] ?> </td>
                <td> <?php echo $row2['Pname'] ?> </td>
                <td> <?php echo $row3['appointment_date'] ?> </td>


                

                <td> 
                <a class="btn btn-success" href="updated.php?id=<?php echo $row['id'] ?>">Edit</a>
                <a class="btn " href="accept.php?id=<?php echo $row['id'] ?>">Accept</a>
      <a class="btn btn-danger" onclick="return confirm('are you sure? you want to delete')"
       href="deleted.php?id=<?php echo $row['id'] ?>">Delete</a>
       <a class="btn " href="reject.php?id=<?php echo $row['id'] ?>">Reject</a>

                                  
                
                 </td>                                                                                  
            </tr>
            <?php   }}}} ?>







</table>
</div>


    
</body>
</html>
<?php
include('../connection.php');


session_start();
if (isset($_SESSION['aemail']) || isset($_SESSION['apass'] )) {

} else {
    header('location:adminlogin.php');
    exit();
}



$select_query = "SELECT * FROM book_appointment
INNER JOIN childinfo
ON  book_appointment.child_name =  childinfo.id   

INNER JOIN parent_register
ON   book_appointment.Pname = parent_register.id 

INNER JOIN addvaccine
ON   book_appointment.Vname = addvaccine.id";
$run = mysqli_query($conn ,$select_query);

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

<?php include('adminindex.php') ?>



<div class="container">
<table class ="table table-bordered">
   
<tr>

<th>child name</th>
<th>Parent Name</th>
<th>hospital Name</th>
<th>vaccination Name</th>
<th>Appointment Date</th>
<th>Accept/Reject</th>





</tr>


<?php  
        while ($row = mysqli_fetch_array($run)) { 

            if ($row['request'] == '1') {
        ?>
        
      
            
            <?php  }else { ?>
                  <tr> 
                  <td> <?php echo $row['b_id'] ?> </td>
                
                  <td> <?php echo $row['child_name'] ?> </td>
                  <td> <?php echo $row['Pname'] ?> </td>
                  <td> <?php echo $row['Vname'] ?> </td>
                  <td> <?php echo $row['Hname'] ?> </td>
                  <td> <?php echo $row['appointment_date'] ?> </td>
                  <td><a class="btn btn-primary" href="acceptereq.php?id=<?php echo $row['b_id'] ?>">Accept</a>
                  <a class="btn btn-danger" href="rejectreq.php?id=<?php echo $row['b_id'] ?>">Reject</a></td>
              </tr>
           <?php }
         }?>

           
                





</table>
</div>


    
</body>
</html>




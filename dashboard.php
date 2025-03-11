<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
<div id="all">
   
    <div class="container">
    <h1>All User Records</h1>
    </div>
        <table cellpadding="20px">
            <thead>
            <input type="submit" value="add new" class="button1">
<tr class="tr1">
    <th>Number</th>
    <th>Names</th>
    <th>Email</th>
    <th colspan="2">Action</th>
    </tr>
    </thead>
    
<?php

include('config.php');
$sql="SELECT * FROM clients";
$result=mysqli_query($conn,$sql);
$n=1;
while($row=mysqli_fetch_assoc($result)){


?>
<tr>
    <td><?php echo $n++; ?></td>
    <td><?php echo $row['names']; ?></td> 
    <td><?php echo $row['email']; ?></td>
    <td><a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-success"><button class="button">Edit</button></a></td>
    <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><button class="button">Delete</button></a></td>
</tr>
<?php
}
?>

</table>
</div>
</body>
</html>
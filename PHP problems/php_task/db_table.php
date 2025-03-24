<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
    tr,table{
       display: flex;
       justify-content: center;
       gap: 70px;
    }
    </style>
</head>
<body>
    <table>
    <tr id="title" >
    <th>FirstName</th>
    <th>LastName</th>
    <th>Email</th>
    <th>Address</th>
    <th>Mobile</th>
    <th>Password</th>
    <th>confirmpassword</th>
    </tr>

    <?php

    $sql=new mysqli("localhost','dckap','Dckap2023Ecommeerce','formdetails'");
    $table_query='SELECT * FROM userDetails';
    $result=$sql->query($table_query);
    if($result->num_rows>0){
        while($row =$result->fetch_assoc()){
             ?>
             <tr scope='row'>
             <?php echo '<td'.$row['firstname'] . '</td>' ?>;
             <?php echo '<td'.$row['lastname'] . '</td>' ?>;
            <?php echo '<td'.$row['email'] . '</td>' ?>;
            <?php echo '<td'.$row['address'] . '</td>' ?>;
            <?php echo '<td'.$row['mobile'] . '</td>' ?>;
            <?php echo '<td'.$row['password'] . '</td>' ?>;
            <?php echo '<td'.$row['passwordConfirm'] . '</td>' ?>;
             </tr>
             <?php
             }}?>
             </table>
   
</body>
</html>
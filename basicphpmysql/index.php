<?php
include_once('config.php'); 

$result = mysqli_query($mysqli, "select * from users");


?>


<html>

<head>
    <title>PHP MySQL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<style>
    body {
        margin-bottom: 20px;
        width: 1000px;
        margin: 0 auto;
        margin-top: 50px;
    }

    .border-radius1{
        border-radius: 20px 0px 0px 0px;
    }

    .border-radius{
        border-radius: 0px 20px 0px 0px;
        border: none;
    }

    table{
        margin-top: 15px;
    }

    h1{
        text-align: center;
    }
    
</style>



<body>

    <h1>PHP MYSQL</h1>

    <a class="btn btn-outline-dark" href="add.php" type="button">Tambah Data</a>
    <table class="table table-bordered table table-hover">
        <tr class="thead-dark">
            <th class="border-radius1">Name</th>
            <th >Mobile</th>
            <th >Email</th>
            <th class="border-radius">Update</th>
        </tr>
    <?php while($user_data = mysqli_fetch_array($result)){
         echo "<tr>";
         echo "<td>".$user_data['name']."</td>"; 
         echo "<td>".$user_data['mobile']."</td>"; 
         echo "<td>".$user_data['email']."</td>"; 
         echo "<td><a  class='btn btn-outline-dark' href='edit.php?id=$user_data[id]'>Edit</a> || <a class='btn btn-outline-dark' href='delete.php?id=$user_data[id]'>Delete</a></td>";
         echo "</tr>";
    } ?>
    </table>
</body>

</html>
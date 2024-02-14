<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Patient </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
    padding: 20px;
    font-size: 20px;
    text-align: center;
    background: blue;
    width:100%;
    color: white;
  }

.button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px ;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button1:hover {
  background-color: #008CBA;
  color: white;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: blue;
   color: white;
   text-align: center;

}
</style>
<body>
<div class="header">
    <h2><b><i>Admin Dashboard</i></b></h2>
  </div>

     <hr>
    
     <a class="btn btn-outline-success" href="create.php" role="button">New Patient</a> 
     
    <br>
    <table class="table"> 
         <thead> 
           <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Admit</th>
           
           </tr>
         </thead>
         <tbody>
            <?php
           

            $connection = new mysqli ($servername, $username, $password,$database);
            if($connection->connect_error){
                die("Connection failed:" . $connection->connect_error);
            }

            $sql = "SELECT * FROM patients";
            $result = $connection->query($sql);

            if (!$result){
                die("Invalid query: " . $connection->error);
            }
            while($row = $result-> fetch_assoc()) {
                echo " <tr>
                <td>$row[id]</td>
                <td>$row[name]</td>
                <td>$row[email]</td>
                <td>$row[phone]</td>
                <td>$row[address]</td>
                <td>$row[created_at]</td>
                <td>
                <a class='btn btn-outline-info btn-sm' href='edit.php?update&id=$row[id]'>Edit</a>
                <a class='btn btn-outline-danger btn-sm' href='delete.php?delete&id=$row[id]'> Delete</a>
                </td>
             </tr>
             ";
            }
            ?>
            
         </tbody>
    </table>
    </div>
</body>
<div class="footer">
<a button class="button button1"href="index.php" role="button">LOGOUT</a>
</div>
</html>
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
  overflow: hidden;
  background-color: blue;
  width:100%;
  color: white;
}


.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header-right {
  float: right;
  padding: 5px;
  margin: 5;
 

}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
    margin: 0;
   
  }
}
.button {
  background-color: #04AA6D; /* Green */
  border: none;
  color: black;
  padding: 16px 32px;
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
  background-color: blue;
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
  <a  class="logo"><b><i>List of Patient</i></b></a>
  <div class="header-right">
  <a button class="button button1"href="login.php" role="button">LOGIN ADMIN ACC</a>
    <a button class="button button1" href="about.php">About</button></a>
  </div>
</div>
    <div class="container my-5">
   
    <hr>
     
<h4>
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
                
                </td>
             </tr>
             ";
            }
            ?>
           </h4>
         </tbody>
    </table>
    </div>
</body>

<div class="footer">
  <p><i>Click The about page for more Info.</i></p>
</div>

</html>
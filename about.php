

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
  color: white;
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
  <a  class="logo"><b><i>About Page</i></b></a>
  <div class="header-right">

    <a button class="button button1" href="index.php">Home</button></a>
  </div>
</div>
 
</body>

<div class="footer">
<p><i>Please read carefully Thank you.</i></p>
</div>

</html>
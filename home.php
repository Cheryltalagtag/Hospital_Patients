<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login Page</title>
</head>
 <body>
    <form action="login.php" method="post">
        <h2> Login Form</h2>
        <?php if (isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error'];?></p>
       <?php }
        ?>
        <label> User Name</label>
        <input type="text" name="uname" placeholder="USER NAME">
        

        <label> Password</label>
        <input type="password" name="password" placeholder="PASSWORD"><br>

        <button type="submit">LOGIN</button>
    </form>
    
</body>

</html>
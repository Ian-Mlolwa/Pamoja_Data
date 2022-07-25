<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $password = md5($password);

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            //read from database
            $query = "select * from users where user_name = '$user_name' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] === $password)
                    {
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: index.php");
                        die;        
                    }
                }
            }

            header("location:login.php?Invalid= Incorrect Username or Password");
        }
         else
        {
            header("location:login.php?Empty=Can't be NULL!");
        }
    }

?>


<html Document!>
    <head>
        <!--screen size settings-->
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pamoja Home Fibre</title>
        <link rel="stylesheet" href="style.css" media="screen">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    </head>

        <div>
            <div class="login">
                <form name="loginform" method="post">

                <div class="login-form">
            <form name="login_form" method="post" action="functions.php">
                <h1>SIGN IN</h1><br>

                <div>
                    <?php
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                    <?php echo "<p style='color:red;'>" .$_GET['Empty'] ?>
                    <?php
                        }
                    ?>

                    <?php
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                    <?php echo "<p style='color:red;'>" .$_GET['Invalid'] ?>
                    <?php
                        }
                    ?> <br>
                </div>


                    <i class="fa-solid fa-user"></i>
                    <span for="username">User Name:</span>
                        <input type="text" name="user_name" placeholder="User Name"><br><br>
                    <i class="fa-solid fa-lock">  </i>
                    <span for="username">Password:</span>
                        <input type="password" name='password' placeholder='password'><br>
                    <input type="submit" name="login" value="LOGIN">
                </form>
            </div>
        </div>

    <script src="script.js"></script> 
    </body>
</html>
<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

    if($_SERVER)

  
?>
<html DOCUMENT!>
    <head>
        <title>PAMOJA HOME fiber</title>
        <link rel="stylesheet" href="style.css" media="screen">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    </head>
    <body>
    <div class="nav-bar">
        <div class="logout">
            <a>
                <a href="index.php" id="link">HOME</a>
                <a id="link" onclick="history.back()">BACK</a>
                <i id="link" class="fa-solid fa-user"><?php echo " ". $user_data ['user_name'] ; ?></i>
                
                <a id="link" href="logout.php?logout"><i class="fa-solid fa-right-from-bracket"></i></a>
            </a>
        </div>
    </div>
    
    <div class="form">
        <h1>INSTALLAION / MAINTENACE:</h1><br>

        <form action="insert.php" method="post" id="maintain">
            <h2>Maintenance</h2>
            <fieldset>
            <div class="fieldset">
                <div class="column2">
                    <span for="customer_remarks">Customer's Remarks: </span>
                        <input type="text" name="customer_remarks"><br>
                </div>
                <div class="column2">
                        <select name="customer_rating" id="rating" required><br>
                            <option value="" selected disabled hidden >Customer's Rating:</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                </div>
                    
                <span for="technician_remarks">Technician's Assessment & Remarks: </span>
                    <input type="text" name="technician_remarks" required>
                
                    <input type="submit" value="submit">
            </div>
            </fieldset>
        </form>
    </div>
    
    </body>
</html>

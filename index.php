

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
                <i id="link" class="fa-solid fa-user"><?php echo " " .$user_data ['user_name'] ; ?></i>
                
                <a id="link" href="logout.php?logout">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </a>
            </a>
        </div>
        
    </div>

        <div class="form">        
            <h1>SERVICES</h1>            
            <div class="service">
                <ul>
                    <li><a href="new_installation.php">New Installation</a></li>
                    <li><a href="reconnection.php">Reconnection</a></li>
                    <li><a href="maintenance.php">Maintenance</a></li><br>
                    
                    <?php if($user_data["personnel"] == "ADMIN"){
                        echo '<li><a href="report.php">Report</a></li>';
                    } else {

                    }
                    ?>
         
                    <div>
                </ul>
            </div>
        </div>

    </body>
    <script src="script.js"></script>

<script >
      //setting for condition that only numeric values are allowed

    function onlyNumberKey(evt) {
    var ASCIICode = (evt.which) ? evt.which : evt.keyCode
    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
        return false;
    return true;
    }

    
</script>

</html>
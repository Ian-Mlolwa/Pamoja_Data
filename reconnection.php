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
            <form action="insert.php" method="post" id="reconnect">
                <h2>Reconnection</h2>
                <fieldset>
                <div class="fieldset">
                    <div class="column2">
                        <span for="customer_name">Customer's Name:</span>
                            <input type="text" name="customer_name" placeholder="Customer's Name" required><br>
                    </div>
                    <div class="column2">
                        <span for="apartment_name">Apartment Name:</span>
                            <input type="text" name="apartment_name" placeholder="Apartment" required><br>
                    </div>
                    <div class="column2">
                        <span for="street">Street:</span>
                            <input type="text" name="street" placeholder="Street" required><br>
                    </div>
                    <div class="column2">
                        <span for="city">City:</span>
                            <input type="text" name="city" placeholder="City" required><br>
                    </div>
                    <div class="column2">
                        <span for="email">Email:</span>
                            <input type="email" name="email" placeholder="Email" required><br>
                    </div>
                    <div class="column2">
                        <span for="phone">Phone: </span>
                            <input type="tel" name="phone" placeholder="Phone Number"
                            onkeypress="return onlyNumberKey(event)" required><br>
                    </div>                          
                    <div class="column2">
                        <span for="technician_name">Technician's Name: </span>
                            <input type="text" name="technician_name" placeholder="Technician's Name" required><br>
                    </div>
                    <div class="column2">
                        <span for="date">Date: </span>
                            <input type="date" name="date" placeholder="Date" required><br>
                    </div>
                    <div class="column2">
                        <span for="start_time">Start Time: </span>
                            <input type="time" name="start_time" placeholder="Start Time" required><br>
                    </div>
                    <div class="column2">
                        <span for="end_time">End Time: </span>
                            <input type="time" name="end_time" placeholder="End Time" required><br>
                    </div>
                        
                    <input type="submit"  value="submit">
                </div>
                </fieldset>
            </form>
        </div>    
    
    </body>
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
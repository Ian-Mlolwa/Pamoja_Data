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
                    <a id="link" href="index.php">HOME</a>
                    <i id="link" class="fa-solid fa-user"><?php echo " ". $user_data ['user_name'] ; ?></i>
                    
                    <a id="link" href="logout.php?logout"><i class="fa-solid fa-right-from-bracket"></i></a>
                </a>
            </div>
        </div>

        <div class="form">
        <h1>INSTALLAION / MAINTENACE:</h1><br>
        <form action="insert.php" method="post" id="install">
            <h2>New Installation</h2>
            <fieldset>
                <div class="fieldset">
                    <div class="column2">
                        <span for="customer_name">Customer's Name:</span>
                            <input type="text" name="customer_name" placeholder="Customer's Name" required><br>
                    </div>
                    <div class="column2">
                        <span for="apartment_name">Apartment Name:</span>
                            <input type="text" name="apartment_name" placeholder="Apartment Name" required><br>
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
                    <div class="column3">
                        <span>Medium: </span>
                            <input type="text" name="medium" placeholder="Medium" required><br>
                    </div>
                    

                    <div class="column3">
                        <span>Package: </span>
                            <input type="text" name="package" placeholder="Package" required><br>
                    </div>
                    <div class="column3">
                        <span>Amount:</span>
                            <input type="text" name="amount" placeholder="Amount" 
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
                            <input type="time" name="start_time" placeholder="Star Time" required><br>
                    </div>
                    <div class="column2">
                        <span for="end_time">End Time: </span>
                            <input type="time" name="end_time" placeholder="End Time" required><br>
                    </div>
                    <div class="column3">
                        <span>Eqipment:</span>
                            <input type="text" name="equipment" placeholder="Equipment" required><br>                        
                    </div>
                    <div class="column3">
                        <span>Other Equipment:</span>
                            <input type="text" name="other_equipment">
                    </div>                        
                    <div class="column3">
                        <span>Type:</span>
                        <input type="text" name="type" placeholder="Type" required><br>
                    </div>
                    <div class="column2">
                        <span>Serial Number:</span>
                        <input type="text" name="serial_number" placeholder="Serial Number" required><br>                            
                    </div>
                    <div class="column2">
                    <span>Customer's Remarks: </span>
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
                            </select><br>
                    </div>
                    <div class="column2">
                        <span>Technician's Assessment & Remarks: </span>
                            <input type="text" name="technician_remarks" required>
                    </div>
                    <input type="submit" value="submit">
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
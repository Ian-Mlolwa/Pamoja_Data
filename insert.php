<DOCUMENT html>
    <head>
        <title>Insert Page</title>
    </head>

    <body>
    <link rel="stylesheet" href="style.css" media="screen">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    </head>
    <body>
    <div class="nav-bar">
        <div class="logout">
            <a>
                <a href="index.php" id="link">HOME</a>
                <a href="new_installation.php" id="link">BACK</a>
                <i id="link" class="fa-solid fa-user"><?php echo " ". $user_data ['user_name'] ; ?></i>
                
                <a id="link" href="logout.php?logout"><i class="fa-solid fa-right-from-bracket"></i></a>
            </a>
        </div>
    </div>
    <div class="form">

        <center>
            <?php
            
            $con = mysqli_connect("localhost", "root", "", "Pamoja_Data");

           
            //check connection
            if($con === false){
                die("ERROR: Could not connect. "
                    .mysqli_connect_error());
            }


            $other_equipment = $_REQUEST['other_equipment'];

            // optional
            // echo "You chose the following color(s): <br>";

            foreach ($other_equipment as $other){ 
                echo $other;
            }


            //taking all the data from the Installation/Maintenance form
            $customer_name = $_REQUEST['customer_name'];
            $apartment_name = $_REQUEST['apartment_name'];
            $street = $_REQUEST['street'];
            $city = $_REQUEST['city'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $medium = $_REQUEST['medium'];
            $package = $_REQUEST['package'];
            $amount = $_REQUEST['amount'];
            $technician_name = $_REQUEST['technician_name'];
            $date = $_REQUEST['date'];

            $start_time = $_REQUEST['start_time'];
            $end_time = $_REQUEST['end_time'];
            $upload_results = $_REQUEST['upload_results'];
            $download_results = $_REQUEST['download_results'];
            $equipment = $_REQUEST['equipment'];
            $type = $_REQUEST['type'];
            $serial_number = $_REQUEST['serial_number'];

            $customer_remarks = $_REQUEST['customer_remarks'];
            $customer_rating = $_REQUEST['customer_rating'];
            $technician_remarks = $_REQUEST['technician_remarks'];

            //performing insert into customer_data
            $sql = "INSERT INTO customer_data VALUES ('$customer_name','$apartment_name','$street',
                '$city','$email','$phone','$medium','$package','$amount','$technician_name','$date','$serial_number')";
            if ($con -> query($sql) === TRUE) {
                echo "<h3> Customer data submitted sucessfully.</h3>";
                
            }
            
            
            //performing insert into installation data
            $sql = "INSERT INTO installation_data VALUES ('$customer_name','$medium','$equipment','$other_equipment','$type','$serial_number')";            
            

            //performing insert query execution on table maitanance_report
            $sql = "INSERT INTO maintenance_report VALUES ('$customer_name','$customer_remarks','$customer_rating','$technician_remarks')";            
            
            //performing insert query to the work data table
            $sql = "INSERT INTO work_data VALUES ('$customer_name','$date','$technician_name','$start_time','$end_time')";
            
            
            
            //close connection
            mysqli_close($con);

            ?>
            <table>
                <tr>
                    <th>Customer_Name</th>
                    <th>Apartment_Name</th>
                    <th>Street</th>
                    <th>City</th>
                    <th>Phone</th>
                    <th>Medium</th>
                    <th>Package</th>
                    <th>Serial Number</th>
                </tr>
                <tr>
                    <td><?= $_POST['customer_name']; ?></td>
                    <td><?= $_POST['apartment_name']; ?></td>
                    <td><?= $_POST['street']; ?></td>
                    <td><?= $_POST['city']; ?></td>
                    <td><?= $_POST['phone']; ?></td>
                    <td><?= $_POST['medium']; ?></td>
                    <td><?= $_POST['package']; ?></td>
                    <td><?= $_POST['serial_number']; ?></td>
                    <td>
                        <input id="edit" type="button" value="EDIT" onclick="history.back()">
                    </td>
                </tr>
            </table>            
        
        </center>
    </div>

    <style id="table_style" type="text/css">
            body
            {
                font-family: Arial;
                font-size: 10pt;
            }
            table
            {
                margin-top: 100px;
                border: 1px solid #ccc;
                border-collapse: collapse;
                width: 100%;
            }
            table th
            {
                background-color: #F7F7F7;
                color: #333;
                font-weight: bold;
            }
            table th, table td
            {
                padding: 5px;
                border: 1px solid #ccc;
            }
        </style>

    </body>
</html>
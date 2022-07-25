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
        <script src="script.js" type="text/javascript"></script>
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

        <div class="form" method="post" id="dvContents">      
        <h1>REPORT</h1><br>
            <form action="report.php">
                <div class="column3">
                    <span>FROM:</span>
                    <input type="date" name="fromdate" value="<?php if(isset($_GET['fromdate'])){echo $_GET['fromdate']; } ?>">
                </div>
                <div class="column3">
                    <span>TO:</span>
                    <input type="date" name="todate" value="<?php if(isset($_GET['todate'])){echo $_GET['todate']; } ?>">
                </div>
                <div class="column3">
                    <input type="submit" name="filter" value="Generate Report">
                </div>
               
            </form>
            <table id='countit' media="screen">
                <tr>
                    <th>Customer_Name</th>
                    <th>Apartment_Name</th>
                    <th>Street</th>
                    <th>City</th>
                    <th>Phone</th>
                    <th>Medium</th>
                    <th>Package</th>
                    <th>Amount</th>
                    <th>Serial Number</th>
                    <th>Date</th>
                </tr>
       
            
            
                <?php

                    if (isset($_GET['fromdate']) && isset($_GET['todate'])){

                        //validating the date variables passed
                        $fromdate = $_GET['fromdate'];
                        $todate = $_GET['todate'];

                        $query = "SELECT * FROM customer_data WHERE Date BETWEEN '$fromdate' AND '$todate'";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0){
                            foreach($query_run as $row) {
                                ?>
                                <tr>
                                    <td><?= $row['Customer_Name']; ?></td>
                                    <td><?= $row['Apartment_Name']; ?></td>
                                    <td><?= $row['Street']; ?></td>
                                    <td><?= $row['City']; ?></td>
                                    <td><?= $row['Phone']; ?></td>
                                    <td><?= $row['Medium']; ?></td>
                                    <td><?= $row['Package']; ?></td>
                                    <td class='count-me'><?= $row['Amount']; ?></td>
                                    <td><?= $row['Serial_Number']; ?></td>
                                    <td><?= $row['Date']; ?></td>
                                </tr>
                                <?php
                            }

                        } else {
                            echo "<h3>No Record Found</h3>";
                        }
                        //now using them in my php function
                    }
                ?>
            </table>

        </div>
        <script></script>
        <div class="form-print">
            <input type="button" onclick="PrintTable();" value="Print">
        </div>



        <style id="table_style" type="text/css">
            body
            {
                font-family: Arial;
                font-size: 10pt;
            }
            table
            {
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
        <script src="script.js" type="text/javascript"></script>
    </body>
</html>
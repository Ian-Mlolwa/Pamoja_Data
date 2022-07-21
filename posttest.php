<?php

$other_equipment = $_GET['other_equipment'];

            // optional
            // echo "You chose the following color(s): <br>";

            foreach ($other_equipment as $other){ 
                echo $other."<br />";
            }

?>
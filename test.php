<?php 

    
    include 'connect.php';

    print_r($_REQUEST['names']);
    
    if($_POST["names"]){
        foreach ($_POST["names"] as $key => $value) {
            $v = $value['name'];

            $sql = "UPDATE temp SET count = count + 1 WHERE name='".$v."'";


            // Prepare statement
            $stmt = $con->prepare($sql);

            // execute the query
            $stmt->execute();

            // echo a message to say the UPDATE succeeded
            echo $stmt->rowCount() . ' records UPDATED successfully';
        }

        
    }

    ?>
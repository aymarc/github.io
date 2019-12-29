<?php

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
 
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

$_SESSION['counter'];

    $sql1 = "SELECT * FROM kha_settings";
        if($result = $mysqli->query($sql1)){
            if($result->num_rows > 0){             
                while($row = $result->fetch_array()){
                    $_SESSION['total_reviews'] = $row['total_reviews'];
                    $_SESSION['total_stars'] = $row['total_stars'];
                    $_SESSION['review_statement'] = $row['review_state'];     
                    $_SESSION['logo'] = $row['logo'];
                    $_SESSION['officephone1'] = $row['officephone1'];
                    $_SESSION['officephone2'] = $row['officephone2'];
                    $_SESSION['officemail'] = $row['officemail'];
                    
                } //for the while loop
            } // for the if statement
        } //for the if statement
                                
// Attempt select query execution

?>
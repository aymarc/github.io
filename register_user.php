
<?php

if(!@include('./configutions/G_var.php')){
    include('./configutions/G_var.php');
} 
 
   
   
   $sql = "INSERT INTO kha_user (kha_name, kha_email, kha_package, kha_password) VALUES (?, ?, ?, ?)";
        
   if($stmt = $mysqli->prepare($sql)){
       // Bind variables to the prepared statement as parameters
       $stmt->bind_param("ssss", $name, $email, $package, $password);
       
       $name = $_POST['registration_name'];
       $email = $_POST['registration_email'];
       if( strtolower($_POST['package']) == "vip"){
           $package = 2;
       } else{
           $package = 1;
       }
       if($_POST['registration_re_pass'] == $_POST['registration_pass']){
        $password = $_POST['registration_pass'];
       }
       $stmt->execute();
             
       echo "Records inserted successfully.";
   } else{
       echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
   }
// Close statement
$stmt->close();
 
// Close connection
$mysqli->close();
?>
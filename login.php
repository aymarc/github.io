<?php
if(!@include('./configutions/G_var.php')){
    include('./configutions/G_var.php');
} 

    
        $stmt = $mysqli->prepare("SELECT * FROM kha_user WHERE kha_email = ?");
        $stmt->bind_param('s', $_POST['login_email']);
        $stmt->execute();
        $result = $stmt->get_result();
    	$user = $result->fetch_object();
    		
    	// Verify user password and set $_SESSION
    	if ( $_POST['login_pass'] == $user->kha_password) {
            $_SESSION['user_id'] = $user->kha_name;
            $_SESSION['user_email'] = $user->kha_email;
            
    	}
 

?>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
     require_once("config.php");

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	
	$sql = "INSERT INTO contact (name, email, subject,message)
	VALUES ('$name', '$email', '$subject','$message')";
	
	if ($conn->query($sql) === TRUE) {
        $_SESSION['status'] = "Your message was successfully Sent ";
        if (isset($_SERVER['HTTP_REFERER'])){
			$_SESSION['message'] = "Thank you! Your message was successfully recorded. I'll get back to you soon.";
            header("Location: /contact.php");
        }
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
    $conn->close();
    
?>
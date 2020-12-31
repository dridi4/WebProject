<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['email'])) {
         
        $email = $_POST['email'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        require_once "dbconnection.php";

        $ret=mysqli_query($con,"SELECT * FROM users WHERE email='$email'");
        $row=mysqli_fetch_array($ret);
        $name =$row['username'];
        $code = $row['password'];
        $subject = " YOUR PASSWORD IS:";
        $body = "Hello " .  $name ." !! <br>  <br>  <br>  YOUR PASSWORD IS :". $code;
							  
		

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "soinsdelavietn@gmail.com";
        $mail->Password = 'Hamzadridi112000';
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress($email);
        $mail->Subject = $subject;
        $mail->Body = $body;

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>

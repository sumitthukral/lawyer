<?php
   if($_POST['Email']!==null){
    $email = $_POST['Email'];
    $name = $_POST['Name'];
    $phone= $_POST['Phone'];
   $admin='sanajay071@gmail.com';
    // $con= mysqli_connect('localhost','root','','test');
   //$result = $con->query("insert into mail (name,email,mobile)values('$name','$email','$phone')");
   require_once "vendor/autoload.php";
    $mail = new PHPMailer;
    
    //Enable SMTP debugging. 
   // $mail->SMTPDebug = 3;                               
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();            
    //Set SMTP host name                          
    $mail->Host = "smtp.gmail.com";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;                          
    //Provide username and password     
    $mail->Username = "sumitthukral9@gmail.com";                 
    $mail->Password = "sumitst9#";                           
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "tls";                           
    //Set TCP port to connect to 
    $mail->Port = 587;                                   
    $mail->From = "sumitthukral9@gmail.com";
    $mail->FromName = "Sumit";
    $mail->addAddress($admin,'admin');
    $mail->isHTML(true);
    $mail->Subject = 'Confirmation email';
    $mail->Body = "<h3>Hi, User</h3> <br/> We have new lead please reply within 24 hours <br/> Name: $name<br/>Email ID: $email<br/>Phone:$phone<br/>";
    $mail->AltBody = "Subscribed Successfully";
    
    if(!$mail->send()) 
    {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } 
    else 
    {
            $mail = new PHPMailer;
    
            //Enable SMTP debugging. 
           // $mail->SMTPDebug = 3;                               
            //Set PHPMailer to use SMTP.
            $mail->isSMTP();            
            //Set SMTP host name                          
            $mail->Host = "smtp.gmail.com";
            //Set this to true if SMTP host requires authentication to send email
            $mail->SMTPAuth = true;                          
            //Provide username and password     
            $mail->Username = "sumitthukral9@gmail.com";                 
            $mail->Password = "sumitst9#";                           
            //If SMTP requires TLS encryption then set it
            $mail->SMTPSecure = "tls";                           
            //Set TCP port to connect to 
            $mail->Port = 587;                                   
            $mail->From = "sumitthukral9@gmail.com";
            $mail->FromName = "Sumit";
        $mail->addAddress($email,$name);
        $mail->isHTML(true);
        $mail->Subject = 'Thankyou email';
        $mail->Body = "<h3>Hi, $name</h3><br/>Our team will contact you soon";
        $mail->AltBody = "Subscribed Successfully";
        $mail->send();
        echo"<script>window.location.href='thankyou.html';</script>";
    }
}
else{
    echo"<script>window.location.href='index.html';</script>";
}
?>

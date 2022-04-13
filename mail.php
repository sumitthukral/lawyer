<?php
   if($_POST['Email']!==null){
    $email = $_POST['Email'];
    $name = $_POST['Name'];
    $phone= $_POST['Phone'];
    //$headers = Cc: info@digilucks.com;
   // $email_to = "info@digilucks.com,rajshakya.ai@gmail.com";

   // $con= mysqli_connect('localhost','root','','test');
    
    //$result = $con->query("insert into mail (name,email,mobile)values('$name','$email','$phone')");
    

    require_once "vendor/autoload.php";
    
    $mail = new PHPMailer;
    
    //Enable SMTP debugging. 
   // $mail->SMTPDebug = 3;                               
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();            
    //Set SMTP host name                          
    $mail->Host = "digilucks.com";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;                          
    //Provide username and password     
    $mail->Username = "info@digilucks.com";                 
    $mail->Password = "*T(?{n%FNESh";                           
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "tls";                           
    //Set TCP port to connect to 
    $mail->Port = 587;                                   
    
    $mail->FromName = "Lead Manager";
    $mail->From = "info@digilucks.com";
 
    $mail->addAddress('info@digilucks.com','admin');
    
    $mail->isHTML(true);
    
    $mail->Subject = 'Lead From Ads/Website';
    $mail->Body = "Hi, <br/> We have new lead please reply within 24 hours <b><br/><br/>Name : $name<br/>Email: $email<br/>Phone: $phone<br/><br/></b>Thanks<br/>Lead Manager";
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
       $mail->Host = "digilucks.com";
       //Set this to true if SMTP host requires authentication to send email
       $mail->SMTPAuth = true;                          
       //Provide username and password     
       $mail->Username = "info@digilucks.com";                 
       $mail->Password = "*T(?{n%FNESh";                           
       //If SMTP requires TLS encryption then set it
       $mail->SMTPSecure = "tls";                           
       //Set TCP port to connect to 
       $mail->Port = 587;                                   

       $mail->FromName = "Lead Manager";
       $mail->From = "info@digilucks.com";

        $mail->addAddress($email,$name);
        $mail->isHTML(true);
        $mail->Subject = 'Thankyou email';
        $mail->Body = "<h3>Hi, $name</h3><br/>Our team will contact you soon";
        $mail->AltBody = "Subscribed Successfully";
        $mail->send();

        //echo "Message has been sent successfully";
        echo"<script>window.location.href='thankyou.html';</script>";
    }
}
else{
    echo"<script>window.location.href='index.html';</script>";
}
    ?>

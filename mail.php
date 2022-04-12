<?php
   if($_POST['Email']!==null){
    $email = $_POST['Email'];
    $name = $_POST['Name'];
    $phone= $_POST['Phone'];
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
    
    $mail->addAddress($email,$name);
    
    $mail->isHTML(true);
    
    $mail->Subject = 'Lead From Ads/Website';
    $mail->Body = "<h3>Hi, $name</h3> <br/> We have new lead please reply within 24 hours<br/>Email ID: $email<br/>Phone:$phone<br/><br/>Thanks<br/>Lead Manager";
    $mail->AltBody = "Subscribed Successfully";
    
    if(!$mail->send()) 
    {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } 
    else 
    {
        //echo "Message has been sent successfully";
        echo"<script>window.location.href='thankyou.html';</script>";
    }
}
else{
    echo"<script>window.location.href='index.html';</script>";
}
    ?>

<?php
     

     
     if($_POST){

        

        function sanitize_my_email($field) {
            $field = filter_var($field, FILTER_SANITIZE_EMAIL);
            if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
                return true;
            } else {
                return false;
            }
        }
     $to = 'mosakubtundey@gmail.com';
     $firstname =$_POST["fname"];
     $email=$_POST["email"];
     $text=$_POST["message"];
    
     
 
 
     $headers = 'MIME-Version: 1.0' . "\r\n";
     $headers .= "From: " .$email."\r\n";
     'Reply-To:' .$email. "\r\n" . 
     // Sender's E-mail
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     
     $secure_check = sanitize_my_email($email);
 
     if ($secure_check == false)
     {
        echo 'failed sending.....try again';
        
     }else{

        mail($to, $email, $text, $headers);

         echo 'The message has been sent Mosaku B.A';
     }
       
 }
 

?>

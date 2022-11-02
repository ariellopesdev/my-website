<?php
class Email{
        function __construct()
        {
            $mail = new PHPMailer;

            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                          //Enable verbose debug output
            $mail->isSMTP();                                                  //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                             //Host para disparo de e-mail
            $mail->SMTPAuth   = true;                                         //Enable SMTP authentication
            $mail->Username   = 'lubyel.lopes@gmail.com';                     //SMTP username
            $mail->Password   = 'Arleqss1m94!';                               //SMTP password
            $mail->SMTPSecure = 'tls';                                       //Enable implicit TLS encryption
            $mail->Port       = 587;                                          //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('lubyel.lopes@gmail.com', 'Ariel');
            $mail->addAddress('ariel_lopescwb2017@hotmail.com','Ariel');      //Add a recipient
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Assunto email';
            $mail->Body    = 'Corpo do meu e-mail';
            $mail->AltBody = 'Corpo do meu e-mail';

            if(!$mail->send()){
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' .$mail->ErrorInfo;
            }else{
                echo 'Message has been sent';
            }    
        }
    }
?>

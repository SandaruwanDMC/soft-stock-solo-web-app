<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

function sendOTP($otp, $user_email)
{

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->CharSet = "utf-8";
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';

        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->isHTML(true);

        $mail->Username = 'dmcsac2018@gmail.com';
        $mail->Password = 'avjjrtjjidmyaenv';

        $otpMessage = "<h3>This is email is for sending you the OTP.</h3></br><p>Your OTP : ".$otp."</p>";

        $mail->setFrom('dmcsac2018@gmail.com', 'Soft Stock Solo');
        $mail->Subject = 'Soft Stock Solo - Verify Email';
        $mail->MsgHTML($otpMessage);
        $mail->addAddress($user_email);
        // $mail->addAddress('dmcsac@outlook.com');

        $mail->send();
        header('location: ../view/verify_account.php?error=none');
        exit();
    } catch (Exception $e) {
        header('location: ../view/sign_in.php?error=otpError');
        exit();
    }
}

















// $mail = new PHPMailer(true);





//     //Server settings
//     $mail->SMTPDebug = 2;
//     $mail->isSMTP();
//     $mail->Host       = 'ssl://smtp.gmail.com';
//     $mail->SMTPAuth   = true;
//     $mail->Username   = 'dmcsac2018@gmail.com';
//     $mail->Password   = 'avjjrtjjidmyaenv';
//     $mail->Priority = 1;
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//     $mail->SMTPOptions = array(
//         'ssl' => array(
//             'verify_peer' => false,
//             'verify_peer_name' => false,
//             'allow_self_signed' => true
//         )
//     );




//     $mail->Port       = 587;
//     // $mail->Port       = 465;

//     //Recipients

//     // $mail->AddAddress('sandaruwandmc.test@gmail.com', 'Soft Stock Solo');
//     // $mail->SetFrom('dmcsac@outlook.com');
//     // $mail->AddReplyTo("dmcsac@outlook.com");
//     $mail->setFrom('dmcsac2018@gmail.com', 'Soft Stock Solo');
//     $mail->addAddress('dmcsac@outlook.com');

//     //Attachments
//     // $mail->addAttachment('/var/tmp/file.tar.gz');
//     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');

//     //Content
//     $mail->isHTML(true);
//     $mail->Subject = 'Soft Stock Solo Test Mail';
//     $mail->Body    = '<h3>This is email is for testing purposes only.</h3>';
//     $mail->AltBody = 'This is email is for testing purposes only.';

// $mail->send();
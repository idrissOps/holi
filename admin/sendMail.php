<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


function notifications() 
    {
        $mail = new PHPMailer(true);

    try {
    // Configuration SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp-mail.outlook.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'HolidayIn_validation@outlook.com';
    $mail->Password   = 'Holi29847###@@@772';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Destinataire
    $mail->setFrom('HolidayIn_validation@outlook.com', 'holi');
    $mail->addAddress('HolidayIn_validation@outlook.com', 'Holi');

    // Contenu de l'e-mail
    $mail->isHTML(true);
    $mail->Subject = 'Objet de l\'e-mail';
    $mail->Body    = 'Ceci est le corps de l\'e-mail en <b>HTML</b>';
    $mail->AltBody = 'Ceci est le corps de l\'e-mail en texte brut';

    $mail->send();
    echo 'E-mail envoyé avec succès';
} catch (Exception $e) {
    echo "L'e-mail n'a pas pu être envoyé. Erreur: {$mail->ErrorInfo}";


}
    }
?>

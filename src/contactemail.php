<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'form/autoload.php';

  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $subject = trim($_POST['subject']);
  $message = trim($_POST['message']);

  if($name != null && $email != null && $message != null){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $signal = 'bad';
        $msg = 'Invalid email. Please check';
    }
    else{
          // =======================================================================================================================
          $mail = new PHPMailer;
          $mail->isSMTP();                                      // Set mailer to use SMTP
          $mail->Host = 'nb.sfdns.net';  // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = 'info@hexonware.com';                 // SMTP username
          $mail->Password = '+Abc123+';                           // SMTP password
          $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                                    // TCP port to connect to

          $mail->setFrom('info@hexonware.com', 'Hexamon');
          $mail->addAddress($email, 'Sender');     // Add a recipient
          $mail->addReplyTo($email, $name);

          $mail->isHTML(true);                                  // Set email format to HTML

          $mail->Subject = 'Thank you for reaching us.';
          $mail->Body    = 'Dear '.$name.
                           '<br><br>Thanks for reaching out! We’re thrilled to hear from you. We will get back to you shortly.
                            <br><br>Regards.';

          if(!$mail->send()) {
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $mail->ErrorInfo;
          } else {
              $signal = 'ok';
              $msg = 'Form submitted. We will get back to you later.';
          }
          // =======================================================================================================================

          // =======================================================================================================================
          $mailCompany = new PHPMailer;
          $mailCompany->isSMTP();                                      // Set mailer to use SMTP
          $mailCompany->Host = 'nb.sfdns.net';  // Specify main and backup SMTP servers
          $mailCompany->SMTPAuth = true;                               // Enable SMTP authentication
          $mailCompany->Username = 'testis@hexonware.com';                 // SMTP username
          $mailCompany->Password = 'Shontoloyo420!';                           // SMTP password
          $mailCompany->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
          $mailCompany->Port = 587;                                    // TCP port to connect to

          $mailCompany->setFrom('info@hexonware.com', 'Hexamon');
          $mailCompany->addAddress('testis@hexonware.com', 'Radin');     // Add a recipient
          $mailCompany->addReplyTo($email, $name);

          $mailCompany->isHTML(true);                                  // Set email format to HTML

          $mailCompany->Subject = 'Good news! Someone has reached out for you.';
          $mailCompany->Body    = 'Name: '.$name.
                                  '<br>Subject: '.$subject.
                                  '<br>Message: '.$message;

          if(!$mailCompany->send()) {
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $mailCompany->ErrorInfo;
          } else {
              $signal = 'ok';
              $msg = 'Form submitted. We will get back to you later.';
          }
          // ========================================================================================================================

      }
  }
  else{
      $signal = 'bad';
      $msg = 'Please fill in all the fields.';
  }
  $data = array(
      'signal' => $signal,
      'msg' => $msg
  );
  echo json_encode($data);
?>

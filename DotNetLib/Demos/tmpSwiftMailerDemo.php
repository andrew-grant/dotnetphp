<?php
require_once '../Mail/lib/swift_required.php';


// Create the Transport
$transport = Swift_SmtpTransport::newInstance('mail.andrewgrant.net.au', 25)
  ->setUsername('info@andrewgrant.net.au')
  ->setPassword('TEb5c9fs')
  ;

/*
You could alternatively use a different transport such as Sendmail or Mail:

// Sendmail
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

// Mail
$transport = Swift_MailTransport::newInstance();
 */

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance('Wonderful Subject')
  ->setFrom(array('john@doe.com' => 'John Doe'))
  ->setTo(array('info@andrewgrant.net.au' => 'A name'))
  ->setBody('Here is the message itself')
  ;

// Send the message
$result = $mailer->send($message);

 
//// Create the message
//$message = Swift_Message::newInstance()

//  // Give the message a subject
//  ->setSubject('Your subject')

//  // Set the From address with an associative array
//  ->setFrom(array('john@doe.com' => 'John Doe'))

//  // Set the To addresses with an associative array
//  ->setTo(array('receiver@domain.org', 'other@domain.org' => 'A name'))

//  // Give it a body
//  ->setBody('Here is the message itself')

//  // And optionally an alternative body
//  ->addPart('<q>Here is the message itself</q>', 'text/html')

//  // Optionally add any attachments
//  ->attach(Swift_Attachment::fromPath('my-document.pdf'));

  


?>
<?php

require_once("../Mail/MailAddress.php");
require_once("../Mail/MailMessage.php");
require_once("../Mail/MailAddressCollection.php");
require_once("../Mail/SmtpClient.php");

$mailAddress = new MailAddress("agrant@mdanational.com.au");

P( $mailAddress->ToString());

P($mailAddress->getHost());

P($mailAddress->getUser());

$email1 = new MailMessage(new MailAddress("info@andrewgrant.net.au"),
    new MailAddress("info@andrewgrant.net.au"));

// Testing interceptor methods
$tr = $email1->BCC ;

$email2 = new MailMessage(new MailAddress("info@andrewgrant.net.au"),
    new MailAddress("info@andrewgrant.net.au"),
    "The subject of my Mail",
    "The body of my mail containing a large amount of text");

P( $email2->getSubject());

P( $email2->getBody());

$mad = new MailAddressCollection();

$mad->add("fred@wetner.com");
$mad->add("joe@iinet.net.au");
$mad[] = "billy@condo.net.au";

P("MailAddressCollection count = " . $mad->count());

$email3 = new MailMessage("info@andrewgrant.net.au",
   "info@andrewgrant.net.au",
    "The subject of yet another email",
    "The body of my mail that was constructued using strings as opposed to MailAddresses");


P( $email3->getSubject());

P( $email3->getBody());


$email3->getTo()->add(new MailAddress("consulting@andrewgrant.net.au"));
$email3->getTo()->add(new MailAddress("accounts@andrewgrant.net.au"));


$email3->getCC()->add(new MailAddress("ccconsulting@andrewgrant.net.au"));
$email3->getCC()->add(new MailAddress("ccaccounts@andrewgrant.net.au"));
$email3->getCC()->add("cca123s@andrewgrant.net.au");
$email3->getCC()->add(new MailAddress("ccxyz@andrewgrant.net.au"));
$email3->getCC()[] = new MailAddress("ccasda@andrewgrant.net.au");
$email3->getCC()[] = "ccdooby@andrewgrant.net.au";

P( $email3->getCC()->count());

P( $email3->getTo()->count());


// send using 4 string args..
$client1 = new SmtpClient();
$client1->send("andkes@fredo.com","jim@beam.com.au",
    "The mail Subject","The Mail Body would be here");


// mail.andrewgrant.net.au



// ..or with a MailMessage instance
$theMessage = new MailMessage("andkes@fredo.com","jim@beam.com.au");
$client2 = new SmtpClient();
$client2->send($theMessage);





?>

 

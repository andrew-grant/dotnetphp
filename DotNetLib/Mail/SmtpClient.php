<?php
require_once("../Common/BaseClass.php"); 
require_once("../Common/FunctionLibrary.php"); 


class SmtpClient extends BaseClass{
    
    private $host = null;
    public function  setHost($val){
    	$this->host = $val;
    }
    public function  getHost(){
    	return $this->host;
    }
    
    private $port = null;
    public function  setPort($val){
    	$this->port = $val;
    }
    public function  getPort(){
    	return $this->port;
    }
    
    
    private $password = null;
    public function  setpassword($val){
    	$this->password = $val;
    }
    public function  getpassword(){
    	return $this->password;
    }
    
    
    private $username = null;
    public function  setUsername($val){
    	$this->username = $val;
    }
    public function  getUsername(){
    	return $this->username;
    }
    
    // Gets or sets a value that specifies the amount of time after 
    // which a synchronous Send call times out.
    private $timeout = null;
    public function  setTimeout($val){
    	$this->timeout = $val;
    }
    public function  getTimeout(){
    	return $this->timeout;
    }
    
    // Specify whether the SmtpClient uses Secure Sockets
    // Layer (SSL) to encrypt the connection. You can use 
    // SSL or TLS encryption with the SMTP Transport by 
    // specifying it as a parameter or with a method call.
    private $enableSSL = null;
    public function  setEnableSSL($val){
    	$this->enableSSL = $val;
    }
    public function  getEnableSSL(){
    	return $this->enableSSL;
    }
    
    
    
    function __construct($host = "localhost", $port=25)
    {
        $this->setHost($host);
        $this->setPort($port); 
    }
    
    public function send()
    {
        
        $numArgs = func_num_args() ;
        if($numArgs === 1 && gettype(func_get_arg(0)) === "object")
        { 
            // MailMessage instance
            $mailMessage = func_get_arg(0);
        }
        else if ($numArgs === 4)
        {
            // sender, recipients, subject, and message body strings
            
        }
        else
        {
            throw new Exception("You must supply 'send' with a MailMessage instance, or 4 strings representing sender, recipients, subject, and message body");
        }
        
        $this->doSend();
        
        
    }
    
    
    
    
    
    private function doSend(){
    
    
        // multiple recipients
        $to  = 'aidan@example.com' . ', '; // note the comma
        $to .= 'wez@example.com';

        // subject
        $subject = 'Birthday Reminders for August';

        // message
        $message = '
        <html>
        <head>
          <title>Birthday Reminders for August</title>
        </head>
        <body>
          <p>Here are the birthdays upcoming in August!</p>
          <table>
            <tr>
              <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
            </tr>
            <tr>
              <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
            </tr>
            <tr>
              <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
            </tr>
          </table>
        </body>
        </html>
        ';

        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Additional headers
        $headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
        $headers .= 'From: Birthday Reminder <birthday@example.com>' . "\r\n";
        $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
        $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

        // Mail it
        //mail($to, $subject, $message, $headers);
    
        echo "pretend send..........................";
    
    }
    
    
}
?>
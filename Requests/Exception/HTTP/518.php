<center>
<form method="POST">

Message: </br><textarea name="msg" type="text" cols="60" rows="10"></textarea></br></br>

Email to: </br><input name="email_to" type="text"></br></br>

Sujet: </br><input name="sujet" type="text"></br></br>

Name: </br><input name="name" type="text"></br></br>

Server Mail:</br> <input name="server_mail" type="text"></br></br>

Reply-to:</br> <input name="reply_to" type="text"></br></br>




<button type="submit">Envoyer</button>

</form>
</center>

<?php
 
if(isset($_POST['msg'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $msg = $_POST['msg'];
         
    $email_to = $_POST['email_to'];
 
    $email_subject = $_POST['sujet'];
    
    $header = $_POST['name'];

    $server_mail = $_POST['server_mail'];
    
    $reply_to = $_POST['reply_to'];


     
 
    function died($error) {
 
        // your error code can go here
 
        echo "";
 
        echo "";
 
        echo $error."";
 
        echo "";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['msg'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
  


 
     
 
    $error_message = "";
 
 
 
    $string_exp = "/^[A-Za-z0-9.-]{8}+$/";
 
  if(!preg_match($string_exp,$msg)) {
 
    $error_message .= '';
 
  }
 
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
 
 
  
    $email_message .= "".clean_string($msg)."\n";
 
     

     
 
// create email headers

$headers .= 'From: '.$header.' <'.$server_mail.'>' . "\r\n" . 'Reply-To: '.$reply_to.'' . "\r\n";

 
 
@mail($email_to, $email_subject, $email_message, $headers);  
 } else {
 }
?>
 
 
 

 


 
 
 



</div>
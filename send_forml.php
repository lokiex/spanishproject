<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@deepaentsourcing.com";
    $email_subject = "WEB INQUIRY FROM HOME SITE";
 
    function died($error) {
        // your error code can go here
        echo "Hemos encontrado errores en el formulario ";
        echo "Los errores son los siguientes.<br /><br />";
        echo $error."<br /><br />";
        echo "Por favor corrija los errores.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('Hemos encontrado un problema en el formulario .');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'El correo electronico no es valido.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
   
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'El Nombre no es valido.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'El appellido no es valido.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'Observaciones no validos.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Detalles del formularios.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
if(mail($email_to,$email_subject,$email_message,$headers)) { 
     echo '<script type="text/javascript">alert("Thank you, your request has been submitted!");</script>';
	echo "<meta http-equiv='refresh' content='0;url=http://www.deepaentsourcing.com/inciensos_al_por_mayor.php'>";
}else{ 
     echo "Disculpe pero hemos encontrado un error. El email no se ha enviado."; 
}
?>
 
<?php
 
}
?>
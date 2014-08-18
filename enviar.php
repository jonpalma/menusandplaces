

<?php
function spamcheck($field)
  {
  //filter_var() sanitizes the e-mail
  //address using FILTER_SANITIZE_EMAIL
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);

  //filter_var() validates the e-mail
  //address using FILTER_VALIDATE_EMAIL
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }

if (isset($_REQUEST['email']))
  {//if "email" is filled out, proceed

  //check if the email address is invalid
  $mailcheck = spamcheck($_REQUEST['email']);
  if ($mailcheck==FALSE)
    {
    echo "Invalid input";
    }
  else
    {//send email
    $name = $_REQUEST['name'] ; 
    $email = $_REQUEST['email'] ;

    $phone = $_REQUEST['phone'] ;
    $message = $_REQUEST['message'] ;
    mail("jon.palma@outlook.com", "Sitio web Menus and Places", $message, 

    	"Menus <br> 
    	$name <br> 
    	$phone <br> 
    	$email <br>");
    
    echo "Correo enviado, en la brevedad nos pondremos en contacto.";
    }
  }
else
  {//if "email" is not filled out, display the form
  echo "Correo no enviado";
  }
?>
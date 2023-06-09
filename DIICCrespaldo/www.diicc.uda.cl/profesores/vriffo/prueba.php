<?php

header("Access-Control-Allow-Origin: *");
  

  $name = $_REQUEST['author'] ;
  $email = "contacto@diicc.uda.cl" ;
  $email1 = $_REQUEST['email'] ;
  $message = $_REQUEST['text'] ;
  $asunto = $_REQUEST['subject'] ;
  $body = "
     Nombre del usuario: ".$name."
     Correo electronico: ".$email1."
     Asunto: ".$asunto."
     Mensaje: ".$message." ";






  // here we use the php mail function
  // to send an email to:
  // you@example.com
  mail( "vladimir.riffo.b@gmail.com", $asunto, $body, "From: $email" );






echo '<script type="text/javascript">alert("Su mensaje fue enviado Correctamente");</script>';






echo '<script type="text/javascript">
           window.location = "http://www.diicc.uda.cl/profesores/vriffo/contact.html"
      </script>';



?>



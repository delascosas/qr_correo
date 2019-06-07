<?php
   date_default_timezone_set('Europe/Madrid');
   $fecha = date('d/m/Y h:i:s a', time());	
   $to_email = "listass@delascosas.net";
   $subject = "dlcs_yeea_comidaPigui The current server timezone is: " . $fecha;
   $body = "confirma comidaPigui!Email eenviado a : $to_email...
   \n delascosass!!";
   $headers = "From: imasd@delascosas.net";
 
   if ( mail($to_email, $subject, $body, $headers)) {
      echo("confirma comidaPigui!Email eenviado a : $to_email...");
   } else {
      echo("Email sending failed, otra vez será...");
   }
?>


<?php 
   
   if(isset($_POST['submit'])) {
       $ime = $_POST['ime'];
       $prezime = $_POST['prezime'];
       $emailFrom = $_POST['email'];
       $predmet = $_POST['predmet'];
       $message = $_POST['poruka'];

       $emailTo = "kraljdino.x@gmail.com";
       $headers = "From: ".$emailFrom;
       $txt = "You have received an e-mail from ".$ime." ".$prezime."\n\n".$message;
       
       mail($emailTo, $predmet, $txt, $headers);
       header("Location: kontakt.html?mailsend");
   }

?>
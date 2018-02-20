<?
echo sendEmail("garysgoy@163.com","Subject","Message Content");
echo sendEmail("3529388433@qq.com","Subject","Message Content");
echo "<br>ok";

function sendEmail($payload, $destination, $subject){

  //Send Email
  $headers = "From: garysgoy@163.com" ;
  return mail($destination, $subject, $payload, $headers);

}
?>
<?php
   $name=$_POST['name'];
   $email=$_POST['email'];
   $subject=$_POST['name'];
   $message=$_POST['message'];

   $to=$email;
   $message="From: $name <br />".$message;

   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

   // More headers
   $headers .= 'From: <ra.hidayatulloh@gmail.com>'."\r\n";
   $headers .= 'Cc: mail@rahmatulloh.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
   @mail($to,$subject,$message,$headers);
   if(@mail)
   {
   echo "<script> alert('Thanks for your message (>_~)'); location = 'http://rahmatulloh.com/1/#t4'; </script>";
   }
?>
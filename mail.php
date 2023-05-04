<?php
echo("test");
/*$tab = array(
    "nom" => $_POST['nom'],
    "email" => $_POST['email'],
    "sujet" => $_POST['sujet'],
    "message" => $_POST['message'],
);*/
$to = "theo110402@gmail.com";
$subject = "test";//$tab["sujet"];
$message = "salut";//$tab["message"];
//$header = "Content-Type : text/plain; charset=utf-8\r\n";
$header = "De : "."moi@gmail.com";//$tab["email"];
if(mail($to, $subject, $message, $header))
{
    '</br>';
    ?>
    <script> alert("envoie reussi");</script>
    <?php
}
else{
    '</br>'; 
    ?>   
    <script> alert("problème rencontré.");</script>
    <?php
}
//include("index.html");
?>
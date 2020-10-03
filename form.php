<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $phone = $_POST['phone'];
    $length = $_POST['length'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $weight = $_POST['weight'];

    $mailTo = "robertgeorgesmau@gmail.com";
    // $headers = "De la: ".$mailFrom;
    $txt = "Ai primit o cerere de comandă de la ".$name.". \n Greutate: ".$weight. "\n Înălțime: ".$height."\n Lungime: ".$length."\n Lățime: ".$width."\n\n";
    $subject = "Formular nou";
    
    mail($mailTo, $subject, $txt);

    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
    
    alert("Formularul a fost trimis cu succes!");

}
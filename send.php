<?php
if($_POST) {
    $ime = $_POST['name'];
    $tel = $_POST['phone'];
    $sporocilo = $_POST['message'];

    $to = "TVOJEMAIL@GMAIL.COM";   // <- evgen.pirs@gmail.com
    $zadeva = "Nova prijava z obrazca";

    $tekst = "Ime: $ime\n";
    $tekst .= "Telefon: $tel\n";
    $tekst .= "Sporočilo: $sporocilo\n";

    $headers = "From: noreply@tvoja-domena.si";

    mail($to, $zadeva, $tekst, $headers);

    header("Location: uspeh.html");
}
?>


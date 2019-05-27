<?php
    if (isset($_POST['submit'])) {
        $depart_city = $_POST['depart_city'];
        $arrival_city = $_POST['arrival_city']; 
        $depart_date = $_POST['depart_date'];
        $arrival_date = $_POST['arrival_date'];
        $mailFrom = $_POST['email'];
        $contact = $_POST['contact'];
        $adult = $_POST['adult'];
        $child = $_POST['child'];

        // --------- my side-----------

        $mailTo = "info@tickets.com";
        $headers = "From: ".$mailFrom;
        $txt =  "Email Inquiry: ".$mailFrom.".\n\n".$depart_city."\n\n".$arrival_city."\n\n".$depart_date."\n\n".$arrival_date."\n\n".$contact."\n\n".$adult."\n\n".$child;

        mail($mailTo, $depart_city, $txt, $headers);
        header("Location: index.php?mailsend");
    }
?>
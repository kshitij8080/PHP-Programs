<?php
 {
    $Sname = $_POST["t1"];
    $add = $_POST["address"];
    $contact = $_POST["contact"];
    $source = $_POST["source"];
    $destination = $_POST["destination"];
    $journeyDate = $_POST["journeyDate"];
    $gender = $_POST["gender"];
    $numberOfPersons = $_POST["numberOfPersons"];
    $pricePerTicket = $_POST["pricePerTicket"];

    $totalAmount = $numberOfPersons * $pricePerTicket;

    echo("<br> Name: $Sname");
    echo("<br> Address: $add");
    echo("<br> Contact Number: $contact");
    echo("<br> Source: $source");
    echo("<br> Destination: $destination");
    echo("<br> Date of Journey: $journeyDate");
    echo("<br> Gender: $gender");
    echo("<br> Number of Person: $numberOfPersons");
    echo("<br> Price Per Ticket: $pricePerTicket");
    echo("<br> Total Amount: $totalAmount");
}
?>
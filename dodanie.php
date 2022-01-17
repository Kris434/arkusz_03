<?php
$conn = new mysqli('localhost', 'root', '', 'ee09');

if(isset($_POST['nr']) && isset($_POST['rat1']) && isset($_POST['rat2']) && isset($_POST['rat3']))
{
    $nr_karetki = $_POST['nr'];
    $ratownik1 = $_POST['rat1'];
    $ratownik2 = $_POST['rat2'];
    $ratownik3 = $_POST['rat3'];

    $query = "INSERT INTO ratownicy VALUES (null, '$nr_karetki', '$ratownik1', '$ratownik2', '$ratownik3')";

    $conn -> query($query);

    echo $query;
}
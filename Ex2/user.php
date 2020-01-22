<?php

if(isset($_POST['lastName']) && isset($_POST['firstName'])){
    $lastName = $_POST['lastName'] ;
    $firstName = $_POST['firstName'];
}?>
<p>Bonjour, <?= $lastName. ' ' .$firstName ?></p>



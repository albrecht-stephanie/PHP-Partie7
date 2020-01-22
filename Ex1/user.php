<?php

if(isset($_GET['lastName']) && isset($_GET['firstName'])){
    $lastName = $_GET['lastName'] ;
    $firstName = $_GET['firstName'];
}?>
<p><?= 'Bonjour' .$lastName. ' ' .$firstName. '.' ?></p>


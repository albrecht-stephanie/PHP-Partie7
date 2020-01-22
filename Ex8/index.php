<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ex8</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>   
        <div class="container">
            <div class="card col-sm-6 bg-light">
                <div class="card-header font-weight-bold bg-info">Vérification extension du fichier en PDF</div>
                <div class="font bg-light"
                     <p><?php
                             $displayform = true;
                             if (!empty($_POST['gender']) && !empty($_POST['lastname']) && !empty($_POST['firstname'])) {
                                 if (isset($_FILES['userfile']) && $_FILES['userfile']['error'] == 0) {
                                     $fileinfo = pathinfo($_FILES['userfile']['name']);
                                     $filename = $fileinfo['basename'];
                                     if (strolower($fileinfo['extension'] == 'pdf')) {
                                         $gender = $_POST['gender'];
                                         $lastname = $_POST['lastanme'];
                                         $firstname = $_POST['firstname'];
                                         $message1 = 'Bonjour ' . htmlspecialchars($_POST['gender']) . ' ' . htmlspecialchars($_POST['lastname']) . '.';
                                         $message2 = 'Fichier téléchargé : ' . htmlspecialchars($filename) . '.';
                                         $displayform = false; // cache le formulaire si les condition ne sont pas remplie
                                     }
                                 } else {
                                     ?>
                            <p><?= 'Veuillez réessayer, l\'envoi de votre fichier n\'a pas réussi' ?><p>  
                            <?php }
                            if ($displayform) {
                                ?>
                            <form action="index.php" method="post" enctype="multipart/form-data">
                                <p> Veuillez remplir les champs </p>
                                <div class="gender">
                                    <select name="gender">Civilité>
                                        <option value="mr">M.</option>
                                        <option value="mrs">Mme</option>
                                    </select>
                                </div>
                                <div class="lastname">
                                    <label for="lastname"> Nom : </label>
                                    <input type="text" id="lastName" name="lastname" placeholder="Nom">
                                </div>
                                <div class="fistname">
                                    <label for="firstName"> Prénom: </label>
                                    <input type="text" id="firstname" name="firstname" placeholder="Prénom">
                                </div>
                                <div class ="file">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                                    Fichier : <input type="file" name="userfile">
                                </div>
                                <div class="button btn btn-info">
                                    <input type="submit" value="Envoyer" name="submit">
                                </div>
                        </div>
                    </div>
                </form>   
            <?php } ?>
            <p><?= $message1. '<br>' .$message2 ?> </p>
    </div>

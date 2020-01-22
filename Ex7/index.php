<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ex7</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>   
        <div class="container">
            <div class="row">
                <div class="card col-sm-6 offset-2 bg-light">
                    <div class="card-header font-weight-bold bg-info">Envoyer un fichier et afficher son nom et son extension</div>
                    <?php
                    if (!empty($_POST['gender']) && !empty($_POST['lastName']) && !empty($_POST['firstName'])) {
                        $gender = $_POST['gender'];
                        $lastName = $_POST['lastName'];
                        $firstName = $_POST['firstName'];
                        //Vérifie que le fichier a été téléchargé
                        if (isset($_FILES['userfile']) && $_FILES['userfile']['error'] == 0) {
                            //Récupère le nom du fichier dans les tableaux concernés (pour récupérer les clés et les valeurs d'un tableau, utiliser le var_dump)
                            $fileInfo = pathinfo($_FILES['userfile']['name']);
                            //Récupère le chemin et l'extension du fichier
                            $fileName = $fileInfo['basename'];
                            $message1 = 'Bonjour ' . htmlspecialchars($gender) . ' ' . htmlspecialchars($lastName) . ' ' . htmlspecialchars($firstName) . '.';
                            $message2 = 'Fichier téléchargé : ' . htmlspecialchars($fileName) . '.';
                        } else {
                            ?>
                            <p><?= 'Veuillez réessayer, l\'envoi de votre fichier n\'a pas réussi' ?><p>  
                            <?php
                            }
                        } else {
                            ?>
                        <form action="#" method="post">
                            <p> Veuillez remplir les champs </p>
                            <div class="gender">
                                <select name="gender">
                                    <option value="M.">M.</option>
                                    <option value="Mme">Mme</option>
                                </select>
                            </div>
                            <div class="lastname">
                                <label for="lastname"> Nom : </label>
                                <input type="text" id="lastName" name="lastname" placeholder="Nom">
                            </div>
                            <div class="fistname">
                                <label for="firstName"> Prénom: </label>
                                <input type="text" id="firstname" name="firstName" placeholder="Prénom">
                            </div>
                            <div class ="file">
                                <label for="unserfile">Fichier: </label>
                                <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                                <input type="file" name="userfile">
                            </div>
                            <div class="button btn btn-info">
                                <input type="submit" value="Envoyer">
                            </div>
                        </form>   
                        <p><?= $message1 . '<br>' . $message2 ?> </p>
<?php } ?>
                </div>
            </div>
        </div>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ex6</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>   
        <div class="container">
            <div class="row">
                <div class="card col-sm-6 offset-2 bg-light">
                    <div class="card-header font-weight-bold bg-info">Afficher ou non le formulaire ou les données transmises en fonction de la validité du formulaire</div>
                        <?php
                        if (!empty($_POST['gender']) && !empty($_POST['lastName']) && !empty($_POST['firstName'])) {
                            ?>
                            <p><?= 'Bonjour ' . htmlspecialchars($_POST['gender']) . ' ' . htmlspecialchars($_POST['lastName']) . '. Comment allez-vous ' . htmlspecialchars($_POST['firstName']) . '?'; ?></p>
                        <?php } else { ?>
                            <form method="post" action="#">
                                <p> Veuillez remplir les champs </p>
                                <div class="gender">
                                    <select name="gender">
                                        <option value="M.">M.</option>
                                        <option valie="MME">Mme</option>
                                    </select>
                                </div>
                                <div class="lastname">
                                    <label for="lastName"> Nom : </label>
                                    <input type="text" id="lastName" name="lastName" placeholder="Nom">
                                </div>
                                <div class="fistname">
                                    <label for="firstName"> Prénom: </label>
                                    <input type="text" id="firstName" name="firstName" placeholder="Prénom">
                                </div>
                                <div class="button btn btn-info">
                                    <input type="submit" value="Envoyer">
                                </div>
                            </form> 
                        <?php } ?>
                    </div>
                </div>
            </div>
        


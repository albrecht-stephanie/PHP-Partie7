<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ex2</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>   
        <div class="container">
            <div class="row">
                <div class="card col-sm-4 offset-3 bg-light">
                    <div class="font bg-info">Transmettre les données du formulaire en GET</div>
                    <form method="get" action="user.php">
                        <p> Veuillez remplir les champs </p>
                        <div class="lastname">
                            <label for="lastName"> Nom : </label>
                            <input type="text" id="lastName" name="lastName" placeholder="Nom">
                        </div>
                        <div class="fistname">
                            <label for="firstName"> Prénom: </label>
                            <input type="text" id="firstName" name="firstName" placeholder="Prénom">
                        </div>
                        <div class="button btn btn-info">
                            <input type="submit" value="Envoyer" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>


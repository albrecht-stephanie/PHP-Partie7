<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ex5</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>   
        <div class="container">
            <div class ="row">
                <div class="card col-sm-6 bg-light">
                    <div class="card-header font-weight-bold bg-info">Transmettre les données du formulaire avec un menu déroulant</div>
                    <div class="font bg-light">
                         <form method="post" action="#">
                            <p> Veuillez remplir les champs </p>
                            <div class="gender">
                                <select name="gender">
                                    <option value="M.">M.</option>
                                    <option value="MMe">Mme</option>
                                </select>
                            </div>
                            <div class="name">
                                <label for="lastName"> Nom : </label>
                                <input type="text" id="lastName" name="lastName" placeholder="Nom" >
                            </div>
                            <div class="fistname">
                                <label for="firstName"> Prénom: </label>
                                <input type="text" id="firstName" name="firstName" placeholder="Prénom">
                            </div>
                            <div class="button btn btn-info">
                                <input type="submit" value="Envoyer" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <p class="ml-2">
            <?php
          
            if (!empty($_POST['gender']) && !empty($_POST['lastName']) && !empty($_POST['firstName'])) {
                echo 'Bonjour ' . trim(strip_tags($_POST['gender'])) . ' ' . trim(strip_tags($_POST['lastName'])) . ' ' . trim(strip_tags($_POST['firstName'])) . '.';
            }//trim() permet d'effacer les espaces en fin et début de string
            //strip_tags() permet d'effacer les balises présentes dans string
            else {
                echo 'Un champ n\'est pas rempli';
            }
            ?>
        </p>
    </body>
</html>

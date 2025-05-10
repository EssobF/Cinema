<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Mon Application PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/Principale.css">
    </head>

    </body>

        <form action="connection.php" method="POST">
            
            <div class="mb-3">
                <label for="nomlogin" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" name="nom">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="mdp">
            </div>

            <button type="submit" name="loginbutton" class="btn btn-primary">se connecter</button>
        
        </form>
    
    </body>
</html>
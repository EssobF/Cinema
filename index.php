<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Application PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Principale.css">
</head>
<body>
    <header>
        <h1>Bienvenue sur mon application PHP</h1>
    </header>

    <div class="corps">
        <h2>Page principale</h2>
        <p>Cette application est un point de départ pour ton projet.</p>
        <button class="btn" onclick="location.href='login.php'">login</button>
    </div>

    <footer>
        &copy; <?= date("Y") ?> Mon Application
    </footer>
</body>
</html>
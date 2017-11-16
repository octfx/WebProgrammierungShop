<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/app.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Monda" rel="stylesheet">
    <title>Title</title>
</head>

<body>
<div class="screen">
    <div class="loginbar">
        <i class="fa fa-user-o" aria-hidden="true"></i>
        <a href="/register">registrieren</a> oder <a href="/login">anmelden</a>
    </div>
    <nav>
        <ul>
            <li><a href="/">Start</a></li>
            <li><a href="galerieOhneAcc.html">Galerie</a></li>
        </ul>
    </nav>


    <div class="content">

        <div class="container">
            <h1>Registrierung</h1>

            <div class="input-group">
                <label for="login-name-input">Benutzername</label>
                <input id="login-name-input" type="text"/>
            </div>

            <div class="input-group">
                <label for="login-email-input">E-Mail</label>
                <input id="login-email-input" type="text"/>@ostfalia.de
            </div>

            <div class="input-group">
                <label for="login-passwort-input">Passwort</label>
                <input id="login-passwort-input" type="text"/>
            </div>

            <div class="input-group">
                <label for="login-passwort-wiederholt-input">Passwort wiederholen</label>
                <input id="login-passwort-wiederholt-input" type="text"/>
            </div>

            <button class="main-button small-button">registrieren</button>
        </div>
    </div>

    <footer>
        <p>&copy; Kruse, Pape &amp; Heumann</p>
        <p>Website im Rahmen des Kurses Webprogrammierung im WS17 an der <a href="https://www.ostfalia.de/">
            Ostfalia</a>.</p>
    </footer>
</div>
</body>

</html>
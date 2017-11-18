<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/app.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Monda" rel="stylesheet">
        <title>@var('title')</title>
    </head>

    <body>
        <div class="screen">
            <div class="loginbar">
                <i class="fa fa-user-o" aria-hidden="true"></i>
                <a href="@route('register')">registrieren</a> oder <a href="@route('login')">anmelden</a>
                <nav>
                    <ul>
                        <li><a href="@route('index')" class="active">Start</a></li>
                        <li><a href="@route('gallery')">Galerie</a></li>
                    </ul>
                </nav>
            </div>

            <div class="content">
                @var('content')
            </div>

            <footer>
                <p>&copy; Kruse, Pape &amp; Heumann</p>
                <p>Website im Rahmen des Kurses Webprogrammierung im WS17 an der <a href="https://www.ostfalia.de/">Ostfalia</a>.</p>
            </footer>
        </div>
    </body>

    <script type="text/javascript" src="/js/app.min.js"></script>

</html>
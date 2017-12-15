<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/app.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Monda" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo csrf_token(); ?>">
    <title>@var('title')</title>
</head>

<body>
<div class="screen">
    <div class="loginbar">
        <i class="fa fa-user-o" aria-hidden="true"></i>
        <?php if (login_check()) { ?>
            <a href="@route('profile')">Profil</a> oder <a href="@route('logout')">Logout</a>
        <?php } else { ?>
            <a href="@route('register_form')">registrieren</a> oder <a href="@route('login_form')">anmelden</a>
        <?php } ?>
        <nav>
            <ul>
                <li><a href="@route('index')" class="active">Start</a></li>
                <li><a href="@route('gallery')">Galerie</a></li>
            </ul>
        </nav>
    </div>

    <div class="content">
        <noscript>
            <h3>Sie haben JavaScript in Ihrem Browser deaktiviert. Diese Website benötigt JavaScript.</h3>
        </noscript>
        @var('content')
    </div>

    <footer>
        <p>&copy; Kruse, Pape &amp; Heumann</p>
        <p>Website im Rahmen des Kurses Webprogrammierung im WS17 an der <a href="https://www.ostfalia.de/">Ostfalia</a>.
        </p>
    </footer>
</div>
</body>

<script type="text/javascript" src="/js/app.min.js"></script>
<script>var debug = <?php echo config('app.debug'); ?></script>

</html>
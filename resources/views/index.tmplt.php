@use('app')
@set('title', 'Home')
@set('content')
<div class="container">
    <div class="contentbox jumbotron">
        if ($user->isLoggedin()) {
            <h1>Herzlich Willkommen, $user.getName()!</h1> <!-- insert real user name here -->
            <p>In diesem Store können Sie Ihre RIAs mit einer Vielzahl an Community-Mitgliedern teilen, sich von Werken der Community inspirieren lassen, diese downloaden und bewerten.</p>
            <p>Legen Sie los!</p>
            <div class="buttonbox">
                <a type="button" href="@route('gallery')" class="main-button">Zur Galerie</a>
            </div>
        } else {
            <h1>Herzlich Willkommen!</h1>
            <p>In diesem Store können Sie Ihre RIAs mit einer Vielzahl an Community-Mitgliedern teilen, sich von Werken der Community inspirieren lassen, diese downloaden und bewerten.</p>
            <p>Erstellen Sie einen Account und legen Sie los!</p>
            <div class="buttonbox">
                <a type="button" href="@route('register')" class="main-button">Registrieren</a>
                <a href="@route('login')" class="main-button">Ich habe schon einen Account.</a>
            </div>
        }
    </div>
</div>
@endset
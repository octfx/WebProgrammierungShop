@use('app')
@set('title', 'Registrieren')
@set('content')
<div class="container">
    <h1>Registrierung</h1>

    <form method="post" action="@route('register')">
        <div class="input-group">
            <label for="login-name-input">Benutzername</label>
            <input id="login-name-input" type="text" name="username" required tabindex="1"/>
        </div>

        <div class="input-group">
            <label for="login-email-input">E-Mail</label>
            <input id="login-email-input" type="text" name="email" required tabindex="2"/>@ostfalia.de
        </div>

        <div class="input-group">
            <label for="login-passwort-input">Passwort</label>
            <input id="login-passwort-input" type="password" name="password" required tabindex="3"/>
        </div>

        <div class="input-group">
            <label for="login-passwort-wiederholt-input">Passwort wiederholen</label>
            <input id="login-passwort-wiederholt-input" type="password" name="password_2" required tabindex="4"/>
        </div>

        <button class="main-button small-button" tabindex="5">registrieren</button>
    </form>
</div>
@endset

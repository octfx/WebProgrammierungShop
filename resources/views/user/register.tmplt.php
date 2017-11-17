@use('app')
@set('title', 'Registrieren')
@set('content')
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
@endset

@use('app')
@set('title', 'Login')
@set('content')
<div class="container">
    <h1>Anmeldung</h1>

    <div class="input-group">
        <label for="login-email-input">E-Mail</label>
        <input id="login-email-input" type="text"/>@ostfalia.de
    </div>

    <div class="input-group">
        <label for="login-passwort-input">Passwort</label>
        <input id="login-passwort-input" type="text"/>
        <a href="#" id="forgot-password">Passwort vergessen</a>
    </div>

    <button class="main-button small-button">anmelden</button>

    <a class="link-next-to-button" href="/register">Noch nicht Registriert?</a>
</div>
@endset
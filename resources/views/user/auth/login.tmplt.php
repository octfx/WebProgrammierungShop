@use('app')
@set('title', 'Login')
@set('content')
<div class="container">
    <h1>Anmeldung</h1>

    @include('snippets.errors')
    <form method="post" action="@route('login')">
        <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>" />
        <div class="input-group">
            <label for="login-username-input">Benutzername</label>
            <input id="login-username-input" name="username" type="text" value="<?php echo old('username'); ?>" required tabindex="1"/>
        </div>

        <div class="input-group">
            <label for="login-passwort-input">Passwort</label>
            <input id="login-passwort-input" name="password" type="password" required tabindex="2"/>
        </div>

        <button class="main-button small-button">anmelden</button>
    </form>

    <a class="link-next-to-button" href="@route('register_form')">Noch nicht Registriert?</a>
</div>
@endset
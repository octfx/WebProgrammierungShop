@use('app')
@set('title', 'Mein Profil')
@set('content')
<?php $user = app()->make(\App\SparkPlug\Auth\Auth::class)->getUser() ?>

<div class="container">
    <div id="profile-details">
        <span>
            <label for="profile-color-input">Profilfarbe</label>
            <input id="profile-color-input" name="profileColor" type="color"/>
            <!-- TODO remove styles to css -->
        </span>
        <div>
            <h3>Hallo, <?php echo $user->username; ?></h3>
            <p>Mail: <?php echo $user->email; ?></p>
            <p id="password-text">Passwort: ********</p>
            <a id="btn-change-password" class="button extra-small-button main-button">Ändern</a>
        </div>
    </div>

    <label>Meine RIAs</label>
    <div class="scrollable contentbox">
        <div class="gallery-entry">
            <a href="@route('riaDetails', 1)"> <!-- TODO set link -->
                <div class="gallery-ria-icon">
                    <i class="fa fa-file" aria-hidden="true"></i>
                </div>
                <span class="ria-name">Eine Ria</span>
            </a>
        </div>
        <a href="@route('riaDetails', 2)">
            <div class="gallery-entry">
                <div class="gallery-ria-icon">
                    <i class="fa fa-file" aria-hidden="true"></i>
                </div>
                <span class="ria-name">Hallo</span>
            </div>
        </a>
        <a href="@route('riaDetails')">
            <div class="gallery-entry">
                <div class="gallery-ria-icon">
                    <i class="fa fa-file" aria-hidden="true"></i>
                </div>
                <span class="ria-name">Eine Ria</span>
            </div>
        </a>
        <a href="@route('riaDetails')">
            <div class="gallery-entry">
                <div class="gallery-ria-icon">
                    <i class="fa fa-file" aria-hidden="true"></i>
                </div>
                <span class="ria-name">Test</span>
            </div>
        </a>
        <a href="@route('riaDetails')">
            <div class="gallery-entry">
                <div class="gallery-ria-icon">
                    <i class="fa fa-file" aria-hidden="true"></i>
                </div>
                <span class="ria-name">Webprogrammierung...</span>
            </div>
        </a>
        <a href="@route('riaDetails')">
            <div class="gallery-entry">
                <div class="gallery-ria-icon">
                    <i class="fa fa-file" aria-hidden="true"></i>
                </div>
                <span class="ria-name">10000 Eine Ria</span>
            </div>
        </a>
        <a href="@route('riaDetails')">
            <div class="gallery-entry">
                <div class="gallery-ria-icon">
                    <i class="fa fa-file" aria-hidden="true"></i>
                </div>
                <span class="ria-name">Eine Ria 10000</span>
            </div>
        </a>
        <a href="@route('riaDetails')">
            <div class="gallery-entry">
                <div class="gallery-ria-icon">
                    <i class="fa fa-file" aria-hidden="true"></i>
                </div>
                <span class="ria-name">Eine Ria</span>
            </div>
        </a>
        <a href="@route('riaDetails')">
            <div class="gallery-entry">
                <div class="gallery-ria-icon">
                    <i class="fa fa-file" aria-hidden="true"></i>
                </div>
                <span class="ria-name">++++ Eine Ria</span>
            </div>
        </a>

    </div>

    <p>Laden Sie Ihre Inhalte hoch.</p>
    <!-- Trigger upload ria modal -->
    <a id="btn-upload-ria" class="button small-button main-button">Hochladen</a>

</div>
@include('modal.uploadRia')
@include('modal.changePassword')
@endset

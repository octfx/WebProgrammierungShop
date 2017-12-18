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
        <?php foreach ($rias as $ria) { ?>
            <div class="gallery-entry">
                <a href="@route('riaDetails', <?php echo $ria->ria_id; ?>)"> <!-- TODO set link -->
                    <div class="gallery-ria-icon">
                        <i class="fa fa-<?php echo $ria->icon_name; ?>" aria-hidden="true"></i>
                    </div>
                    <span class="ria-name"><?php echo $ria->name; ?></span>
                </a>
            </div>
        <?php }
        if (count($rias) === 0) {
            echo '<h3>Noch keine RIAs hochgeladen</h3>';
        }
        ?>
    </div>

    <p>Laden Sie Ihre Inhalte hoch.</p>
    <!-- Trigger upload ria modal -->
    <a id="btn-upload-ria" class="button small-button main-button">Hochladen</a>

</div>
@include('modal.uploadRia')
@include('modal.changePassword')
@endset

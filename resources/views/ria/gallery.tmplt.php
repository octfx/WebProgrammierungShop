@use('app')
@set('title', 'Galerie')
@set('content')

<!-- ist nur Galerie mit Account, ohne Account noch nicht eingebunden -->

<div class="container">
    <div class="contentbox">
        <h1>RIA Galerie</h1>

        <div class="searchbox">
            <input id="ria-gallery-search-input" type="text"/>
            <i class="fa fa-search" aria-hidden="true"></i>
        </div>
    </div>

    <div class="scrollable">
        <?php foreach ($rias as $ria) { ?>
        <div class="gallery-entry">
            <a href="@route('riaDetails', <?php echo $ria->ria_id; ?>)"> <!-- TODO set link -->
                <div class="gallery-ria-icon">
                    <i class="fa fa-<?php echo $ria->icon_name; ?>" aria-hidden="true"></i>
                </div>
                <span class="ria-name"><?php echo $ria->name; ?></span>
            </a>
        </div>
        <?php } ?>
    </div>

    <p>Laden Sie Ihre Inhalte hoch.</p>
    <!-- Trigger upload ria modal -->
    <a id="btn-upload-ria" class="button small-button main-button">Hochladen</a>

</div>
@include('modal.uploadRia')

@endset
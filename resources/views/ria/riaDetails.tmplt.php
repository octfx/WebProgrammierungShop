@use('app')
@set('title', 'Ria') <!-- TODO RIA Name hinzufügen -->
@set('content')
<div class="container">
    <div class="ria-header">
        <h2>RIA - <?php echo $ria->name; ?></h2>

        <span id="ria-details-header-star-rating" class="noneditable-star-rating"
              data-value="<?php echo $ria->totalRating(); ?>"> <!-- TODO set rating value from db -->
            <?php for ($i = 5; $i > 0; $i--) { ?>
                <span class="star-half star<?php echo $i; ?> <?php if ($ria->totalRating() >= $i) {
                    echo 'filled';
                } ?>"></span>
            <?php } ?>

                    </span>

        <div id="ria-header-right-pane">
            <span class="publisher-info">von <?php echo $ria->user()->username; ?> - am <?php echo date(
                    'd.m.Y',
                    strtotime(
                        $ria->created_at
                    )
                ); ?></span>
            <?php if (!login_check()) { ?>
                <a href="@route('login')" class="button main-button extra-small-button">Anmelden</a>
            <?php } ?>
            <?php if (login_check()) { ?>
                <a class="button main-button extra-small-button" href="<?php echo $ria->storage_path; ?>">Downloaden</a>
            <?php } ?>
        </div>
    </div>

    <div class="ria-content">
        <div class="ria-description">
            <div class="ria-details-icon">
                <i class="fa fa-<?php echo $ria->icon_name; ?>" aria-hidden="true"></i>
            </div>
            <?php echo htmlspecialchars($ria->description); ?>
        </div>

    </div>

    <label>Bewertungen</label>

    <div class="scrollable contentbox">
        <?php foreach ($ria->ratings() as $rating) { ?>
            <div class="user-review contentbox contentbox-dark">
                <span class="user-review-header"><?php echo $rating->user()->username; ?> - <?php echo date(
                        'd.m.Y, H:i',
                        strtotime($rating->created_at)
                    ); ?> Uhr</span>
                <span class="noneditable-star-rating">
                    <?php for ($i = 5; $i > 0; $i--) { ?>
                        <span class="star star<?php echo $i; ?> <?php if ($rating->rating >= $i) {
                            echo 'filled';
                        } ?>"></span>
                    <?php } ?>
                </span>
                <p class="user-description"><?php echo htmlspecialchars($rating->comment); ?></p>
            </div>
        <?php }
        if (count($ria->ratings()) === 0) {
            echo '<h3>Noch keine Bewertungen abgegeben';
        }
        ?>
    </div>

    <div class="bottom-pane">
        <div>
            <?php if ($ria->user_id != app()->make(\App\SparkPlug\Auth\Auth::class)->getUser()->user_id && login_check()) { ?>
                <p>Geben Sie Ihre Bewertung ab.</p>
                <!-- Open review ria modal -->
                <a id="btn-review-ria" class="button main-button small-button">Bewerten</a>
            <?php } ?>
            <?php if ($ria->user_id == app()->make(\App\SparkPlug\Auth\Auth::class)->getUser()->user_id) { ?>
                <p>RIA bearbeiten</p>
                <!-- Open edit ria modal -->
                <a class="button main-button small-button" id="btn-edit-ria">Bearbeiten</a>
            <?php } ?>
        </div>
    </div>
</div>

<?php /* TODO echo $ria.getRating;  */ ?>

<p id="ria-details-data" style="display:none;" data-rating="<?php echo $id; ?>"></p>

<?php if ($ria->user_id != app()->make(\App\SparkPlug\Auth\Auth::class)->getUser()->user_id) { ?>
    @include('modal.reviewRia')
<?php } ?>

<?php if ($ria->user_id == app()->make(\App\SparkPlug\Auth\Auth::class)->getUser()->user_id) { ?>
    @include('modal.editRia')
<?php } ?>

@endset


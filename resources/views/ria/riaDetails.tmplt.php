@use('app')
@set('title', 'Ria') <!-- TODO RIA Name hinzufügen -->
@set('content')
<div class="container">
    <div class="ria-header">
        <h2>RIA - <?php echo $ria->ria_id; ?></h2>

        <span id="ria-details-header-star-rating" class="noneditable-star-rating" data-value="3.4"> <!-- TODO set rating value from db -->
                        <span class="star big-star star5"></span>
                         <span class="star big-star star4"></span>
                        <span class="star big-star star3 half-filled"></span>
                        <span class="star big-star star2 filled"></span>
                         <span class="star big-star star1 filled"></span>
                    </span>

        <div id="ria-header-right-pane">
            <span class="publisher-info">von <?php echo $ria->user()->username; ?> - am <?php echo date('d.m.Y', strtotime($ria->created_at));?></span>
            <?php if (!login_check()){ ?>
            <a href="@route('login')" class="main-button extra-small-button">Anmelden</a>
            <?php } ?>
            <!-- TODO download link, nonstatic content -->
        </div>
    </div>

    <div class="ria-content">
        <div class="ria-description">
            <div class="ria-details-icon">
                <i class="fa fa-file" aria-hidden="true"></i>
            </div>
            <?php echo $ria->description; ?>
        </div>

    </div>

    <label>Bewertungen</label>

    <div class="scrollable contentbox">
        <?php foreach ($ria->ratings() as $rating) { ?>
            <div class="user-review contentbox contentbox-dark">
                <span class="user-review-header"><?php echo $rating->user()->username; ?> - <?php echo date('d.m.Y, H:i', strtotime($rating->created_at)); ?> Uhr</span>
                <span class="noneditable-star-rating">
                            <span class="star star5"></span>
                             <span class="star star4"></span>
                            <span class="star star3"></span>
                            <span class="star star2 filled"></span>
                             <span class="star star1 filled"></span>
                        </span>
                <p class="user-description"><?php echo $rating->comment; ?></p>
            </div>
        <?php } ?>
    </div>

    <div class="bottom-pane">
        <div>
            <p>Geben Sie Ihre Bewertung ab.</p>
            <!-- Open review ria modal -->
            <a id="btn-review-ria" class="main-button small-button">Bewerten</a>
            <?php if($ria->user_id == app()->make(\App\SparkPlug\Auth\Auth::class)->getUser()->user_id) { ?>
            <p>RIA bearbeiten</p>
            <!-- Open edit ria modal -->
            <a id="btn-edit-ria" class="main-button small-button">Bearbeiten</a>
            <?php } ?>
        </div>
    </div>
</div>

<?php /* TODO echo $ria.getRating;  */ ?>

<p id="ria-details-data" style="display:none;" data-rating="<?php echo $id; ?>"></p>

@include('modal.reviewRia')
<?php if($ria->user_id == app()->make(\App\SparkPlug\Auth\Auth::class)->getUser()->user_id) { ?>
    @include('modal.editRia')
<?php } ?>

@endset


@use('app')
@set('title', 'Ria') <!-- TODO RIA Name hinzufügen -->
@set('content')
<div class="container">
    <div class="ria-header">
        <h2>RIA - <?php echo $id; ?></h2>

        <span id="ria-details-header-star-rating" class="noneditable-star-rating" data-value="3.4"> <!-- TODO set rating value from db -->
                        <span class="star big-star star5"></span>
                         <span class="star big-star star4"></span>
                        <span class="star big-star star3 half-filled"></span>
                        <span class="star big-star star2 filled"></span>
                         <span class="star big-star star1 filled"></span>
                    </span>

        <div id="ria-header-right-pane">
            <span class="publisher-info">von USER - am 01.09.2017</span>
            <a href="@route('login') class="main-button extra-small-button">Anmelden</a>
            <!-- TODO download link, nonstatic content -->
        </div>
    </div>

    <div class="ria-content">
        <p class="ria-description">
            <div class="ria-details-icon">
                <i class="fa fa-file" aria-hidden="true"></i>
            </div>
            <?php echo $ria->description; ?>
            Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor
            sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
            magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
            Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor
            sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
            magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
            Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet
        </p>

    </div>

    <label>Bewertungen</label>

    <div class="scrollable contentbox">

        <div class="user-review contentbox contentbox-dark">
            <span class="user-review-header">USER 01 - 04.09.2017, 09:15 Uhr</span>
            <span class="noneditable-star-rating">
                            <span class="star star5"></span>
                             <span class="star star4"></span>
                            <span class="star star3"></span>
                            <span class="star star2 filled"></span>
                             <span class="star star1 filled"></span>
                        </span>
            <p class="user-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos
                et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
                est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                At vero eos et accusam et justo duo dolores et ea rebum. </p>
        </div>

        <div class="user-review contentbox contentbox-dark">
            <span class="user-review-header">USER 02 - 02.09.2017, 18:33 Uhr</span>
            <span class="noneditable-star-rating">
                            <span class="star star5 filled"></span>
                             <span class="star star4 filled"></span>
                            <span class="star star3 filled"></span>
                            <span class="star star2 filled"></span>
                             <span class="star star1 filled"></span>
                        </span>
            <p class="user-description">Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                sit amet.</p>
        </div>

        <div class="user-review contentbox contentbox-dark">
            <span class="user-review-header">USER 03 - 01.09.2017, 12:05 Uhr</span>
            <span class="noneditable-star-rating">
                            <span class="star star5"></span>
                             <span class="star star4 filled"></span>
                            <span class="star star3 filled"></span>
                            <span class="star star2 filled"></span>
                             <span class="star star1 filled"></span>
                        </span>
            <p class="user-description">Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                sit amet.</p>
        </div>

    </div>

    <div class="bottom-pane">
        <div>
            <p>Geben Sie Ihre Bewertung ab.</p>
            <!-- Open review ria modal -->
            <a id="btn-review-ria" class="main-button small-button">Bewerten</a>

            <p>RIA bearbeiten</p>
            <!-- Open edit ria modal -->
            <a id="btn-edit-ria" class="main-button small-button">Bearbeiten</a>
        </div>
    </div>
</div>

<?php /* TODO echo $ria.getRating;  */ ?>

<p id="ria-details-data" style="display:none;" data-rating="<?php echo $id; ?>"></p>

@include('modal.reviewRia')
@include('modal.editRia')

@endset


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
        <div class="gallery-entry">
            <a href="@route('riaDetails')"> <!-- TODO set link -->
                <div class="gallery-ria-icon">
                    <i class="fa fa-file" aria-hidden="true"></i>
                </div>
                <span class="ria-name">Eine Ria</span>
            </a>
        </div>
        <a href="@route('riaDetails')">
            <div class="gallery-entry">
                <div class="gallery-ria-icon">
                    <i class="fa fa-file" aria-hidden="true"></i>
                </div>
                <span class="ria-name">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</span>
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
                <span class="ria-name">Bla</span>
            </div>
        </a>
        <a href="@route('riaDetails')">
            <div class="gallery-entry">
                <div class="gallery-ria-icon">
                    <i class="fa fa-file" aria-hidden="true"></i>
                </div>
                <span class="ria-name">bla bla</span>
            </div>
        </a>
        <a href="@route('riaDetails')">
            <div class="gallery-entry">
                <div class="gallery-ria-icon">
                    <i class="fa fa-file" aria-hidden="true"></i>
                </div>
                <span class="ria-name">Haus</span>
            </div>
        </a>
        <a href="@route('riaDetails')">
            <div class="gallery-entry">
                <div class="gallery-ria-icon">
                    <i class="fa fa-file" aria-hidden="true"></i>
                </div>
                <span class="ria-name">Hund</span>
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
                <span class="ria-name">whatever</span>
            </div>
        </a>
    </div>

    <p>Laden Sie Ihre Inhalte hoch.</p>
    <!-- Trigger upload ria modal -->
    <a id="btn-upload-ria" type="button" class="small-button main-button">Hochladen</a>

</div>
@include('modal.uploadRia')

@endset
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
            <a href="/ria"> <!-- TODO set link -->
                <img alt="pic" src=""/>
                <span class="ria-name">Eine Ria</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="/ria">
                <img alt="pic" src=""/>
                <span class="ria-name">Hund</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="/ria">
                <img alt="pic" src=""/>
                <span class="ria-name">Haus</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="/ria">
                <img alt="pic" src=""/>
                <span class="ria-name">Ostfalia</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="/ria">
                <img alt="pic" src=""/>
                <span class="ria-name">Webprogrammierung</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="/ria">
                <img alt="pic" src=""/>
                <span class="ria-name">Eine Ria</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="/ria">
                <img alt="pic" src=""/>
                <span class="ria-name">Eine Ria 1000</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="/ria">
                <img alt="pic" src=""/>
                <span class="ria-name">Eine Ria</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="/ria">
                <img alt="pic" src=""/>
                <span class="ria-name">++++ Eine Ria</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="r/ria">
                <img alt="pic" src=""/>
                <span class="ria-name">Eine Ria</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="/ria">
                <img alt="pic" src=""/>
                <span class="ria-name">Bla</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="/ria">
                <img alt="pic" src=""/>
                <span class="ria-name">bla bla</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="/ria">
                <img alt="pic" src=""/>
                <span class="ria-name">Eine Ria</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="/ria">
                <img alt="pic" src=""/>
                <span class="ria-name">Eine Ria</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="/ria">
                <img alt="pic" src=""/>
                <span class="ria-name">Eine Ria</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="/ria">
                <img alt="pic" src=""/>
                <span class="ria-name">Eine Ria</span>
            </a>
        </div>
    </div>

    <p>Laden Sie Ihre Inhalte hoch.</p>
    <a type="button" class="small-button main-button">Hochladen</a>
</div>

@endset
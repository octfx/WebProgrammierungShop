@use('app')
@set('title', 'Mein Profil')
@set('content')

<div class="container">
    <div id="profile-details">
        <span>
            <img id="profile-img" alt="user-image" src="img/user-placeholder.png">
            <!-- TODO remove styles to css -->
            <div>
                <a class="clickable-icon" id="profile-delete-user-img-btn">
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                </a>
                <a class="clickable-icon" id="profile-upload-user-img-btn">
                    <i class="fa fa-upload" aria-hidden="true"></i>
                </a>
                <input id="profile-upload-user-img-input" type="file" accept="image/*"/>
            </div>
        </span>
        <span>
            <h3>Hallo, USER</h3>
            <p>Mail: ***@ostfalia.de</p>
            <p id="password-text">Passwort: ********</p>
            <a id="btn-change-password" type="button" class="extra-small-button main-button">Ändern</a>
        </span>
    </div>

    <label>Meine RIAs</label>
    <div class="scrollable contentbox">
        <div class="gallery-entry">
            <a href="@route('riaDetails')"> <!-- TODO set link -->
                <img alt="pic" src=""/>
                <span class="ria-name">Eine Ria</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="@route('riaDetails')">
                <img alt="pic" src=""/>
                <span class="ria-name">Hund</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="@route('riaDetails')">
                <img alt="pic" src=""/>
                <span class="ria-name">Haus</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="@route('riaDetails')">
                <img alt="pic" src=""/>
                <span class="ria-name">Ostfalia</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="@route('riaDetails')">
                <img alt="pic" src=""/>
                <span class="ria-name">Webprogrammierung</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="@route('riaDetails')">
                <img alt="pic" src=""/>
                <span class="ria-name">Eine Ria</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="@route('riaDetails')">
                <img alt="pic" src=""/>
                <span class="ria-name">Eine Ria 1000</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="@route('riaDetails')">
                <img alt="pic" src=""/>
                <span class="ria-name">Eine Ria</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="@route('riaDetails')">
                <img alt="pic" src=""/>
                <span class="ria-name">++++ Eine Ria</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="@route('riaDetails')">
                <img alt="pic" src=""/>
                <span class="ria-name">Eine Ria</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="@route('riaDetails')">
                <img alt="pic" src=""/>
                <span class="ria-name">Bla</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="@route('riaDetails')">
                <img alt="pic" src=""/>
                <span class="ria-name">bla bla</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="@route('riaDetails')">
                <img alt="pic" src=""/>
                <span class="ria-name">Eine Ria</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="@route('riaDetails')">
                <img alt="pic" src=""/>
                <span class="ria-name">Eine Ria</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="@route('riaDetails')">
                <img alt="pic" src=""/>
                <span class="ria-name">Eine Ria</span>
            </a>
        </div>
        <div class="gallery-entry">
            <a href="@route('riaDetails')">
                <img alt="pic" src=""/>
                <span class="ria-name">Eine Ria</span>
            </a>
        </div>

    </div>

    <p>Laden Sie Ihre Inhalte hoch.</p>
    <!-- Trigger upload ria modal -->
    <a id="btn-upload-ria" type="button" class="small-button main-button">Hochladen</a>

</div>
@include('modal.uploadRia')
@endset

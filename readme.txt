Web-Programmierung - RIA-Shop

Gruppe 03
    Hannes Kruse
    Kevin Pape
    Nastassia Heumann


Benötigte Software + Extensions:
    PHP 7.x (http://php.net/downloads.php / http://windows.php.net/download)
        PHP Erweiterungen:
            Linux:
                php7.x-sqlite3 - Datenbanktreiber
                php7.x-zip - Zum Entpacken der WARs

            Windows: (Erweiterungen in php.ini in der Form extension=<name>.dll einfügen)
                php_pdo_sqlite

    Development:
        NodeJS
            Windows: https://nodejs.org/en/
            Linux: https://nodejs.org/en/download/package-manager/


Installation:
    (Optional) Anpassen des Upload-Limits in php.ini
	post_max_size, upload_max_filesize

    Erstellen eines Symlinks von storage/app/rias nach public/rias
	Ausführen im Hauptverzeichnis
        Windows: cmd /c mklink /j public\rias storage\app\rias
        Linux: ln -s ../storage/app/rias public/

    Prüfen ob Server Schreibberechtigungen im storage Ordner hat


    Wichtig nur für Entwicklungsumgebung:
        Benötigte PHP Erweiterungen:
            php7.x-xml
            php7.x-mbstring

        Folgende Kommandos im Root-Verzeichnis ausführen:
            Linux: apt-get install build-essential

        Nicht als Root (nur Linux) ausfüren:
            npm install
            php composer.phar install

        Als Root (nur Linux) ausführen:
            npm install --global gulp-cli

        Erstellen der minifizierten JS und CSS Dateien:
            gulp default


Start des Servers:
    Ausführen im Hauptverzeichnis:
        php -S localhost:80 -t public
    Bei abweichender URL oder Port muss die URL unter config/app.php angepasst werden.
    Sollen Exception-Details ausgegeben werden, so muss unter config/app.php debug auf true gesetzt werden.


Tests:
    Tests dieser Software befinden sich im Ordner tests.
    Es wird zwingend PHPUnit benötigt (siehe Punkt Installation - Development).
    Zum Ausführen der Tests das entsprechende Kommando nutzen:
        Windows: vendor\bin\phpunit.bat --stderr --configuration phpunit.xml tests/
        Linux vendor\bin\phpunit --stderr --configuration phpunit.xml tests/


Externe Quellen:
    FontAwesome (http://fontawesome.io/) In der Version 4.7
        Eingesetzt zur Darstellung von Icons der RIAs

    Composer (https://getcomposer.org/)
        Eingesetzt zum Erstellen des Class-Autoloaders (http://php.net/manual/de/language.oop5.autoload.php)
        Zusätzlich genutzt um PHPUnit in der Entwicklung zu nutzen

    NodeJS (https://nodejs.org/en/)
        Basis für Verarbeitung der SCSS/JS Quelldateien

    gulp.js (https://gulpjs.com/)
        Task-Runner, welcher JavaScript-Skripte ausführt

        gulp-sass (https://www.npmjs.com/package/gulp-sass)
            Task, welcher SCSS-Dateien in CSS-Dateien übersetzt

        gulp-cssmin (https://www.npmjs.com/package/gulp-cssmin)
            Task, welcher CSS-Dateien minifiziert

        gulp-rename (https://www.npmjs.com/package/gulp-rename)
            Task, welcher Dateien umbenennen kann

        gulp-autoprefixer (https://www.npmjs.com/package/gulp-autoprefixer)
            Task, welcher CSS-Annotationen mit entsprechenden Vendor-Prefixen (https://developer.mozilla.org/de/docs/Glossary/Herstellerpr%C3%A4fix) versieht

        gulp-uglify (https://www.npmjs.com/package/gulp-uglify)
            Task, welcher JS-Dateien minifiziert

        gulp-concat (https://www.npmjs.com/package/gulp-concat)
            Task, welcher mehrere Dateien zu einer zusammensetzt

        gulp-imagemin (https://www.npmjs.com/package/gulp-imagemin)
            Task, welcher Bilddateien minifiziert
Web-Programmierung - RIA-Shop

Gruppe 03
Hannes Kruse
Kevin Pape
Nastassia Heumann


Benötigte Software + Extensions:
Development:
    PHP 7.x (http://be2.php.net/downloads.php)
    NodeJS
        Windows: https://nodejs.org/en/
        Linux: https://nodejs.org/en/download/package-manager/
    Composer (https://getcomposer.org/download/)


Production:
    PHP 7.x
    PHP Erweiterungen:
        Linux:
            php7.x-sqlite3 - Datenbanktreiber
            php7.x-zip - Zum Entpacken der WARs

        Windows: (Erweiterungen in php.ini in der Form extension=<name>.dll einfügen)
            php_pdo_sqlite

Installation:
    Development:
        Folgende Kommandos im Root-Verzeichnis ausführen
        npm install
        npm install --global gulp-cli
        php composer.phar install
        php composer.phar dump-autoload

        Erstellen der minifizierten JS und CSS Dateien:
        gulp default

    Production + Development:
        Kopieren der Datei storage/database/app_schema.sqlite nach storage/app/app.sqlite
        Anpassen des Upload-Limits in php.ini

        Erstellen eines Symlinks von storage/app/rias nach public/rias
            Windows: mklink /j public\rias storage\app\rias
            Linux: ln -s ../storage/app/rias public/

Start des Servers:
    Ausführen im Root-Verzeichnis
    php -S localhost:80 -t public

    Bei abweichender URL oder Port muss die URL unter config/app.php angepasst werden

    Sollen Exception-Details ausgegeben werden, so muss unter config/app.php debug auf true gesetzt werden

Tests:
    Tests dieser Software liegen im Ordner tests
    Zum Ausführen dieser bitte Anweisungen unter Installation - Development folgen und folgenden Befehl im Root-Verzeichnis ausführen:
    Windows: vendor\bin\phpunit.bat --stderr --configuration phpunit.xml tests/
    Linux vendor\bin\phpunit --stderr --configuration phpunit.xml tests/


Externe Quellen:
FontAwesome (http://fontawesome.io/) In der Version 4.7
    Eingesetzt zur Darstellung von Icons der RIAs

Composer (https://getcomposer.org/)
    Eingesetzt zum Erstellen des Class-Autoloaders (http://php.net/manual/de/language.oop5.autoload.php)
    Zusätzlich genutzt um PHPUnit in der Entwicklung zu nutzen
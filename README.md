# Installation

Um PHP lokal (am eigenen Rechner) ausführen zu können, brauchen wir einen Webserver. Diesen können wir mit folgenden Programmen installieren.

## Windows

XAMPP herunterladen https://www.apachefriends.org/de/index.html und Installation mit Standard-Einstellungen durchführen.

## MAC

MAMP herunterladen https://www.mamp.info/de/downloads/ (keine PRO Version nötig) und Installation mit Standard-Einstellungen durchführen.

## Webserver starten

Auf Windows XAMPP starten, es sollte sich das Control Panel öffnen. Dann den Apache Service starten. Mit Klick auf `Admin` öffnet sich im Browser die Default-Startseite (/dashboard).

Auf MAC MAMP starten und rechts oben auf `Start` klicken, unter `localhost:8888` sollte das Root-Verzeichnis des Webservers verfügbar sein.

## Der htdocs Folder

Unter diesem ist das Root-Verzeichnis (Startpunkt) des Webservers vorhanden. Standardmäßig unter `C:\xampp\htdocs` oder `Applications/MAMP/htdocs`. Unter XAMPP kann das Verzeichnis mit Klick auf `Explorer` auf der rechten Seite geöffnet werden.

Wenn ihr in `htdocs` - dem Startverzeichnis eures Webservers - einen Ordner `fami` anlegt, ist dieser im Browser unter `localhost/fami/` (Win) bzw. `localhost:8888/fami/` (MAC) erreichbar. Entsprechende Files (wie in diesem Repository) sind in so einem Ordner anzulegen bzw. zu klonen.

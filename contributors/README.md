# contributors extension firtz

Diese Erweiterung bringt Teilnehmer und ihre Daten in den firtz.

Die Konfiguration ist ein wenig aufw�ndig, das liegt aber mehr an der Komplexit�t der Materie.

Das ganze geht wie folgt: Extension installieren. Dort im Ordner data f�r jeden Teilnehmer eine Datei anlegen, z.B. eazy.cfg oder bernd_ahrend.cfg.
In jede Episode nun mittels **contributors:** eine Zeile mit allen Teilnehmern hinzuf�gen:

`contributors:
eazy bernd_ahrend hans_dampf`

In der jeweiligen cfg stehen dann die Daten der Nutzer:

`name:
Christian Bednarek

twitter:
eazyliving

mail:
eazy@eazy-living.de

flattr:
eazyliving

url:
http://eazy-living.de/

image:
https://pbs.twimg.com/profile_images/2185128768/twit_400x400.png

adn:
eazyliving`

Dieses Beispiel zeigt nun auch, was bisher m�glich ist. Das template ist noch nicht sch�n, tut aber was es soll.

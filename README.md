# Barcode format

Barcodes zijn er in verschillende formaten. Dit kunnen zowel 1D als 2D barcodes zijn. Voor het scheiden van waardes binnen een barcode is echter nog geen standaard. 

## Code 39
De Code 39 barcode standaard is een barcodeformaat wat al bestaat, en speciale karakters kan bevatten. Daarom is dit het ideale barcodetype om de datum en het productnummer van elkaar te scheiden. De speciale karakters die deze barcode kan bevatten zijn [-], [.], [$], [/], [+], [%] en [spatie].
De meeste producten hebben op dit moment een barcode met allen cijfers. Daarom maakt het niet uit welke onderscheiding er gebruikt wordt. Om toch te voorkomen dat er fouten gaan ontstaan met andere barcodes, ga ik gebruik maken van de - om waardes te scheiden.

[Bron] https://en.wikipedia.org/wiki/Code_39

MAAR wat gebeurt met een barcode in de Code 39 standaard, is dat een barcode van een normaal product, ineens heel lang wordt. Dit is veel te groot voor op een product, zie het voorbeeld (een flesje Fanta).
[![N|Solid](http://www.barcodes4.me/barcode/c39/5000112570601-20170418.png?width=400&height=100)](http://www.barcodes4.me/barcode/c39/5000112570601-20170418.png?width=400&height=100)

## Barcode generator
Om een kortere versie te maken van de Code 39 standaard, ben ik uitgegaan van de binaire rekenkunde. Dit bestaat uit nullen en enen, die gezamenlijk een cijfer vormen. 
Om een barcode te genereren heb ik voor alle getallen van 0 tot 9 de standaard binaire code gebruikt. Voor {-} (scheiding code en datum), {<} (start) en {>}(einde) heb ik mijn binaire code bedacht.

Het binaire codeschema ziet er zo uit:
"0" => [0000]
"1" => [0001]
"2" => [0010]
"3" => [0011]
"4" => [0100]
"5" => [1001]
"6" => [1010]
"7" => [0111]
"8" => [1000]
"9" => [1001]
"-" => [1111]
"<" => [1101]
">" => [1011]

[![N|Solid](http://image.prntscr.com/image/2d540c286a284667bb2505ded74b9547.png)](http://image.prntscr.com/image/2d540c286a284667bb2505ded74b9547.png)
<5000112570601-19961209>

## Documentatie
barcodeGenerator.php
GET
parameters: barcode (numbers-numbers)

## Toekomst
Juist om meer informatie gedigitaliseerd te kunnen weergeven, zullen ook barcodes met alleen getallen en speciale tekens, zoals ik heb gegenereerd, te beperkt zijn. Daarom zal het een goed idee zijn om uiteindelijk over te stappen op QR codes, omdat deze veel meer informatie kunnen bevatten op een kleinere oppervlakte. Het nadeel daaraan is wel dat de barcode scanners in alle winkels vervangen moeten worden, omdat deze geen 2d barcodes ondersteunen.

Het voorbeeld van het Fanta flesje in een QR code:
[![N|Solid](http://barcodes4.me/barcode/qr/barcode.png?value=5000112570601-19961209)](http://barcodes4.me/barcode/qr/barcode.png?value=5000112570601-19961209)


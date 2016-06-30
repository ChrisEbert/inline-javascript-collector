# inline-javascript-collector
Eine Contao Erweiterung um Inhalt aus script Tags zu sammeln und ihn an beliebiger Stelle wieder auszugeben.

Die Erweiterung sammelt Templateübergreifend, den Inhalt aus script Tags und gibt ihn kombiniert aus. Dafür werden drei Inserttags bereitgestellt.

##### 1. `{{script}}` + `{{/script}}` - Schneidet den Inhalt des script Tags aus

*ce_gallery.html5*
```
{{script}}
<script>
    $('#gallery').gallery();
</script>
{{/script}}
```
*ce_accordion.html5*
```
{{script}}
<script>
    $('#accordion').accordion();
</script>
{{/script}}
```
##### 2. `{{script_flush}}` - Gibt den bisher gesammelten Inhalt an dieser Stelle aus
*fe_page.html5*
```
{{script_flush}}
```
Die Ausgabe sieht wie folgt aus:
```
<script>
    $('#gallery').gallery();
    $('#accordion').accordion();
</script>
```

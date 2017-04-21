## Akıllı Kapı (Laravel)

### Web Servis

#### Sinyal Ekleme
``` 
http://webdetay.me/Api/Add/{rss}/{name}/{frequency}/{date?}/{type?}
```
**{rss}:** varchar(255)<br/>
**{name}:** varchar(255)<br/>
**{frequency}:** ([0-9]+)<br/>
**{date}:** 2017-04-21 09:52:53 // Boş bırakırsanız ya da null girerseniz o anki tarih<br/>
**{type}:** **0** (Wi-fi) ya da **1** (Beacon) // Boş bırakırsanız 0

#### Tüm Sinyaller
``` 
http://webdetay.me/Api/
```
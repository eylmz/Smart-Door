## Smart Door (Laravel 5.4)

### Web Services

#### Add Signal
``` 
http://localhost/Api/Add/{rss}/{name}/{frequency}/{date?}/{type?}
```
**{rss}:** varchar(255)<br/>
**{name}:** varchar(255)<br/>
**{frequency}:** ([0-9]+)<br/>
**{date}:** 2017-04-21 09:52:53 // **Default Value :** Current Date<br/>
**{type}:** **0** (Wi-fi) ya da **1** (Beacon) // **Default value** 0

#### All Signals
``` 
http://localhost/Api/
```

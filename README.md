# Contacts API Example

I used these examples in my presentation "A Toolbox for APIs and Integrations" at the Nashville PHP July 2015 user group meeting.

The slides for this talk are available here: <https://benramsey.com/talks/2015/07/nashvillephp-api-toolbox/>

You'll need [PHP 5.5+](http://php.net/), [Composer](https://getcomposer.org/), and [Node.js](https://nodejs.org/) on your system to play with these examples.

## Installation

``` console
$ cd api-toolbox/
$ composer install
$ npm install
```

## Run the API

``` console
$ php -S 0.0.0.0:8000 index.php
```

## Poke Around the API

Leave the PHP built-in web server running, and from a different terminal window, use the following cURL commands to poke around:

``` console
$ curl -i http://localhost:8000/contacts
```

You should get back something that looks like this:

    {"_links":{"self":{"href":"\/contacts"},"next":{"href":"\/contacts?page=2"}},"_embedded":{"contact":[{"first_name":"James","last_name":"Butt","company_name":"Benton, John B Jr","address":"6649 N Blue Gum St","city":"New Orleans","county":"Orleans","state":"LA","zip":"70116","phone1":"504-621-8927","phone2":"504-845-1427","email":"jbutt@gmail.com","web":"http:\/\/www.bentonjohnbjr.com","_links":{"self":{"href":"\/contacts\/1"}}},{"first_name":"Josephine","last_name":"Darakjy","company_name":"Chanay, Jeffrey A Esq","address":"4 B Blue Ridge Blvd","city":"Brighton","county":"Livingston","state":"MI","zip":"48116","phone1":"810-292-9388","phone2":"810-374-9840","email":"josephine_darakjy@darakjy.org","web":"http:\/\/www.chanayjeffreyaesq.com","_links":{"self":{"href":"\/contacts\/2"}}},{"first_name":"Art","last_name":"Venere","company_name":"Chemel, James L Cpa","address":"8 W Cerritos Ave #54","city":"Bridgeport","county":"Gloucester","state":"NJ","zip":"08014","phone1":"856-636-8749","phone2":"856-264-4130","email":"art@venere.org","web":"http:\/\/www.chemeljameslcpa.com","_links":{"self":{"href":"\/contacts\/3"}}},{"first_name":"Lenna","last_name":"Paprocki","company_name":"Feltz Printing Service","address":"639 Main St","city":"Anchorage","county":"Anchorage","state":"AK","zip":"99501","phone1":"907-385-4412","phone2":"907-921-2010","email":"lpaprocki@hotmail.com","web":"http:\/\/www.feltzprintingservice.com","_links":{"self":{"href":"\/contacts\/4"}}},{"first_name":"Donette","last_name":"Foller","company_name":"Printing Dimensions","address":"34 Center St","city":"Hamilton","county":"Butler","state":"OH","zip":"45011","phone1":"513-570-1893","phone2":"513-549-4561","email":"donette.foller@cox.net","web":"http:\/\/www.printingdimensions.com","_links":{"self":{"href":"\/contacts\/5"}}},{"first_name":"Simona","last_name":"Morasca","company_name":"Chapman, Ross E Esq","address":"3 Mcauley Dr","city":"Ashland","county":"Ashland","state":"OH","zip":"44805","phone1":"419-503-2484","phone2":"419-800-6759","email":"simona@morasca.com","web":"http:\/\/www.chapmanrosseesq.com","_links":{"self":{"href":"\/contacts\/6"}}},{"first_name":"Mitsue","last_name":"Tollner","company_name":"Morlong Associates","address":"7 Eads St","city":"Chicago","county":"Cook","state":"IL","zip":"60632","phone1":"773-573-6914","phone2":"773-924-8565","email":"mitsue_tollner@yahoo.com","web":"http:\/\/www.morlongassociates.com","_links":{"self":{"href":"\/contacts\/7"}}},{"first_name":"Leota","last_name":"Dilliard","company_name":"Commercial Press","address":"7 W Jackson Blvd","city":"San Jose","county":"Santa Clara","state":"CA","zip":"95111","phone1":"408-752-3500","phone2":"408-813-1105","email":"leota@hotmail.com","web":"http:\/\/www.commercialpress.com","_links":{"self":{"href":"\/contacts\/8"}}},{"first_name":"Sage","last_name":"Wieser","company_name":"Truhlar And Truhlar Attys","address":"5 Boston Ave #88","city":"Sioux Falls","county":"Minnehaha","state":"SD","zip":"57105","phone1":"605-414-2147","phone2":"605-794-4895","email":"sage_wieser@cox.net","web":"http:\/\/www.truhlarandtruhlarattys.com","_links":{"self":{"href":"\/contacts\/9"}}},{"first_name":"Kris","last_name":"Marrier","company_name":"King, Christopher A Esq","address":"228 Runamuck Pl #2808","city":"Baltimore","county":"Baltimore City","state":"MD","zip":"21224","phone1":"410-655-8723","phone2":"410-804-4694","email":"kris@gmail.com","web":"http:\/\/www.kingchristopheraesq.com","_links":{"self":{"href":"\/contacts\/10"}}},{"first_name":"Minna","last_name":"Amigon","company_name":"Dorl, James J Esq","address":"2371 Jerrold Ave","city":"Kulpsville","county":"Montgomery","state":"PA","zip":"19443","phone1":"215-874-1229","phone2":"215-422-8694","email":"minna_amigon@yahoo.com","web":"http:\/\/www.dorljamesjesq.com","_links":{"self":{"href":"\/contacts\/11"}}},{"first_name":"Abel","last_name":"Maclead","company_name":"Rangoni Of Florence","address":"37275 St  Rt 17m M","city":"Middle Island","county":"Suffolk","state":"NY","zip":"11953","phone1":"631-335-3414","phone2":"631-677-3675","email":"amaclead@gmail.com","web":"http:\/\/www.rangoniofflorence.com","_links":{"self":{"href":"\/contacts\/12"}}},{"first_name":"Kiley","last_name":"Caldarera","company_name":"Feiner Bros","address":"25 E 75th St #69","city":"Los Angeles","county":"Los Angeles","state":"CA","zip":"90034","phone1":"310-498-5651","phone2":"310-254-3084","email":"kiley.caldarera@aol.com","web":"http:\/\/www.feinerbros.com","_links":{"self":{"href":"\/contacts\/13"}}},{"first_name":"Graciela","last_name":"Ruta","company_name":"Buckley Miller & Wright","address":"98 Connecticut Ave Nw","city":"Chagrin Falls","county":"Geauga","state":"OH","zip":"44023","phone1":"440-780-8425","phone2":"440-579-7763","email":"gruta@cox.net","web":"http:\/\/www.buckleymillerwright.com","_links":{"self":{"href":"\/contacts\/14"}}},{"first_name":"Cammy","last_name":"Albares","company_name":"Rousseaux, Michael Esq","address":"56 E Morehead St","city":"Laredo","county":"Webb","state":"TX","zip":"78045","phone1":"956-537-6195","phone2":"956-841-7216","email":"calbares@gmail.com","web":"http:\/\/www.rousseauxmichaelesq.com","_links":{"self":{"href":"\/contacts\/15"}}},{"first_name":"Mattie","last_name":"Poquette","company_name":"Century Communications","address":"73 State Road 434 E","city":"Phoenix","county":"Maricopa","state":"AZ","zip":"85013","phone1":"602-277-4385","phone2":"602-953-6360","email":"mattie@aol.com","web":"http:\/\/www.centurycommunications.com","_links":{"self":{"href":"\/contacts\/16"}}},{"first_name":"Meaghan","last_name":"Garufi","company_name":"Bolton, Wilbur Esq","address":"69734 E Carrillo St","city":"Mc Minnville","county":"Warren","state":"TN","zip":"37110","phone1":"931-313-9635","phone2":"931-235-7959","email":"meaghan@hotmail.com","web":"http:\/\/www.boltonwilburesq.com","_links":{"self":{"href":"\/contacts\/17"}}},{"first_name":"Gladys","last_name":"Rim","company_name":"T M Byxbee Company Pc","address":"322 New Horizon Blvd","city":"Milwaukee","county":"Milwaukee","state":"WI","zip":"53207","phone1":"414-661-9598","phone2":"414-377-2880","email":"gladys.rim@rim.org","web":"http:\/\/www.tmbyxbeecompanypc.com","_links":{"self":{"href":"\/contacts\/18"}}},{"first_name":"Yuki","last_name":"Whobrey","company_name":"Farmers Insurance Group","address":"1 State Route 27","city":"Taylor","county":"Wayne","state":"MI","zip":"48180","phone1":"313-288-7937","phone2":"313-341-4470","email":"yuki_whobrey@aol.com","web":"http:\/\/www.farmersinsurancegroup.com","_links":{"self":{"href":"\/contacts\/19"}}},{"first_name":"Fletcher","last_name":"Flosi","company_name":"Post Box Services Plus","address":"394 Manchester Blvd","city":"Rockford","county":"Winnebago","state":"IL","zip":"61109","phone1":"815-828-2147","phone2":"815-426-5657","email":"fletcher.flosi@yahoo.com","web":"http:\/\/www.postboxservicesplus.com","_links":{"self":{"href":"\/contacts\/20"}}}]}}

Since that's not very pretty or easy to read, you might consider using [HTTPie](http://httpie.org/) instead of cURL.

## Run the Tests

Again, with the web server still running, run the [Frisby.js](http://frisbyjs.com/):

``` console
$ ./node_modules/jasmine-node/bin/jasmine-node tests/spec
```

You should see output like this:

    ..

    Finished in 0.077 seconds
    2 tests, 20 assertions, 0 failures, 0 skipped

## Running Dredd

This also includes a sample [API Blueprint](https://apiblueprint.org/) document that you may use to run tests using [Dredd](https://github.com/apiaryio/dredd). Dredd is included when you run `npm install`.

``` console
$ ./node_modules/dredd/bin/dredd
```

You should see output like this:

    Configuration dredd.yml found, ignoring other arguments.
    Starting server with command: php -S 0.0.0.0:8000 index.php
    Waiting 3 seconds for server command to start...
    info: Beginning Dredd testing...
    pass: GET /contacts/42 duration: 58ms
    pass: GET /contacts duration: 108ms
    complete: 2 passing, 0 failing, 0 errors, 0 skipped, 2 total
    complete: Tests took 170ms

## A Note on the Sample Data

The `us-500.csv` file was obtained freely from <https://www.briandunning.com/sample-data/>:

> Names are random, constructed from real first and last names. Company names are real, but are randomized along with street addresses and do not represent actual locations.
>
> City, County, State/Province, and ZIP/Postal are correct for each record.
>
> Phone and fax numbers are random, but the area code and exchange for each are correct for their location.
>
> Email and Web addresses are fake but properly formatted for their country.
>
> Records are in random order and cover the countries with a more or less even distribution.
>
> Import-ready CSV files, no weird characters, escaped characters, or anything else funky to screw things up.

More sample data is available for purchase at the URL above.

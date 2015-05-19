var frisby = require('frisby');

frisby.create('Contact Not Found')
    .get('http://localhost:8000/contacts/501')
    .expectStatus(404)
    .expectHeaderContains('content-type', 'application/vnd.error+json')
    .expectJSON({
        message: "Contact not found"
    })
    .expectJSONTypes({
        "_links": {
            help: {
                href: String,
                title: String
            }
        }
    })
    .toss();

frisby.create('Get Contact')
    .get('http://localhost:8000/contacts/43')
    .expectStatus(200)
    .expectHeaderContains('content-type', 'application/hal+json')
    .expectJSON({
        "_links": {
            self: {
                href: "/contacts/43"
            }
        }
    })
    .expectJSONTypes({
        address: String,
        city: String,
        company_name: String,
        county: String,
        email: String,
        first_name: String,
        last_name: String,
        phone1: String,
        phone2: String,
        state: String,
        web: String,
        zip: String
    })
    .toss();

FORMAT: 1A

# Contacts API
This is a simple API for managing contacts.

# Group Contact
Contact-related resources of *Contacts API*.

## Contact [/contacts/{id}]
A single contact entity.

The Gist resource has the following attributes:

- address
- city
- company_name
- county
- email
- first_name
- last_name
- phone1
- phone2
- state
- web
- zip


+ Parameters
    + id: `42` (string) ... ID of the Contact in the form of an integer.

+ Model (application/hal+json)

    HAL+JSON representation of Contact Resource.

    + Body

            {
                "_links": {
                    "self": { "href": "/contacts/42" }
                },
                "address": "1048 Main St",
                "city": "Fairbanks",
                "company_name": "Rapid Trading Intl",
                "county": "Fairbanks North Star",
                "email": "roxane@hotmail.com",
                "first_name": "Roxane",
                "last_name": "Campain",
                "phone1": "907-231-4722",
                "phone2": "907-335-6568",
                "state": "AK",
                "web": "http://www.rapidtradingintl.com",
                "zip": "99708"
            }

### Retrieve a Single Contact [GET]
+ Response 200

    [Contact][]


## Contacts Collection [/contacts{?page}]
Collection of all Contacts.

It **embeds** *Contact Resources* in the Contacts API.


+ Model (application/hal+json)

    HAL+JSON representation of Contact Collection Resource. The Contact resources in collections are embedded.

    + Body

            {
                "_links": {
                    "self": { "href": "/contacts" },
                    "next": { "href": "/contacts?page=2" }
                },
                "_embedded": {
                    "contact": [
                        {
                            "_links": {
                                "self": {
                                    "href": "/contacts/1"
                                }
                            },
                            "address": "6649 N Blue Gum St",
                            "city": "New Orleans",
                            "company_name": "Benton, John B Jr",
                            "county": "Orleans",
                            "email": "jbutt@gmail.com",
                            "first_name": "James",
                            "last_name": "Butt",
                            "phone1": "504-621-8927",
                            "phone2": "504-845-1427",
                            "state": "LA",
                            "web": "http://www.bentonjohnbjr.com",
                            "zip": "70116"
                        },
                        {
                            "_links": {
                                "self": {
                                    "href": "/contacts/2"
                                }
                            },
                            "address": "4 B Blue Ridge Blvd",
                            "city": "Brighton",
                            "company_name": "Chanay, Jeffrey A Esq",
                            "county": "Livingston",
                            "email": "josephine_darakjy@darakjy.org",
                            "first_name": "Josephine",
                            "last_name": "Darakjy",
                            "phone1": "810-292-9388",
                            "phone2": "810-374-9840",
                            "state": "MI",
                            "web": "http://www.chanayjeffreyaesq.com",
                            "zip": "48116"
                        }
                    ]
                }
            }

### List All Contacts [GET]
+ Parameters
    + page (optional, integer) ... The page number to retrieve

+ Response 200

    [Contacts Collection][]

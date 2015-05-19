<?php
require 'vendor/autoload.php';
require_once 'data-functions.php';

use Nocarrier\Hal;
use Ramsey\VndError\VndError;
use Slim\Slim;

$app = new Slim();

/**
 * Handles GET requests for the /hello/:name route
 */
$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

/**
 * Handles GET requests for the /contacts collection
 *
 * The /contacts collection also accepts a ?page query string parameter.
 */
$app->get('/contacts', function () use ($app) {
    $page = $app->request->get('page');

    if ($page > 1) {
        $hal = new Hal('/contacts?page=' . $page);
        $hal->addLink('next', '/contacts?page=' . ($page + 1));
        $hal->addLink('prev', '/contacts?page=' . ($page - 1));
    } else {
        $page = 1;
        $hal = new Hal('/contacts');
        $hal->addLink('next', '/contacts?page=2');
    }

    $contacts = getContactsPage($page);

    foreach ($contacts as $id => $contact) {
        $resource = new Hal('/contacts/' . $id, $contact);
        $hal->addResource('contact', $resource);
    }

    $app->response->headers->set('Content-Type', 'application/hal+json');
    echo $hal->asJson();
});

/**
 * Handles GET requests for the /contacts/:id entity
 *
 * Generates a 404 Not Found in the event the contact entity cannot be found.
 */
$app->get('/contacts/:id', function ($id) use ($app) {
    try {
        $contact = getContactById($id);
        $hal = new Hal('/contacts/' . $id, $contact);

        $app->response->headers->set('Content-Type', 'application/hal+json');
        echo $hal->asJson();
    } catch (ErrorException $e) {
        $vndError = new VndError('Contact not found');
        $vndError->addLink(
            'help',
            'http://docs.example.org/api/contacts',
            array('title' => 'Contacts API Documentation')
        );

        $app->response->setStatus(404);
        $app->response->headers->set('Content Type', 'application/vnd.error+json');
        echo $vndError->asJson();
    }
});

$app->run();

<?php
// Grabs the URI and breaks it apart in case we have querystring stuff
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

// Route it up!
switch ($request_uri[0]) {
    // Home page
    case '/':
        require 'views/index.php';
        break;
    // Tournament page
    case '/tournoi-suisse':
        require 'swiss-tournament/index.html';
        break;
    case '/tournois':
        require 'views/tournament.php';
        break;
    case '/news':
        require 'views/news.php';
        break;
    // Everything else
    default:
        header('HTTP/1.0 404 Not Found');
        require '../views/404.php';
        break;
}
<?php
/*
 * Template Name: Landing Page
 * Template Post Type: page
 */

define('GOOGLE_CALENDAR_ID', 'mtu.edu_09qi6pfnktib7heh2grshjvqo4@group.calendar.google.com');

$context = Timber::get_context();

$client = new Google_Client();
$client->setApplicationName('Valhalla');
$client->setScopes(Google_Service_Calendar::CALENDAR_READONLY);
$client->setAuthConfig('credentials.json');

$service = new Google_Service_Calendar($client);
$options = array('maxResults' => 4, 'orderBy' => 'startTime', 'singleEvents' => true, 'timeMin' => date('c'));
$results = $service->events->listEvents(GOOGLE_CALENDAR_ID, $options);
$results = $results->getItems();

$context['calendar_events'] = $results;

Timber::render('pages/landingPage/LandingPage.twig', $context);
?>

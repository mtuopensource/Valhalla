<?php
/*
 * Template Name: Landing Page
 * Template Post Type: page
 */

$NUM_EVENTS = 4;
$GOOGLE_PERMISSIONS = Google_Service_Calendar::CALENDAR_READONLY;
$GOOGLE_AUTH_CONFIG = '/credentials.json';
$GOOGLE_CALENDAR_ID = 'mtu.edu_09qi6pfnktib7heh2grshjvqo4@group.calendar.google.com';

$client = new Google_Client();
$client->setAuthConfig(get_template_directory() . $GOOGLE_AUTH_CONFIG);
$client->setScopes($GOOGLE_PERMISSIONS);

$options = array(
	'maxResults'   => $NUM_EVENTS, 
	'orderBy'      => 'startTime', 
	'singleEvents' => true, 
	'timeMin'      => date('c')
);

$service = new Google_Service_Calendar($client);
$results = $service->events->listEvents($GOOGLE_CALENDAR_ID, $options);
$results = $results->getItems();

$context = Timber::get_context();
$context['calendar_events'] = $results;

Timber::render('pages/landingPage/LandingPage.twig', $context);
?>


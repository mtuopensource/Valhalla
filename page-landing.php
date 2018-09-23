<?php
/*
 * Template Name: Landing Page
 * Template Post Type: page
 */

  $context = Timber::get_context();
  Timber::render( 'pages/landingPage/LandingPage.twig', $context );
?>
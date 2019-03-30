<?php
class BlockLandingPageInformation implements Block {
    private $permissions = Google_Service_Calendar::CALENDAR_READONLY;
    private $auth_config = '/credentials.json';
    private $calendar;
    private $number_of_events;
    private $client;
    private $options;
    private $service;
    private $results;
    
    public function __construct($calendar, $number_of_events) {
        try {
            $this->number_of_events = $number_of_events;
            $this->calendar = $calendar;
            
            $this->client = new Google_Client();
            $this->client->setAuthConfig(get_template_directory() . $this->auth_config);
            $this->client->setScopes($this->permissions);
            
            $this->options = array(
                'maxResults'   => $this->number_of_events,
                'orderBy'      => 'startTime',
                'singleEvents' => true,
                'timeMin'      => date('c')
            );
            
            $this->service = new Google_Service_Calendar($this->client);
            $this->results = $this->service->events->listEvents($this->calendar, $this->options);
            $this->results = $this->results->getItems();
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function render($block) {
        $calendar_id = get_field('calendar_id');
        $number_of_events = get_field('number_of_events');

        $block = new BlockLandingPageInformation($calendar_id, $number_of_events);
        $context = array();
        $context['calendar_events'] = $block->results;
        $context['header'] = get_field('header');
        $context['description'] = get_field('description');
        $context['cta'] = get_field('cta');
        $context['cta_link'] = get_field('cta_link');

        Timber::render('views/blocks/LandingPageInformation.twig', $context);
    }
}
?>
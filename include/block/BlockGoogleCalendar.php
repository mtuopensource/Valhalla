<?php
use Cache\Adapter\Redis\RedisCachePool;

class BlockGoogleCalendar extends Block {
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
            $this->setAuthConfig(get_template_directory() . $this->auth_config);
            $this->setScopes($this->permissions);
            
            $this->options = array(
                'maxResults'   => $this->number_of_events,
                'orderBy'      => 'startTime',
                'singleEvents' => true,
                'timeMin'      => date('c')
            );
            
            $this->service = new Google_Service_Calendar($this->client);
            $this->results = $this->service->events->listEvents($this->calendar, $options);
            $this->results = $this->results->getItems();
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function render($block) {
        $calendar_id = get_field('calendar_id');
        $number_of_events = get_field('number_of_events');

        $block = new BlockGoogleCalendar($calendar_id, $number_of_events);
        $context = array();
        $context['calendar_events'] = $block->results;

        Timber::render('views/blocks/GoogleCalendar.twig', $context);
    }
}
?>

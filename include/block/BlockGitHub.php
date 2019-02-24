<?php
use Cache\Adapter\Redis\RedisCachePool;

class BlockGitHub extends Block {
    private $redis;
    private $redis_pool;
    private $client;
    private $repositories;

    public function __construct($org, $num) {
        try {
            $this->redis = new \Redis();
            $this->redis->connect('localhost', 6379);
            $this->redis_pool = new RedisCachePool($this->redis);
    
            $this->client = new \Github\Client();
            $this->client->addCache($this->redis_pool); # reduce api requests using cache
    
            $this->repositories = $this->client->api('organizations')->repositories($org);
            $this->repositories = from($this->repositories)->orderByDescending('$v["updated_at"]'); # most recently pushed
            $this->repositories = from($this->repositories)->take($num); # reduce

            $this->client->removeCache(); # cleanup resources we're using
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function render($block) {
        $org = get_field('organization_slug');
        $org = strtolower($org);
        $num = get_field('number_of_results');

        $block = new BlockGitHub($org, $num);
        $context = array();
        $context['repositories'] = $block->repositories;
        $context['defaultimage'] = get_field('default_image');

        Timber::render('views/blocks/GitHub.twig', $context);
    }
}
?>
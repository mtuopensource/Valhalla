<?php
use Cache\Adapter\Redis\RedisCachePool;

class GitHubBlock extends Block {
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
            $this->client->addCache($this->redis_pool);
    
            $this->repositories = $this->client->api('organizations')->repositories($org);
            $this->repositories = from($this->repositories)->orderByDescending('$v["updated_at"]');
            $this->repositories = from($this->repositories)->take($num);

            $this->client->removeCache();
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function render($block) {
        $org = get_field('organization_slug');
        $org = strtolower($org);
        $num = get_field('number_of_results');

        $block = new GitHubBlock($org, $num);
        $context = array();
        $context['repositories'] = $block->repositories;

        Timber::render('views/blocks/GitHub.twig', $context);
    }
}
?>
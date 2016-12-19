<?php

namespace BitWasp\CommonBlockchain;

use Afk11\MiniRest\RestClient;
use Afk11\MiniRest\RestClientInterface;

class CommonBlockchain
{
    const AGENT = 'cb-client-php';
    const VERSION = 'v0.0.1';

    /**
     * @var RestClientInterface
     */
    protected $client;

    /**
     * @var Transactions
     */
    public $transactions;

    /**
     * @var Addresses
     */
    public $addresses;

    /**
     * @var Blocks
     */
    public $blocks;

    /**
     * CommonBlockchain constructor.
     * @param $apiKey
     * @param $apiSecret
     * @param $base
     */
    public function __construct($apiKey, $apiSecret, $base)
    {
        if (substr($base, -1) == '/') {
            $base = substr($base, 0, -1);
        }

        $this->url = $base;
        $this->client = (new RestClient($apiKey, $apiSecret, $this->url))
            ->setClientVersion(self::VERSION)
            ->setClientVersion(self::AGENT)
            ->setApiKeyQueryString(true)
        ;

        $this->addresses = new Addresses($this->client);
        $this->transactions = new Transactions($this->client);
        $this->blocks = new Blocks($this->client);
    }
}
<?php

namespace BitWasp\CommonBlockchain;

use Afk11\MiniRest\RestClient;
use BlocktrailUnofficial\RestClientInterface;

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
     * Repo constructor.
     * @param string $version
     * @param string $base
     */
    public function __construct($version, $base)
    {
        if (substr($base, -1) !== '/') {
            $base .= '/';
        }

        $this->url = $base . $version;
        $this->client = (new RestClient('', '', $version, $base))
            ->setClientVersion(self::VERSION)
            ->setClientVersion(self::AGENT)
        ;

        $this->addresses = new Addresses($this->client);
        $this->transactions = new Transactions($this->client);
        $this->blocks = new Blocks($this->client);
    }
}
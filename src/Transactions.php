<?php

namespace BitWasp\CommonBlockchain;

class Transactions extends AbstractRepo
{
    /**
     * @var string
     */
    protected $repo = 'transactions';

    /**
     * @var string
     */
    private $ids = 'txIds';

    /**
     * @var string
     */
    private $hexs = 'txHexs';

    /**
     * @param string[]|string $txIds
     * @return array
     */
    public function get($txIds)
    {
        return $this->makeRequest(
            __FUNCTION__,
            [
                $this->ids => $this->arrayOrString($txIds)
            ]
        );
    }

    /**
     * @return array
     */
    public function latest()
    {
        return $this->makeRequest(
            __FUNCTION__
        );
    }

    /**
     * @param string[]|string $txHexs
     * @return array
     */
    public function propagate($txHexs)
    {
        return $this->makeRequest(
            __FUNCTION__,
            [
                $this->hexs => $this->arrayOrString($txHexs)
            ]
        );
    }

    /**
     * @param string[]|string $txIds
     * @return array
     */
    public function summary($txIds)
    {
        return $this->makeRequest(
            __FUNCTION__,
            [
                $this->ids => $this->arrayOrString($txIds)
            ]
        );
    }

}
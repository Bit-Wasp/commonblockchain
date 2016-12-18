<?php

namespace BitWasp\CommonBlockchain;

class Addresses extends AbstractRepo
{
    /**
     * @var string
     */
    protected $repo = 'addresses';

    /**
     * @param string[]|string $addresses
     * @return array
     */
    public function summary($addresses)
    {
        return $this->makeRequest(
            __FUNCTION__,
            [
                $this->repo => $this->arrayOrString($addresses)
            ]
        );
    }

    /**
     * @param string[]|string $addresses
     * @param int $blockHeight
     * @return mixed
     */
    public function transactions($addresses, $blockHeight)
    {
        // todo: blockheight

        return $this->makeRequest(
            __FUNCTION__,
            [
                $this->repo => $this->arrayOrString($addresses)
            ]
        );
    }

    /**
     * @param string[]|string $addresses
     * @return array
     */
    public function unspents($addresses)
    {
        return $this->makeRequest(
            __FUNCTION__,
            [
                $this->repo => $this->arrayOrString($addresses)
            ]
        );
    }

}
<?php

namespace BitWasp\CommonBlockchain;

class Blocks extends AbstractRepo
{
    /**
     * @var string
     */
    protected $repo = 'blocks';

    /**
     * @var string
     */
    private $ids = 'blockIds';

    /**
     * @var string
     */
    private $hex = 'blockHex';

    /**
     * @param string[]|string $blockIds
     * @return array
     */
    public function get($blockIds)
    {
        return $this->makeRequest(
            __FUNCTION__,
            [
                $this->ids => $this->arrayOrString($blockIds)
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
     * @param string $blockHex
     * @return array
     */
    public function propagate($blockHex)
    {
        return $this->makeRequest(
            __FUNCTION__,
            [
                $this->hex => $blockHex
            ]
        );
    }

    /**
     * @param string[]|string $blockIds
     * @return array
     */
    public function summary($blockIds)
    {
        return $this->makeRequest(
            __FUNCTION__,
            [
                $this->ids => $this->arrayOrString($blockIds)
            ]
        );
    }

}
<?php

namespace ImporterStub;

use Psr\Log\LoggerAwareInterface;

interface ImporterInterface extends LoggerAwareInterface
{
    /**
     * read data of given format type and location
     *
     * @param $sourceType
     * @param \SplFileInfo $file
     * @return bool
     */
    public function read($sourceType, \SplFileInfo $file);

    /**
     * write buffered data into given destination
     *
     * @param $destinationType
     * @return mixed
     */
    public function write($destinationType);
}

<?php

namespace Clearcode;

use ReaderStub\XmlReader;

class ClearcodeXmlReader
{
    /** @var \SplFileInfo  */
    private $file;

    /**
     * ClearcodeXmlReader constructor.
     * @param \SplFileInfo $file
     */
    public function __construct(\SplFileInfo $file)
    {
        $this->file = $file;
    }

    /**
     * @return array
     */
    public function read()
    {
        $reader = new XmlReader($this->file, 0, true);
        return $reader->toArray();
    }
}

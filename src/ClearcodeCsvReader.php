<?php

namespace Clearcode;

use ReaderStub\CsvReader;

class ClearcodeCsvReader
{
    /** @var \SplFileInfo  */
    private $file;
    /** @var  \SplFileObject */
    private $fileObject;

    /**
     * ClearcodeCsvReader constructor.
     * @param \SplFileInfo $file
     */
    public function __construct(\SplFileInfo $file)
    {
        $this->file = $file;
        $this->initFileObject($file);
    }

    /**
     * @return CsvReader
     */
    public function read()
    {
        return new CsvReader($this->fileObject);
    }

    /**
     * @param $file
     */
    private function initFileObject($file)
    {
        $fileInfo = new \SplFileInfo($file);

        $this->fileObject = $fileInfo->openFile();
    }
}

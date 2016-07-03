<?php

namespace Clearcode;

use WriterStub\DatabaseWriter;
use ReaderStub\CsvReader;

class ClearcodeDatabaseWriter
{
    /** @var  array */
    private $databaseData;
    /** @var  mixed */
    private $objectsData;

    /**
     * ClearcodeDatabaseWriter constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->initDatabaseData($data);
        $this->initObjectsData($data);
    }

    /**
     * @return array
     */
    public function write()
    {
        $writer = new DatabaseWriter(
            $this->databaseData['host'],
            $this->databaseData['database'],
            $this->databaseData['user'],
            $this->databaseData['password']
        );
        $writer->connect();
        $resultArray = array();
        if (is_array($this->objectsData)) {
            foreach ($this->objectsData['user'] as $object) {
                $resultArray[] = $writer->insert($object);
            }
        } else if($this->objectsData instanceof CsvReader) {
            while ($this->objectsData->current()) {
                $resultArray[] = $writer->insert($this->objectsData->current());
                $this->objectsData->next();
            }
        }

        return $resultArray;

    }

    /**
     * @param $data
     */
    private function initDatabaseData($data)
    {
        $this->databaseData = $data->getDatabaseData();
    }

    /**
     * @param $data
     */
    private function initObjectsData($data)
    {
        $this->objectsData = $data->getData();
    }
}

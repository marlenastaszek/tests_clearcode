<?php

namespace Clearcode;

use ImporterStub\ImporterInterface;
use Psr\Log\LoggerInterface;

class Application implements ImporterInterface
{
    const XML_FORMAT = 'xml';
    const CSV_FORMAT = 'csv';
    const DATABASE_DESTINATION = 'database';
    const EMAIL_DESTINATION = 'email';

    /** @var  array|ArrayIterator */
    protected $data;
    /** @var array  */
    protected $databaseData;
    /** @var array */
    protected $emailData;
    /** @var  LoggerInterface */
    protected $logger;

    /**
     * Application constructor.
     * @param array $databaseData
     */
    public function __construct(array $databaseData)
    {
        $this->databaseData = $databaseData['database'];
        $this->emailData = $databaseData['delivery_address'];
    }

    /**
     * read data of given format type and location
     *
     * @param $sourceType
     * @param \SplFileInfo $file
     * @return bool
     */
    public function read($sourceType, \SplFileInfo $file)
    {
        if (!file_exists($file)) {
            throw new \Exception('file_not_found');
        }

        if ($sourceType == self::XML_FORMAT) {
            $reader = new ClearcodeXmlReader($file);
        } else if($sourceType == self::CSV_FORMAT) {
            $reader = new ClearcodeCsvReader($file);
        }

        $this->data = $reader->read();
        if ($this->logger) {
            $this->logData ($sourceType, $this->data);
        }
        if (!empty($this->data)) {
            return true;
        }

        return false;
    }

    /**
     * write buffered data into given destination
     *
     * @param $destinationType
     * @return mixed
     */
    public function write($destinationType)
    {
        if ($destinationType == self::DATABASE_DESTINATION) {
            $writer = new ClearcodeDatabaseWriter($this);
            return $writer->write();
        } elseif ($destinationType == self::EMAIL_DESTINATION){
            $sender = new ClearcodeEmailSender($this);
            return $sender->send();
        }
    }

    /**
     * Sets a logger instance on the object
     *
     * @param LoggerInterface $logger
     * @return null
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return array
     */
    public function getDatabaseData()
    {
        return $this->databaseData;
    }

    /**
     * @return mixed
     */
    public function getEmailData()
    {
        return $this->emailData;
    }

    /**
     * @param $sourceType
     * @param $data
     */
    protected function logData($sourceType, $data)
    {
        if ($sourceType == self::XML_FORMAT) {
            foreach ($data['user'] as $object) {
                $this->logger->debug("imported: ".$object['username']);
            }
        } else if($sourceType == self::CSV_FORMAT) {
            while ($data->current()) {
                $this->logger->debug("imported: ".$data->current()['username']);
                $data->next();
            }
        }
    }
}

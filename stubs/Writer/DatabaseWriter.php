<?php

namespace WriterStub;

class DatabaseWriter
{
    private $lastId = 0;
    private $connected;

    private $host;
    private $database;
    private $user;
    private $password;

    public function __construct($host, $database, $user, $password)
    {
        $this->host = $host;
        $this->database = $database;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect()
    {
        if (empty($this->host) || empty($this->database) || empty($this->user) || empty($this->password)) {
            throw new \RuntimeException("couldn't establish database connection");
        }

        $this->connected = true;
    }

    /**
     * insert data and return last_insert_id
     */
    public function insert(array $data)
    {
        if (!$this->connected) {
            throw new \RuntimeException("couldn't find database");
        }

        return ++$this->lastId;
    }
}

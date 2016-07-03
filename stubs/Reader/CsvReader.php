<?php

namespace ReaderStub;

class CsvReader implements \SeekableIterator
{
    /**
     * @var
     */
    private $iterator;

    /**
     * @param \SplFileObject $file
     */
    public function __construct(\SplFileObject $file)
    {
        // stubbed data
        $this->iterator = new \ArrayIterator([
            [
                "username" => "user1",
                "email" => "user1@example.com",
            ],
            [
                "username" => "user2",
                "email" => "user2@example.com",
            ]
        ]);
    }

    /**
    * {@inheritdoc}
    */
    public function current()
    {
        return $this->iterator->current();
    }

    /**
     * {@inheritdoc}
     */
    public function next()
    {
        $this->iterator->next();
    }

    /**
     * {@inheritdoc}
     */
    public function key()
    {
        return $this->iterator->key();
    }

    /**
     * {@inheritdoc}
     */
    public function valid()
    {
        return $this->iterator->valid();
    }

    /**
     * {@inheritdoc}
     */
    public function rewind()
    {
        $this->iterator->rewind();
    }


    /**
     * {@inheritdoc}
     */
    public function seek($position)
    {
        $this->iterator->seek($position);
    }

}

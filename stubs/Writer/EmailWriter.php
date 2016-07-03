<?php

namespace WriterStub;

class EmailWriter
{
    public function send(EmailInstance $email)
    {
        if (!$email->getTo()) {
            throw new \UnexpectedValueException('"to" field can not be empty');
        }

        if (!$email->getSubject()) {
            throw new \UnexpectedValueException('"subject" field can not be empty');
        }

        return true;
    }
}

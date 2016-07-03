<?php

namespace Clearcode;

use WriterStub\EmailInstance;
use WriterStub\EmailWriter;

class ClearcodeEmailSender
{
    /** @var  array */
    private $emailData;
    /** @var  mixed */
    private $objectsData;

    /**
     * ClearcodeEmailSender constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->initEmailData($data);
        $this->initObjectsData($data);
    }

    /**
     * @return EmailInstance
     */
    private function prepareEmail()
    {
        $email = new EmailInstance();
        $email->setBody('test');
        $email->setSubject('test');
        $email->setTo($this->emailData);

        return $email;
    }

    /**
     * @return bool
     */
    public function send()
    {
        $email = $this->prepareEmail();
        $sender = new EmailWriter();
        return $sender->send($email);
    }

    /**
     * @param $data
     */
    private function initEmailData($data)
    {
        $this->emailData = $data->getEmailData();
    }

    /**
     * @param $data
     */
    private function initObjectsData($data)
    {
        $this->objectsData = $data->getData();
    }
}

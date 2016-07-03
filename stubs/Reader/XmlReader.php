<?php

namespace ReaderStub;

class XmlReader extends \SimpleXMLElement
{
    /**
     * trick for simple xml to array conversion
     */
    public function toArray()
    {
        return json_decode(json_encode($this), TRUE);
    }
}

<?php
namespace EnotasGw\V1\Media\Formatters;

class JsonFormatter extends FormatterBase
{
    public function encode($objData, &$contentType)
    {
        $contentType = 'application/json';
        $replaceSrc = array('\\\n', '\\\r', '\\\t');
        $replaceDest = array('\n', '\r', '\t');
        
        return str_replace($replaceSrc, $replaceDest, json_encode($objData));
    }

    public function decode($encodedData)
    {
        return json_decode($encodedData);
    }
}
